<?php
function FillArray($num){
    $array = array();
    for($i = 0; $i < $num; $i++){
        array_push($array, random_int(0, 100));
    }
    return $array;
}

function InsertInto($array){
    $a = 000;
    echo "Число для подстановки: ".$a;
    echo nl2br("\r\n");
    echo " Найденные числа: ";
    for ($i = 0; $i < count($array); $i++){
        if(strpos($array[$i], '2') !== false){
            echo $array[$i]." ";
            if($i == count($array) - 1){
                array_push($array, $a);
            }
            elseif($i == count($array) - 2){
                $next = $array[$i + 1];
                $array[$i + 1] = $a;
                array_push($array, $next);
            }
            else{
                $next = $array[$i + 1];
                $array[$i + 1] = $a;
                for ($j = $i + 2; $j < count($array); $j++){
                    $temp = $array[$j];
                    $array[$j] = $next;
                    $next = $temp;
                }
                array_push($array, $next);
                $i+= 2;
            }
        }
    }
    echo nl2br("\r\n");
    return $array;
}

function PrintArray($array){
    echo "Массив: ";
    foreach ($array as $item){
        echo $item." ";
    }
    echo nl2br("\r\n");
}

$array = FillArray(10);
PrintArray($array);
$array = InsertInto($array);
PrintArray($array);