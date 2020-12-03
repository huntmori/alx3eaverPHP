<?php namespace src;
        $namespace_to_path = str_replace("\\", DIRECTORY_SEPERATOR, __NAMESPACE__);
        $doc_root = str_replace($namespace_to_path, "", __DIR__);
        require_once $doc_root."audtoload.php";
        use Ratchet\MessageComponentInterface;
        use Ratchet\ConnectionInterface;
        class Socket implements MessageComponentInterface 
        {
            /** @Constructor */
            public function __construct() {
                $this->clients = new \SplObjectStorage;
            }

            /** @origin:MessageComponentInterface->onOpen */
            public function onOpen(ConnectionInterface $conn) {
                $this->clients->attach($conn);

                //echo 'New Connection! .$conn->resourceId})\n';
                printf("New Connection(%s)\n", $conn->resourceId);
            }

            /** @origin:MessageComponentInterface->onMessage */
            public function onMessage(ConnectionInterface $from, $msg) {
                foreach($this->clients as $client) {
                    if ( $from->resourceId == $client->resourceId ) {
                        continue;
                    }

                    $client->send("Client $from->resourceId said $msg");
                    printf("Client(%s) said %s", $from->resourceId, $msg);
                }
            }

            /** @origin:MessageComponentInterface->onClose */
            public function onClose(ConnectionInterface $conn){}
            /** @origin:MessageComponentInterface->onError */
            public function onError(ConnectionInterface $conn, \Exception $e){}
        }
?>