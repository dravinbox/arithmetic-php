<?php


class BubbleSort extends Base
{
    public function sort(&$arr)
    {
        for ($i = count($arr)-1;$i > 0;$i-- ){
            $this->bubble($arr,0,$i);

        }
    }

    public function bubble(&$arr,$start_index,$end_index){
        for ($i=$start_index;$i < $end_index;$i++){
            if($arr[$i]>$arr[$i+1]){
                $this->swap($arr,$i,$i+1);
            }
        }

    }


}