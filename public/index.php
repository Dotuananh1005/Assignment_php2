<?php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Models\CategoryModel;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";
$router = new Router;


Router::get('/contact', [HomeController::class, 'contact']);
Router::get('/home', [HomeController::class, 'index']);
Router::get('/list', [HomeController::class, 'listProduct']);
Router::get('/cate', [HomeController::class, 'getCate']);
Router::get('/product', [ProductController::class, 'index']);
Router::get('/create-product', [ProductController::class, 'create']);
Router::post('/create-product', [ProductController::class, 'store']);
Router::get('/update-product', [ProductController::class, 'show']);
Router::post('/update-product', [ProductController::class, 'update']);
Router::get('/delete-product', [ProductController::class, 'delete']);

$router->resolve();
