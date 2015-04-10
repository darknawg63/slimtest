<?php 
require 'vendor/autoload.php';
include 'core/database.php';

$app = new \Slim\Slim();

$app->config(array(
    'templates.path' => './app/templates'
));


//routes
$app->get('/employee/show/:id', function ($id) use ($app) { 
    $employee = Employees::show($id);
    $app->render('/employee/show.php', array('employee' => $employee)); 
});



//var_dump($employee->name);
$app->run();