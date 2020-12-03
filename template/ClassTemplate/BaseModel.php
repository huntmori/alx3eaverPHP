<?php
    namespace template\ClassTemplate;
    
        use stdClass;
        class BaseModel
        {
            public function executeSql($sql, $objConnection)
            {
                $data_set = new stdClass();

                $data_set->sql = $sql;
                
                return $data_set;
            }
        }
    
?>