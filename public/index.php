<?php declare(strict_types=1);

use Zend\HttpHandlerRunner\Emitter\SapiEmitter;


require dirname(__DIR__).'/bootstrap/app.php';

// send the response to the browser
(new SapiEmitter)->emit($response);

