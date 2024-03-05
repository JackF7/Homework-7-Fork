<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;
class PostController extends Controller
{
    public function index()
    {

        $newPost = new Post();
        $posts = $newPost->getPosts();

        $template = $this->twig->load('posts/posts.twig');
        $postsData = [
            'posts' => $posts,
        ];
        echo $template->render($postsData);
    }
}

?>