<?php

define('SITE__URL','http://localhost/Truyen_cua_toi/public/');
define('CUSTOM_URL','http://localhost/Truyen_cua_toi/Views/');
$url = isset($_GET['url']) ? $_GET['url'] : "";
$method = $_SERVER['REQUEST_METHOD'];
include_once "../Controllers/admin-controller.php";
include_once "../Controllers/author-controller.php";
include_once "../Controllers/login-controller.php";
include_once "../Controllers/user-controller.php";
include_once "../Controllers/homepage-controller.php";
switch ($url) {
    
    case 'admin':
        # code...
        switch ($method) {
            case 'GET':
                AdminController::index($_REQUEST);
                return;
            case 'POST':
                AdminController::index($_REQUEST);
                return;
        }
    case '':
        # code...
        switch ($method) {
            case 'GET':
                HomePageController::index($_REQUEST);
                return;
            case 'POST':
                HomePageController::index($_REQUEST);
                return;
        }
    case 'author':
        # code...
        switch ($method) {
            case 'GET':
                AuthorController::index($_REQUEST);
                return;
            case 'POST':
                AuthorController::index($_REQUEST);
                return;
        }
    case 'user':
        # code...
        switch ($method) {
            case 'GET':
                UserController::index($_REQUEST);
                return;
            case 'POST':
                UserController::index($_REQUEST);
                return;
        }
    case 'login':
        # code...
        switch ($method) {
            case 'GET':
                LoginController::index($_REQUEST);
                return;
            case 'POST':
                LoginController::index($_REQUEST);
                return;
        }
    
}