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


    $commMapData = [
        'joe_comm_nom' => $_POST["contactFormUser"],
        'joe_comm_mail' => $_POST["contactFormMail"],
        'joe_comm_tele' => $_POST["contactFormTele"],
        'joe_comm_mess' => $_POST["contactFormText"]
    ];
    // sanitisation of code is handled during the Mapping by the Setters
    $commMapping = new CommentMapping($commMapData);
    $addCode = $commentManager->addComment($commMapping);
}


$route = $_GET['route'] ?? 'home';
switch ($route) {
    case 'home':
        $projects = $projectManager->getRandomProjects();
        $projTypeAni = $projectManager->getAllProjectsByClass("aniDig");
        $projTypeDes = $projectManager->getAllProjectsByClass("webDes");
        $projTypeDev = $projectManager->getAllProjectsByClass("webDev");
        echo $twig->render('publicView/public.home.html.twig', ['projects' => $projects, 'aniDig' => $projTypeAni, 'webDes' => $projTypeDes, 'webDev' => $projTypeDev]);
        break;

    default:
        echo $twig->render('404.html.twig');
        break;
}