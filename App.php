<?php
    require "src/Socket.php";
    require "vendor/autoload.php";
    
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
