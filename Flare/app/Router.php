<?php
use Buki\Router\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
$router = new \Buki\Router\Router([
    'paths' => [
        'controllers' => CONFIG.'../Controllers',
    ],
    'namespaces' => [
        'controllers' => 'Controllers',
    ],
]);

// https://github.com/izniburak/php-router/wiki/5.-Controllers

$router->get('/hi', function(Request $request, Response $response) {
    $response->setContent('Hello World');
    return $response;
});

$router->any('/', 'Home@index');
$router->any('/all', 'Home@all');
$router->any('/all/:id', 'Home@all');
$router->any('/delete/:id', 'Home@delete');

$router->error(function() {
    View('404/404') ;
});
$router->run();
