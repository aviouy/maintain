<?php
include __DIR__ . '/vendor/autoload.php'; // 引入 composer 入口文件
use EasyWeChat\Foundation\Application;
$options = [
    'debug'  => true,
    'app_id' => 'wx0fc27470396144fa',
    'secret' => 'd4624c36b6795d1d99dcf0547af5443d',
    'token'  => 'aviouy',
    // 'aes_key' => null, // 可选
    'log' => [
        'level' => 'debug',
        'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
    ],
    //...
];
$app = new Application($options);
$response = $app->server->serve();
// 将响应输出
$response->send(); // Laravel 里请使用：return $response;