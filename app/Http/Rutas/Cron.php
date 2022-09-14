<?php

Route::get('sendEmailInQueue',
    [
        'uses' => 'Cron\CronController@sendEmailInQueue',
        'as'   => 'sendEmailInQueue',
    ]);
