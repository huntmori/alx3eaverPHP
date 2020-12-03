<?php 
    namespace template\TraitTemplate;
    trait FunctionLogger 
    {
        public function logging($methodName, $arguments)
        {
            echo "<br>LOGGER IN <br>";
            echo "<br>MethodName:$methodName<br>";
            echo "<br>arguments:<pre>";
            print_r($arguments);
            echo "</pre><br>";
            echo "<br>Out OF Logger<br>";
            $methodList = get_class_methods($this);
            $methodCallName = '' . $methodName;
            var_dump($methodCallName);
            if (in_array($methodCallName, $methodList)) {
                var_dump($methodCallName);
                return call_user_func_array(array($this, $methodCallName), $arguments);
            }
        }
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