<?php

class MainController
{
    public $model;

    public function indexAction()
    {
        $this->checkUserAccess();
        $posts = $this->model->getAllPostData();
        return require_once('../view/main.php');
    }
}