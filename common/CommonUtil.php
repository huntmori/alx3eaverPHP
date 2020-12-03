<?php namespace common;
    $namespace_to_path = str_replace("\\", "/" , __NAMESPACE__);
    $doc_root = str_replace($namespace_to_path, "", __DIR__);
    
    class CommonUtil
    {
        public static function loadBootstrapCss()
        {
            echo '<link rel="stylesheet" href="/alx3eaver/common/css/bootstrap.min.css">';
        }

        public static function loadBootstrapJs()
        {
            echo '<script src="/alx3eaver/common/js/bootstrap.js"></script>';
        }
    }

?>