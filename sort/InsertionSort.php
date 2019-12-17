<?php

include_once "Base.php";

class InsertionSort extends Base
{
    public function sort(&$arr)
    {
        for ($i = 0;$i< count($arr)-1;$i++ ){
            $this->insert($arr,0,$i,$i+1);
        }
    }

    public function insert(&$arr,$start_index,$end_index,$target_index){
        for ($i = $end_index;$i>=$start_index;$i--){
            if($arr[$target_index]<$arr[$i]){
                $this->swap($arr,$i,$target_index);
                $target_index = $i;

            }else{
                break;
            }

        }

    }

}