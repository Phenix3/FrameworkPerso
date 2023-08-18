<?php


use League\Route\Strategy\ApplicationStrategy;

/*$router->get( '/', function (ServerRequestInterface $request) : ResponseInterface {
    $response = new Response;
    $response->getBody()->write('<h1>Hello, World!</h1>');
    return $response;
});*/
$router->setStrategy(new ApplicationStrategy());

$router->get( '/', 'App\Http\Controllers\PagesController::home');
$router->get('/blog', 'App\Http\Controllers\PagesController::blogIndex');
