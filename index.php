<?php 
require 'vendor/autoload.php';
include 'src/database.php';

$app = new \Slim\Slim();

$app->config(array(
    'templates.path' => './templates'
));



$app->get('/demo/:name', function () use ($app) { 
    $message = MyClass::message();
    $employee = MyClass::getEmployee();
    $app->render('template.php', array('employee' => $employee)); 
});



//var_dump($employee->name);
$app->run();