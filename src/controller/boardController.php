<?php
    namespace src\controller;
    $namespace_to_path = str_replace("\\", DIRECTORY_SEPARATOR, __NAMESPACE__);
    $doc_root = str_replace($namespace_to_path, "", __DIR__);

    require_once $doc_root."autoload.php";
    use template\ClassTemplate\BaseController;
    use template\TraitTemplate\FuncitonLogger;

    class boardController
    {
        
        public function helloWorld(){
            echo 'helloworld php ';
        }

        public function list($request){
            echo 'board->list';
        }
    }
?>