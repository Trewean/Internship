<?php

function FillArray($num){
    $array = array();
    for($i = 0; $i < $num; $i++){
        array_push($array, random_int(0, 100));
    }
    return $array;
}

function FindMaxArray($array){
    $first = 0;
    $len = 1;
    $maxArray = array();
    for($i = 1; $i < count($array); $i++){
        if($array[$i] >= $array[$i - 1]) $len++;
        else{
            if($len > count($maxArray)) $maxArray = array_slice($array, $first, $len);

            $first = $i;
            $len = 1;
        }
    }
    if($len > count($maxArray)) $maxArray = array_slice($array, $first, $len);
    return $maxArray;
}

$array = FillArray(100);
//$array = array(4, 1, 5, 11, 15, 1, 4, 6, 7, 8);
foreach ($array as $item){
    echo $item." ";
}
echo nl2br("\r\n");

$maxArray = FindMaxArray($array);

foreach ($maxArray as $item){
    echo $item." ";
}
echo nl2br("\r\n");
