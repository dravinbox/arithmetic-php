<?php
include_once "ISort.php";


class Base implements ISort
{
    public function swap(&$arr,$target_index,$replace_index){
        $tmp = $arr[$target_index];
        $arr[$target_index] = $arr[$replace_index];
        $arr[$replace_index] = $tmp;

    }

    public function sort(&$arr)
    {
        // TODO: Implement sort() method.
    }
}