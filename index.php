<?php
require_once("config.php");
require("controlador/indexController.php");
require(__DIR__ . '/controlador/productosController.php');

$controller = new ProductosController();
$controller->listar();



if(isset($_GET['p'])):
    $metodo =  $_GET['p'];
    if(method_exists('productosController',$metodo)):
        productosController::{$metodo}();
    endif;
else:
    if(isset($_GET['i'])):
        $metodo =  $_GET['i'];
        if(method_exists('indexController',$metodo)):
            indexController::{$metodo}();
        endif;
    else:
    indexController::index();
    endif;
 endif;
?>