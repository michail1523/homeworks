<?php
require 'clases.php';
$cl2=new LeftMenu();

$cl2->showNews();
if(isset($_GET['button'])){
    $cl2->getContent();
}