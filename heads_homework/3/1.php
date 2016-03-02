<?php
session_start();
if($_REQUEST['save']){
    $cur=isset($_REQUEST['curency'])?$_REQUEST['curency']:'doll';
}
//setcookie('curency',$cur,time()+360000,'/');
$_SESSION['curr']=$cur;
$filename='c:\users\new\desktop\file3.csv';

$html='';
if(file_exists($filename)){
    $html1=file_get_contents($filename);

   $html2=explode(',',$html1);


   $cur=[$html2[5],$html2[6]];
for($i=0; $i<count($html2)-2;$i++) {

       echo $html2[$i].'<br>';
}
print_r($_SESSION['curr']);

}
