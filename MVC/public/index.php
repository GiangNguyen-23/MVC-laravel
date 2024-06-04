<?php
require_once ('../app/config/config.php');
require_once ('../app/libs/DBConnection.php');
$controller =  isset($_GET['controller']) ? $_GET['controller'] :'home';
$action = isset($_GET['action']) ? $_GET['action'] :'index';
if ($controller== 'home'){
    require_once ('../app/controllers/HomeController.php');
    $homeController = new HomeController();
    $homeController->index();
}else if ($controller=='insert'){
    require_once ('../app/controllers/HomeController.php');
    $homeController = new HomeController();
    $homeController->insert($_POST['name'],$_POST['gender']);

}else if ($controller=='add'){
    require_once ('../app/controllers/HomeController.php');
    $homeController = new HomeController();
    $homeController->add();
}else if ($controller=='update'){
    require_once APP_ROOT.'./app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->update();
}
else if ($controller=='edit'  && isset($_GET['id'])&& is_numeric($_GET['id'])){
    require_once APP_ROOT . '/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->edit((int)$_GET['id']);
}else if ($controller=='delete' &&isset($_GET['id'])&& is_numeric($_GET['id'])){
    require_once APP_ROOT.'./app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->delete((int)$_GET['id']);
}else{
    echo 'Nothing';
}