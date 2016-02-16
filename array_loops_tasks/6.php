<?php
$arr=['green'=>'зеленый','red'=>'красный','blue'=>'голубой'];
foreach($arr as $key=>$value){
    $en[]=$key;
    $ru[]=$value;

}
foreach($en as $value){
   echo $value.'<br>';
}

foreach($ru as $value){
    echo $value.'<br>';
}