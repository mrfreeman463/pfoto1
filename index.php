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

$app->get('/', [Controllers\MainController::class, 'home']);

$app->get('/user/create', [Controllers\UsersController::class, 'create']);

$app->get('/auth/login', [Controllers\AuthControllers::class, 'show_login_form']); // ->add(new AuthMiddleware());

$app->run();