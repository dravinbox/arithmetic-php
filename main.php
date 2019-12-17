<?php
include_once "sort/SelectSort.php";
include_once "sort/BubbleSort.php";
include_once "sort/InsertionSort.php";


echo "hello,world\n";
$arr = [3,5,2,1,4];

//$sort = new SelectSort();
//$sort->sort($arr);

//$sort = new BubbleSort();
//$sort->sort($arr);

$sort = new InsertionSort();
$sort->sort($arr);

foreach ($arr as $v){
    print($v);
}


