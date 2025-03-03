<?php

namespace App\Repositorios;

use App\Entidades\Noticia;
use Illuminate\Support\Facades\Cache;

/**
 * Repositorio de consultas a la base de datos User
 */
class NoticiasRepo extends BaseRepo
{

    public function getEntidad()
    {
        return new Noticia();
    }

    public function getBlogsByBelong(
        $orderAttribute = 'id',
        $order = 'desc',
        $length = null,
        $webBelong = null,
        $lang = 'es',
        $filterThisIds = []
    ) {

        $webBelong = $webBelong ?? config('constants.web_belong.localWeb');
        return $this->entidad
            ->where('borrado', 'no')
            ->active()
            ->where('web_belong', $webBelong)
            ->where('lang', $lang)
            ->whereNotIn('id', $filterThisIds)
            ->orderBy($orderAttribute, $order)
            ->limit($length)
            ->get();
    }

    public function latestBlogs(
        $lang = 'es',
        $webBelong = null,
        $length = 3
    ) {

        $webBelong = $webBelong ?? config('constants.web_belong.localWeb');

        $cacheKey = config('cache.cacheKeys.latestBlogs.key') . "_{$lang}_{$webBelong}";

        return Cache::remember($cacheKey, config('cache.cacheKeys.latestBlogs.ttl'), function () use ($webBelong, $length, $lang) {
            return $this->getBlogsByBelong('id', 'desc', $length, $webBelong, $lang);
        });
    }

    public function getAllBlogsByWebBelongPaginated(
        $request,
        $webBelong,
        $paginationLength = 10
    ) {

        return $this->entidad
            ->where('borrado', 'no')
            ->where('web_belong', $webBelong)
            ->where(function ($q) use ($request) {
                if ($request->get('name') != null) {
                    $q->where('name', 'LIKE', '%' . trim($request->get('name')) . '%');
                }
            })
            ->where(function ($q) use ($request) {
                if ($request->get('lang') != null) {
                    $q->where('lang', $request->get('lang'));
                }
            })
            ->orderBy('id', 'desc')
            ->paginate($paginationLength);
    }

    public function getBlogsRelacionados(
        $Blog,
        $length = 6,
        $webBelong = null,
        $lang = 'es',
        $filterThisIds = []

    ) {

        $webBelong = $webBelong ?? config('constants.web_belong.localWeb');
        $Blogs = $this->getEntidad()
            ->Active()
            ->where('id', '<>', $Blog->id)
            ->whereNotIn('id', $filterThisIds)
            ->where('web_belong', $webBelong)
            ->where('lang', $lang)
            ->where(function ($q) use ($Blog) {
                if ($Blog->tags != null) {
                    $Tags = explode(',', trim($Blog->tags));

                    if (count($Tags) > 0) {
                        $q->where('tags', "LIKE", "%" . trim($Tags[0]) . "%");

                        unset($Tags[0]);

                        foreach ($Tags as $Tag) {
                            if ($Tag != '') {
                                $q->orWhere('tags', "LIKE", "%" . trim($Tag) . "%");
                                $q->orWhere('name', "LIKE", "%" . trim($Tag) . "%");
                            }
                        }
                    }
                }
            })
            ->orderBy('id', 'desc')
            ->limit($length)
            ->get();

        return $Blogs;
    }

    public function getBlogsRelacionadosConEsteValor($String_oarray)
    {
        $Blogs = $this->getEntidad()
            ->where('borrado', 'no')
            ->Active()
            ->where('web_belong', config('constants.web_belong.localWeb'))
            ->where('lang', 'es')
            ->where(function ($q) use ($String_oarray) {
                if (is_array($String_oarray)) {
                    // H a g o   e l   w h e r e   d e l   p r i m e r o
                    $q->where('tags', "LIKE", "%" . trim($String_oarray[0]) . "%");
                    $q->orWhere('name', "LIKE", "%" . trim($String_oarray[0]) . "%");
                    // Q u i t o   e l   e l e m e n t o
                    unset($String_oarray[0]);

                    foreach ($String_oarray as $Valor) {
                        $q->orWhere('tags', "LIKE", "%" . trim($Valor) . "%");
                        $q->orWhere('name', "LIKE", "%" . trim($Valor) . "%");
                    }
                } else {
                    $Valor = trim($String_oarray);
                    $q->where('name', "LIKE", "%" . $Valor . "%");
                    $q->orWhere('tags', "LIKE", "%" . $Valor . "%");
                }
            })
            ->orderBy('id', 'desc')
            ->get();

        return $Blogs;
    }
}
