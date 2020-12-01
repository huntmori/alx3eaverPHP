<?php
    namespace template\ClassTemplate;
        $namespace_to_path = str_replace("\\", DIRECTORY_SEPARATOR, __NAMESPACE__);
        $doc_root = str_replace($namespace_to_path, "", __DIR__);
        require_once $doc_root."autoload.php";

    use template\TraitTemplate\FuncitonLogger;

    class BaseController
    {
        use FuncitonLogger;

        public function test()
        {
            echo '__FILE__:'.__FILE__.'<br>';
            echo '__DIR__:'.__DIR__.'<br>';
            
        }
    }
         
?>