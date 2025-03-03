<?php

$webBelong = [
    'localWeb'               => 'LOCAL_WEB',
    'easysocioExternalWeb'   => 'EASYSOCIO_EXTERNAL_WEB',
    'worldmasterExternalWeb' => 'WORLMASTER_EXTERNAL_WEB',
];

$availableWebBelongs = [];

foreach ($webBelong as $key => $value) {
    $availableWebBelongs[] = $value;
}

$availableLangsData = [
    'es' => 'Español',
    'en' => 'Inglés',
    'pt' => 'Portugués',
];

$availableLangs = [];

foreach ($availableLangsData as $key => $value) {
    $availableLangs[] = $key;
}

return [

    'available_web_belongs'  => $availableWebBelongs,
    'web_belong'             => $webBelong,
    'available_langs'        => $availableLangs,
    'available_langs_select' => $availableLangsData,
];
