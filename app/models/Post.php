<?php

namespace app\models;

class Post
{
    public static function getPosts()
    {
        $posts = [
            ['title' => 'Name', 'content' => 'Jack Forester'],
            ['title' => 'College', 'content' => 'Fordham University'],
            ['title' => 'Course', 'content' => 'CISC 3300'],
        ];

        return $posts;
    }
}