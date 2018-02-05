<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->render($response, 'index.twig', [
        'args' => $args
    ]);
})->setName('index');
$app->post('/login', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/login' route");
    $body = $request->getParsedBody();
    $body['is_logged'] = ($body['mail'] === "hajer@gmail.com" && $body['pwd'] === "pass");
    return $this->view->render($response, 'login.twig', $body);
});