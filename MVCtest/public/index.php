<?php
require_once ('../app/config/config.php');
require_once ('../app/libs/DBConnection.php');
$controller =  isset($_GET['controller']) ? $_GET['controller'] :'home';
$action = isset($_GET['action']) ? $_GET['action'] :'index';
if ($controller== 'home'){
    require_once ('../app/controllers/HomeController.php');
    $homeController = new HomeController();
    $homeController->index();
}else{
    echo 'Nothing';
}