<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Http\Controllers\AbstractController;
use App\Providers\AppServiceProvider;
use App\Providers\ViewServiceProvider;
use League\Container\Container;
use League\Route\Strategy\ApplicationStrategy;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

// Error Handler registration
$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

// Container initialisation
$container = new Container();


$container->delegate(
    new League\Container\ReflectionContainer
);

$container->addServiceProvider(new AppServiceProvider);
$container->addServiceProvider(new ViewServiceProvider);

// var_dump($container->get(AbstractController::class));die;
// Request generation
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$applicationStrategy = new ApplicationStrategy();
$applicationStrategy->setContainer($container);
// Router initialisation
$router = new League\Route\Router;
$router->setStrategy($applicationStrategy);

// map a route

require dirname(__DIR__).'/routes/web.php';

// Response dispatching
$response = $router->dispatch($request);



