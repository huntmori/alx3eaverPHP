<?php
    namespace template\ClassTemplate;
        $namespace_to_path = str_replace("\\", "/", __NAMESPACE__);
        $doc_root = str_replace($namespace_to_path, "", __DIR__);
        require_once $doc_root."autoload.php";


    class BaseController
    {
        

        public function test():void
        {
            echo '__FILE__:'.__FILE__.'<br>';
            echo '__DIR__:'.__DIR__.'<br>';
            
        }
    }
         
?>