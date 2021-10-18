<?php

namespace Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Models\UsersModel;

class UsersController
{
    public function create(Request $request, Response $response)
    {
        $result = (new UsersModel())->createUser();
        print_r($result);die;
    }
}