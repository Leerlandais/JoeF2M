<?php

use model\Manager\ProjectManager;
use model\Manager\CommentManager;
use model\Mapping\CommentMapping;
$projectManager = new ProjectManager($db);
$commentManager = new CommentManager($db);


// ADD NEW CODE
if (isset(
    $_POST["contactFormUser"],
    $_POST["contactFormMail"],
    $_POST["contactFormTele"],
    $_POST["contactFormText"]
)) {
    die(var_dump($_POST));
    $commMapData = [
        'joe_comm_nom' => $_POST["contactFormUser"],
        'joe_comm_mail' => $_POST["contactFormMail"],
        'joe_comm_tele' => $_POST["contactFormTele"],
        'joe_comm_mess' => $_POST["contactFormText"]
    ];
    // sanitisation of code is handled during the Mapping by the Setters
    $codeMapping = new CommentMapping($commMapData);
    die(var_dump($commMapData));
    $addCode = $commentManager->addComment($codeMapping);
}


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