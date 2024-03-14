<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;
class PostController extends Controller {
    public function index($messages = []) {
        $errors = $messages['error'] ?? []; 
        $success = $messages['success'] ?? null;

        $newPost = new Post();
        $posts = $newPost->getPosts();

        $template = $this->twig->load('posts/posts.twig');
        $postsData = [
            'posts' => $posts,
            'error' => $errors,
            'success' => $success
        ];

        echo $template->render($postsData);
    }


    public function form() {
        $errors = [];
        $success = null;
    
        if (empty($_POST['post_name']) || empty($_POST['post_major']) || empty($_POST['post_description'])) {
            http_response_code(400);
    
            if (empty($_POST['post_name'])) {
                $errors[] = ['title' => 'Error: Name is required'];
            } 
            
            if (empty($_POST['post_major'])) {
                $errors[] = ['title' => 'Error: Major is required'];
            } 
            
            if (empty($_POST['post_description'])) {
                $errors[] = ['title' => 'Error: Description is required'];
            }
        } 
        else {
            $post_name = htmlspecialchars($_POST['post_name']);
            $post_major = htmlspecialchars($_POST['post_major']);
            $post_description = htmlspecialchars($_POST['post_description']);
    
            $success = 'Success! Form Submitted';
        }
    
        $this->index(['error' => $errors, 'success' => $success]);
    }
    

}

?>