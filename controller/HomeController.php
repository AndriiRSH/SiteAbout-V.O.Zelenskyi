<?php

class HomeController extends UserController
{
    public $model;

    public function indexAction()
    {
        $this->checkUserAccess();
        $posts = $this->model->getPostData();
        return require_once('../view/dashboard.php');
    }

}