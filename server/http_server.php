<?php
$http = new Swoole\Http\Server("0.0.0.0", 8811);
$http->set([
    'document_root' => __DIR__ .'../public/static',
    'enable_static_handler' => true
]);
$http->on('request', function ($request, $response) {
    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
});
$http->start();