<?php
namespace App\Managers;

use App\Managers\ManagerBase;

class nuevo_newsletter_manager extends ManagerBase
{

    public function getRules()
    {
        $rules = [
            'email' => 'required|email',
        ];

        return $rules;
    }

}
