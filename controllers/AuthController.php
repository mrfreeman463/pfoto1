<?php

namespace Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

class AuthControllers
{
    public function show_login_form(Request $request, Response $response, array $args) : Response
    {
        $view = Twig::fromRequest($request);

        return $view->render($response, 'auth/login.html', [
            'title' => 'Форма авторизации'
        ]);
    }

    public function login()
    {

    }

    public function show_login_register()
    {

    }

    public function register()
    {

    }
}