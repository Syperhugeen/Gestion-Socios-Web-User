<?php

namespace App\Servicios;

use App\Helpers\CurlHelper;
use App\Helpers\HelpersGenerales;

class ServicioApiSendEmail
{

    public static function senBlogEmail(
        $blog,
        $userName,
        $userEmail
    ) {

        $TOKEN_TO_SEND_EMAIL = env('TOKEN_API');
        $Blog                = $blog;
        $UserNewsletter      = $userName;
        $Email               = $userEmail;

        $body = view('emails.newslleter_blog',
            compact('Blog', 'Email'))->render();

        try {

            $response = CurlHelper::postUrlData('https://apptest.gestionsocios.com.uy/api/newsletter/easysocio/sendEasySocioNewsletter',
                [
                    'sendToName'  => $UserNewsletter,
                    'sendToEmail' => $Email,
                    'subject'     => $Blog->name . ' 🚀',
                    'body'        => $body,
                ],
                [
                    'Authorization: Bearer ' . $TOKEN_TO_SEND_EMAIL,
                ]
            );

            if ($response['Https_status'] === 200 || $response['Https_status'] === 202 || $response['Https_status'] === 201) {
                HelpersGenerales::log('info', 'emailNewsletter', $Email . ' -> ' . json_encode($response['Data']) . ' -> ' . $response['Https_status']);
            } else {
                HelpersGenerales::log('error', 'emailNewsletter', $Email . ' -> '  . json_encode($response) .'-----' .  $response['Data'] . ' -> ' . $response['Https_status']);
            }
        } catch (\Exception $e) {

            HelpersGenerales::log('error', 'emailNewsletter', $Email . ' -> ' . $e . ' -> ' . $e->getMessage());
        }
    }
}
