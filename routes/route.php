<?php

if (isset($_GET['action'])){
    $request = $_GET['action'];
    if ($request == 'home'){
        $route = "HomeController@indexAction";
    }
    if ($request == 'login'){
        $route = "UserController@loginAction";
    }
    if ($request == 'logout'){
        $route = "UserController@logoutAction";
    }
    if ($request == 'register'){
        $route = "UserController@registerAction";
    }
    if ($request == 'upload'){
        $route = "FileController@addPostAction";
    }
    if ($request == 'fileUpload'){
        $route = "FileController@addPostAction";
    }
    if ($request == 'main'){
        $route = "MainController@mainAction";
    }
    if ($request == 'zel'){
        $route = "ZelController@zelAction";
    }
    if ($request == 'bio'){
        $route = "BioController@bioAction";
    }
    if ($request == 'blog'){
        $route = "BlogController@blogAction";
    }
    if ($request == 'pol'){
        $route = "PolController@polAction";
    }
}