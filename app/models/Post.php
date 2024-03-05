<?php

namespace app\models;

class Post
{
    public static function getPosts()
    {
        $posts = [
            ['title' => 'Post 1', 'content' => 'Jack Forester'],
            ['title' => 'Post 2', 'content' => 'Fordham University'],
            ['title' => 'Post 3', 'content' => 'CISC 3300'],
        ];

        return $posts;
    }
}