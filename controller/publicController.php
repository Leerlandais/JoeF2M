<?php

$route = $_GET['route'] ?? 'home';
switch ($route) {
    case 'home':
        echo $twig->render('publicView/public.home.html.twig');
        break;

    default:
        echo $twig->render('404.html.twig');
        break;
}