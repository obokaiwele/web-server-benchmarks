<?php

// https://gist.github.com/nkt/e49289321c744155484c
// https://reactphp.org/
// https://github.com/reactphp/http/blob/v1.1.0/examples/51-server-hello-world.php

use Psr\Http\Message\ServerRequestInterface;
use React\EventLoop\Factory;
use React\Http\Message\Response;
use React\Http\Server;

require __DIR__ . '/../vendor/autoload.php';

$loop = Factory::create();

$data = json_encode([
    'code' => 'ok',
    'error' => false,
    'payload' => 'Hello World'
]);

$server = new Server($loop, function (ServerRequestInterface $request) {
    return new Response(
        200,
        ['Content-Type' => 'application/json'],
        $data,
    );
});

$socket = new \React\Socket\Server(isset($argv[1]) ? $argv[1] : '127.0.0.1:1337', $loop);
$server->listen($socket);

echo 'Listening on ' . str_replace('tcp:', 'http:', $socket->getAddress()) . PHP_EOL;

$loop->run();
