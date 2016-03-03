

<?php

require 'clases.php';

$cl1=new TopMenu();
$cl1->showNews();
if(isset($_GET['button'])){
    $cl1->getContent();
}
