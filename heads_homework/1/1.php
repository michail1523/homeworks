<?php
header('Content-Type:application/pdf; charset=UTF-8');
header('Content-Disposition:inline; filename = file.pdf');


$filename = 'vk.com/doc197871620_200413812?hash=b85c75a984c23a3cae&dl=41b59d55224399fcf3.pdf';


$html = '';
if (file_exists($filename)) {
    $html = file_get_contents($filename);
    if($html != '') {
        print_r($html);
    }
    else echo 'НЕТ такого файла';
    exit();
}