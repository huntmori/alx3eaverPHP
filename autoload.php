<?php
    spl_autoload_register(function($class){
        // echo $class.'<br>';
        $class = str_replace("\\", "/",$class);
        // echo $class.'<br>';
        // echo "DIR is :".__DIR__."<br>";
        // echo "<br>REAL_PATH:".__DIR__."/".$class.".php<br>";
        require_once $class.".php";
    });

    
?>