<?php
// https://www.w3c-lab.com/php-7-1-swoole-v1-9-5-vs-node-js-benchmark-test-php7-swoole-beats-node-js/
// https://www.swoole.com/

$http = new Swoole\Http\Server("127.0.0.1", 1337);

$http->on('start, function($server') {
    echo "Swoole HTTP server is started on http://127.0.0.1:1337\n";
});

$data = json_encode([
    'code' => 'ok',
    'error' => false,
    'payload' => 'Hello World'
]);

$http->on('request', function($request, $response) {
    $response->header('Content-Type', 'application/json');
    $response->end($data);
});

$http->start();
