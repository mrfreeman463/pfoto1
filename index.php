<?php

require "vendor/autoload.php";

// Framework
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Factory\AppFactory;
use Slim\Psr7\Response;

// Views
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

// Middleware
use Middleware\DefaultMiddleware;

$app = AppFactory::create();

$twig = Twig::create(__DIR__ . "/views", ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

// $app->addErrorMidlleware(true, true, true);
// $app->add(new DefaultMiddleware());

$app->get('/', [Controllers\MainController::class, 'home']);

$app->get('/tmp', function(Request $request, Response $response, $args) {
    $rpArray = json_encode(['title' => 'TmpPage'], JSON_PRETTY_PRINT);
    $response->getBody()->write($rpArray);

    return $response->withHeader('Content-Type', 'application/json');
})->add(new DefaultMiddleware());

$app->run();