<?php

use model\Manager\ProjectManager;
$projectManager = new ProjectManager($db);

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