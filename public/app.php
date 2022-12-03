<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new FrameworkX\App();

$app->get("/", function () {
    return \React\Http\Message\Response::json([
        'me'             => 'enggar tivandi <nekoding>',
        'built_with'     => 'x-framework'
    ]);
});

$app->get("/users", function () {
    return \React\Http\Message\Response::html("<h1>Hello from <pre>/users</pre></h1>");
});

$app->get("/users/{name}", function (Psr\Http\Message\ServerRequestInterface $request) {
    return \React\Http\Message\Response::plaintext(sprintf("Hello, %s", $request->getAttribute('name')));
});

$app->run();