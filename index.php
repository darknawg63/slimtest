<?php 
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->config(array(
    'templates.path' => './templates'
));

$app->get('/demo/:name', function () use ($app) { 
    $message = MyClass::message();
    $app->render('template.php', array('name' => $message)); 
});

$newbie = new AppName();


$app->run();