<?php 
    namespace template\TraitTemplate;
    trait FuncitonLogger 
    {
        public function __call($methodName, $arguments)
        {
            var_dump("__call");
            $methodList = get_class_methods($this);
            $methodCallName = '' . $methodName;
            var_dump($methodCallName);
            if (in_array($methodCallName, $methodList)) {
                var_dump($methodCallName);
                return call_user_func_array(array($this, $methodCallName), $arguments);
            }
        }
    }
?>