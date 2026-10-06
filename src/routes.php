<?php

global $app;

use Slim\Routing\RouteCollectorProxy;
use Slim\Views\Twig;

$app->get('/', function ($request, $response, $args) {
   $view = Twig::fromRequest($request);
   return $view->render($response, 'Pages/about.twig');
});

$app->get('/game-dev', function ($request, $response, $args){
   $view = Twig::fromRequest($request);
   return $view->render($response, 'Pages/gameDev.twig');
});

$app->get('/web-dev', function ($request, $response, $args){
    $view = Twig::fromRequest($request);
    return $view->render($response, 'Pages/webDev.twig');
});