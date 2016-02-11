<?php
$age=-10;
if(17<$age&&$age<59) {
    echo "Вам работать";
}
else if(17>=$age&&$age>0){
    echo "Вам еще рано работать";

}else if($age>59){
    echo "Вам пора на пенсию";
}else{
    echo 'Неизвестный возраст';
}