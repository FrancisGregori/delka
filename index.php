<?php

$pageTitle = 'Base Project';

function getCurrentUri()
{
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
    $uri      = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    if (strstr($uri, '?'))
        $uri = substr($uri, 0, strpos($uri, '?'));
    $uri = '/' . trim($uri, '/');
    return $uri;
}

$baseUrl = getCurrentUri();

include_once('header.php');

if ($baseUrl == '/' || $baseUrl == '/home') {
    include_once('pages/homepage.php');
} else {
    if (file_exists("pages{$baseUrl}.php")) {
        include_once("pages{$baseUrl}.php");
    } else {
        include_once("pages/404.php");
    }
}

include_once('footer.php');
