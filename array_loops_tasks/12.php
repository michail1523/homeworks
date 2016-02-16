<?php
$val=1000;
$num=0;
$res=0;
while($val>50){
    $num++;
    $val=$val/2;
    $res=$val;

}
echo $num.'<br>'.$res;