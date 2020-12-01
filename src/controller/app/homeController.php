<?php namespace src\controller\app;
    $namespace_to_path = str_replace("\\", DIRECTORY_SEPARATOR, __NAMESPACE__);
    $doc_root = str_replace($namespace_to_path, "", __DIR__);

    require_once $doc_root."autoload.php";
    use template\ClassTemplate\BaseController;
    
    class homeController extends BaseController
    {
        
        public function index_GET($request)
        {
            echo "index_GET";
            echo 'welcome page';
        }
    }
?>