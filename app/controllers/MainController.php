<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{
    protected $twig;
    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => "Jack Forester's Homepage",
        ];

        echo $template->render($homepageData);
    }

    public function notFound() {

        $template = $this->twig->load('notFound/notFound.twig');
        http_response_code(404);git add .
        echo $template->render(); 

    }   
}