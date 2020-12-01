<?php
    spl_autoload_register(function($class){
        echo $class.'<br>';
        $class = str_replace("\\", "/",$class);
        echo $class.'<br>';
        echo __DIR__."/".$class.".php<br>";
        require_once "./".$class.".php";
    });

    
?>