<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositorios\NoticiasRepo;
use Illuminate\Http\Request;

class ApiBlogController extends Controller
{

    protected $noticiaRepo;

    public function __construct(NoticiasRepo $noticiaRepo)
    {
        $this->noticiaRepo = $noticiaRepo;
    }

    public function getBlogs(Request $Request)
    {

        $lang              = $Request->get('lang');
        $webBelong         = $Request->get('webBelong');
        $orderBy           = $Request->get('orderBy') ?? 'id';
        $order             = $Request->get('order') ?? 'desc';
        $length            = $Request->get('length') ?? null;
        $idsAlreadyFetched = $Request->get('idsAlreadyFetched') ?? [];

        $blogs = $this->noticiaRepo->getBlogsByBelong($orderBy, $order, $length, $webBelong, $lang, $idsAlreadyFetched);

        return $blogs;
    }

    public function relatedBlogs(Request $Request)
    {

        $blogId            = $Request->get('blogId');
        $length            = $Request->get('length') ?? 6;
        $idsAlreadyFetched = $Request->get('idsAlreadyFetched') ?? [];
        $webBelong         = $Request->get('webBelong');

        $blog = $this->noticiaRepo->find($blogId);

        if ($blog) {
            return $this->noticiaRepo->getBlogsRelacionados($blog, $length, $webBelong, $blog->lang, $idsAlreadyFetched);
        }

        return response()->json(['error' => 'Blog not found'], 404);
    }

    public function getBlogById(Request $Request)
    {
        $blogId = $Request->get('blogId');

        $blog = $this->noticiaRepo->find($blogId);

        if ($blog) {
            return $blog;
        }

        return response()->json(['error' => 'Blog not found'], 404);
    }


    public function getAllByLang(Request $Request)
    {
        $lang = $Request->get('lang');
        $webBelong = $Request->get('webBelong');

        return $this->noticiaRepo->getBlogsByLang($lang, $webBelong);
    }
}
