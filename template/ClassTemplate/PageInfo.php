<?php
    namespace template\ClassTemplate
    {
        /**
         * @author:oliver <huntmori04x22@gmail.com>
         * @description:default Pagination util class
         * @ref:https://gist.github.com/huntmori/d9d9b8a473d93076fb7e2f54f264e62a
         */
        class PageInfo
        {
            //current page
            public  int $page;

            // current pagesize
            public  int $page_size;

            //  using for LIMIT statement of sql
            public  ?int $begin;

            // mean total count of WHERE state filtered data rows
            public  ?int $total_count;

            // mean maximum page of YOUR SQL RESULT
            public ?int $total_page;

            // page_group Properties
            //  for($i=$pageInfo->start_page; $i<=$pageInfo->end_page; $i++ ){ ... }
            // start page of PageGroup
            public ?int $start_page;
            // end page of PageGroup
            public ?int $end_page;

            // mean total visible data row counts
            public ?int $nonConditionTotalCount;
            
            public ?int $page_group_size;
            public ?int $next_page_group_index;
            public ?int $prev_page_group_index;

            /**
             * @usage: $objPageInfo = new PageInfo($_GET);
             */
            public function __construct(array $data)
            {
                $this->page = isset($data['page']) == false? 1 :$data['page'];
                $this->page_size = isset($data['page_size']) == false ? 10 : $data['page_size'];
                $this->begin = ($this->page -1 ) * $this->page_size;
                $this->page_group_size = isset($data['page_group_size']) == false ? 10 : $data['page_group_size'];
            }

            /**
             * @usage:
             *          before sql
             *              $objPageInfo->setTotalCount($total_count);
             *          after sql 
             *              $sql="  SELECT  ...
             *                      FROM    ...
             *                      WHERE   1=1
             *                      AND     ...
             *                      LIMIT   {$objPageInfo->begin},{$objPageInfo->limit}
             */
            public function setTotalCount(int $total_count):void
            {
                $this->total_count = $total_count;
                $this->total_page = ceil($this->total_count / $this->page_size);
                
                $this->start_page = floor(($this->page-1)/$this->page_group_size) * $this->page_group_size +1;
                $this->end_page = $this->start_page + $this->page_group_size -1;
                $this->end_page = $this->end_page > $this->total_page ? $this->total_page : $this->end_page;

                if($this->page <= $this->page_group_size) {
                    $this->prev_page_group_index = 1;
                }
                else {
                    $this->prev_page_group_index = $this->start_page-1;
                }
                if($this->end_page + 1 >= $this->total_page) {
                    $this->next_page_group_index = $this->total_page;
                }
                else {
                    $this->next_page_group_index = $this->end_page+1;
                }
            }

        }
    }
?>