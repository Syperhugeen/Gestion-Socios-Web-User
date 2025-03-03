<?php
namespace App\Managers;

use App\Managers\ManagerBase;

/**
 *
 */
class noticia_manager extends ManagerBase
{

    public function getRules()
    {
        $rules = [
            'name'        => 'required',
            'description' => 'required',
            'img'         => 'required',
            'web_belong'  => 'required|in:' . implode(',', config('constants.available_web_belongs')),
            'lang'        => 'required|in:' . implode(',', config('constants.available_langs')),
        ];

        return $rules;
    }

}
