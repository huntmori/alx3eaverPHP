<?php
    var_dump($_REQUEST);
    class board{
        public static function list($request){
            echo 'method';
            var_dump($request);
        }
    }
    echo '<br>';
    $url = $_REQUEST['url'];
    var_dump($url);
    
    $method = array();
    $method['board/list/'] = 'board::list';
    $method[$url]($_REQUEST);
?>