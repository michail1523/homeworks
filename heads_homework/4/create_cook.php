<?php
SetCookie('My_cookie','value');
//echo '--------------'.'<br>';
//echo $_COOKIE['My_cookie'];
//echo '--------------'.'<br>';
SetCookie('My_cookie','');
if(isset($_COOKIE['My_cookie'])){
    echo 'cookie is being';
}else{
    echo 'cookie is not being';
}
