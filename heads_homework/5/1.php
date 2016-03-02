<?php
session_start();
session_id('id');
session_name('name');
$_SESSION['foo']='bar';
//print_r($_SESSION);
session_abort();
if(isset($_SESSION)){
    echo '+';
}else{
    echo '-';
}