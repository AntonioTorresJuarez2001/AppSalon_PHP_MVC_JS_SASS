<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\CitaController;
use Controllers\LoginController;
use Controllers\APIController;
use MVC\Router;
$router = new Router();

// iniciar sesion
$router->get('/', [LoginController::class,'login']);
$router->post('/', [LoginController::class,'login']);
//cerrar sesiion
$router->get('/logout', [LoginController::class,'logout']);

//recuperaar contraseña
$router->get('/olvide', [LoginController::class,'olvide']);
$router->post('/olvide', [LoginController::class,'olvide']);
//recuperar
$router->get('/recuperar', [LoginController::class,'recuperar']);
$router->post('/recuperar', [LoginController::class,'recuperar']);

//crear cuenta
$router->get('/crear-cuenta', [LoginController::class,'crear']);
$router->post('/crear-cuenta', [LoginController::class,'crear']);

//confirmar
$router->get('/confirmar-cuenta',[LoginController::class,'confirmar']);
$router->get('/mensaje',[LoginController::class,'mensaje']);

//areas privadas
$router->get('/cita', [CitaController::class, 'index']);
$router->get('/admin', [adminController::class, 'index']);

// API de Citas
$router->get('/api/servicios', [APIController::class, 'index']);
$router->post('/api/citas', [APIController::class, 'guardar']);
$router->post('/api/eliminar', [APIController::class, 'eliminar']);

                    
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas(); 