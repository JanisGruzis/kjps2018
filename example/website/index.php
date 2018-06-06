<?php

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0])
{
    case '/':
        require 'pages/home.php';
        break;
    case '/about':
        require 'pages/about.php';
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        break;
}
