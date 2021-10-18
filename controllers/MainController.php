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
        $picLinks = [
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
            'https://cdn.pixabay.com/photo/2021/09/15/11/34/woman-6626615_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/09/28/05/05/bird-6663217_960_720.jpg',
            'https://cdn.pixabay.com/photo/2021/10/05/16/53/kimono-6683245_960_720.jpg',
            'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014618_960_720.jpg',
            'https://cdn.pixabay.com/photo/2020/11/23/13/16/coffee-5769721_960_720.png',
        ];
        
        return $view->render($response, 'home.html', [
            'title' => 'Welcome to the main page!',
            'picLinks' => $picLinks
        ]);
    }

    public function ajaxLoadImages()
    {
        return;
    }
}