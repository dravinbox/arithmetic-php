<?php

include_once "Base.php";

class SelectSort extends Base
{
    public function sort(&$arr){
        for ($i=0;$i<count($arr)-1;$i++){
            $mi = $this->minIndex($arr,$i,count($arr)-1);
            $this->swap($arr,$i,$mi);
        }
    }

    /**
     * 获取最小值的下标
     * @param $arr
     * @param $start_index
     * @param $end_index
     * @return int
     */
    public function minIndex($arr,$start_index,$end_index){
        $min_index =$start_index;
        for ($i=$start_index;$i<=$end_index;$i++){
            if($arr[$i]<$arr[$min_index]){
                $min_index = $i;
            }
        }
        return $min_index;
    }

}