<?php

namespace app\controllers;
use app\core\Controller;
class PostController extends Controller
{
    public function index()
    {
        $posts = []; 

        $template = $this->twig->load('posts/index.twig');
        echo $template->render(['posts' => $posts]);
    }
}

?>