<?php

//ini_set("error_reporting","E_ALL & ~E_NOTICE");
use Workerman\Worker;
require_once   'Autoloader.php';

$ws_worker = new Worker('Websocket://0.0.0.0:5656');
// 这里只能写1
$ws_worker->count = 1;
// websocket server 启动后在当前进程增加一个socket监听
//$ws_worker->onWorkerStart = function($ws_worker)
//{
//    // 增加一个Socket端口的监听设备发来的数据
//    $socket_worker = new Worker('tcp://0.0.0.0:5555');
//    // 当设备发来数据时如何处理
//    $socket_worker->onMessage = function($connection, $data)
//    {
//        // 这里处理设备发来的数据 $data
//        // 比如像这样给所有的WebSocket连接转发数据
//        global $ws_worker;
//        foreach($ws_worker->connections as $ws_con)
//        {
//           $ws_con->send($data);
//        }
//    };
//    // 给ws_worker添加一个属性保存socket_worker,方便获取
//    $ws_worker->socketWorker = $socket_worker;
//    // 执行监听
//    $socket_worker->listen();
//};

// websocket协议也就是浏览器发来数据时
$ws_worker->onMessage = function($connection, $data)
{
    // 假设需要转发给所有的设备
    global $ws_worker;
    foreach($ws_worker->connections as $socket_con)
    {

            $socket_con->send($data);

    }

    print_r($data);


};

Worker::runAll();