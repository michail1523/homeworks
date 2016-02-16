<?php
$monts='february';
$arr=['january','february','march','april','may','june','juli','august','september','october','november','december'];
foreach($arr as $value) {
    if ($monts == $value) {
        echo '<b>'.$monts.'<br>';
    }else{
        echo $value.'<br>';
    }

}