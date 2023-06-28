<?php

$request = 'http://'.($_SERVER['SERVER_NAME']==='localhost') 
        ? str_replace("/startfish", "",$_SERVER['REQUEST_URI'])
        : $_SERVER['REQUEST_URI']; 

var_dump($request);

$request = explode('?', $request)[0];


switch ($request) {
    case '/' :
        require __DIR__ . '/home.php';
        break;
    case '' :
        require __DIR__ . '/home.php';
        break;
    case '/order' :
        require __DIR__ . '/order.php';
        break;
    case '/stamps' :
        require __DIR__ . '/stamps.php';
        break;
    case '/templates' :
        require __DIR__ . '/templates.php';
        break;
    case '/template' :
        require __DIR__ . '/template.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.html';
        break;
}