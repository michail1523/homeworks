<?php

function __autoload($class_name) {
    include $class_name . '.php';
}


$func=new Functions();


//bootstrap file

//include function

$curr =$func->curCurrency();


 echo $func->render('layout.php', ['curCurrency' =>$func-> curCurrency(),
     'currencyWidget' => $func->currencyWidget($curr),
     'priceWidget' => $func->priceWidget($curr)]);;

//}