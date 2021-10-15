<?php

namespace Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

class MainController
{
    public function home(Request $request, Response $response, array $args) : Response
    {
        $view = Twig::fromRequest($request);
        
        return $view->render($response, 'home.html', [
            'title' => 'Welcome to the main page!'
        ]);
    }
}