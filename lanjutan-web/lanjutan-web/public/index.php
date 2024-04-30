<?php

// namespace Administrator\LanjutanWeb;

// if (isset($_SERVER['PATH_INFO'])){
//     echo $_SERVER['PATH_INFO'];

// } else{
//     echo "tidak ada path info";
// }


require_once __DIR__ . '/../vendor/autoload.php';


use Iqbal\LanjutanWeb\App\Router;
use Iqbal\LanjutanWeb\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/kategori', HomeController::class, 'kategori');
Router::add('GET', '/produk', HomeController::class, 'produk');
Router::add('GET', '/supplier', HomeController::class, 'supplier');

Router::run();




// echo "Test PUBLIC";