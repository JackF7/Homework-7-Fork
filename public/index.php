<?php
require_once '../app/vendor/autoload.php';
require_once '../app/core/Controller.php';
require_once '../app/models/User.php';
require_once '../app/models/Post.php';
require_once '../app/controllers/MainController.php';
require_once '../app/controllers/UserController.php';
require_once '../app/controllers/PostController.php';

use app\controllers\MainController;
use app\controllers\UserController;
use app\controllers\PostController;


$url = $_SERVER["REQUEST_URI"]; 

$mainController = new MainController();
$postController = new PostController(); 

//if it is "/posts" return an array of posts via the post controller
//if it is "/" return the homepage view from the main controller
//if it is something else return a 404 view from the main controller

switch ($url) {
    case "/posts":
        $postController->index();
        break;

    case "/form":
        $postController->form();
        break;

    case "/":
        $mainController->homepage(); 
        break;

    default:
        $mainController->notFound();
        break;
}