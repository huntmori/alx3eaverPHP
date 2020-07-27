<?php
    require dirname(__FILE__)."/vendor/autoload.php";
    require dirname(__FILE__)."/src/Socket.php";
    use Ratchet\Server\IoServer;
    use Ratchet\Http\HttpServer;
    use Ratchet\WebSocket\WsServer;
    use MyApp\Socket;

    
    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Socket()
            )
        ),
        8989
    );

    $server->run();
?>
