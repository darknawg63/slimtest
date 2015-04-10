<?php 
require 'vendor/autoload.php';
include 'core/database.php';

$app = new \Slim\Slim();

$app->config(array(
    'templates.path' => './app/templates'
));


//routes
$app->get('/demo/:id', function ($id) use ($app) { 
    $message = Employees::message();
    $employee = Employees::getEmployee($id);
    $app->render('/employee/show.php', array('employee' => $employee)); 
});



//var_dump($employee->name);
$app->run();