<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

define('BASE_URL', 'http://localhost/flightPHP/');

use App\Controllers\HomeController;
use App\Controllers\TestController;

require_once 'vendor/autoload.php';

Flight::route('/', function(){
	$ctrl = new HomeController();
	Flight::render('home.php', $ctrl->index());
});

Flight::route('/teste', function() {
	$ctrl = new TestController();
	Flight::render('teste.php', $ctrl->index());
});
Flight::map('notFound', function(){
    // Display custom 404 page
    Flight::render('404.php', ['title' => '404']);
});

Flight::start();