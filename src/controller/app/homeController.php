<?php namespace src\controller\app;
    $namespace_to_path = str_replace("\\", "/", __NAMESPACE__);
    $doc_root = str_replace($namespace_to_path, "", __DIR__);

    require_once $doc_root."autoload.php";
    use template\ClassTemplate\BaseController;
    use common\CommonUtil;
    use src\view\app\index  AS IndexView;

    class homeController extends BaseController
    {   
        use \template\TraitTemplate\FunctionLogger;

        
        public function index_GET(array $request) : void
        {
            CommonUtil::loadBootstrapCss();   
            new IndexView();
            CommonUtil::loadBootstrapJs();
        }

        public function __call(string $methodName, array $arguments)
        {
            return $this->logging($methodName, $arguments);
        }
    }
?>