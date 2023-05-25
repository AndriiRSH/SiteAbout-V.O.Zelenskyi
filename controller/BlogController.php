<?php

class BlogController
{
    public $model;

    public function blogAction()
    {
        $posts = $this->model->getPostData();
        return require_once('../view/blog.php');
    }
}