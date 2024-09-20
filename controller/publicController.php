<?php

use model\Manager\ProjectManager;
use model\Manager\CommentManager;
$projectManager = new ProjectManager($db);
$commentManager = new CommentManager($db);



$route = $_GET['route'] ?? 'home';
switch ($route) {
    case 'home':
        $projects = $projectManager->getRandomProjects();
        echo $twig->render('publicView/public.home.html.twig', ['projects' => $projects]);
        break;

    default:
        echo $twig->render('404.html.twig');
        break;
}