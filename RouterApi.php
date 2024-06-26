<?php
    require_once './libs/Router.php';
    require_once './api/ClothingApiController.php';
    require_once './api/CategoriesApiController.php';

    $router = new Router();

    $router->addRoute('Clothing', 'GET', 'ClothingApiController', 'getClothing');
    $router->addRoute('Clothing/:ID','GET','ClothingApiController','getClothes');
    $router->addRoute('Clothing', 'POST', 'ClothingApiController', 'addClothing');
    $router->addRoute('Clothing/:ID', 'DELETE', 'ClothingApiController', 'deleteClothing'); 
    $router->addRoute('Clothing/:ID', 'PUT', 'ClothingApiController', 'updateClothing');
    
    $router->addRoute('Categories', 'POST', 'CategoriesApiController', 'addCategory');
    $router->addRoute('Categories/:ID', 'DELETE', 'CategoriesApiController', 'deleteCategory'); 
    $router->addRoute('Categories/:ID', 'PUT', 'CategoriesApiController', 'updateCategory');


    

    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>