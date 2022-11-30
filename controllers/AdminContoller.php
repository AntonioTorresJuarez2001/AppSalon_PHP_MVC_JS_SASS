<?php

namespace Controllers;

class adminController{
    public static function index(Router $router){
        
            session_start();

            $router->render('admin/index',[
                'nombre' => $_SESSION['nombre']
            ]);
    }
}