<?php

abstract class Menu{
    abstract function showNews();

}
interface ContentOfNews{
   function getContent();
}
class TopMenu extends Menu implements ContentOfNews{

    function showNews(){

        $html='<html><body><form action="index.php"method="get"<p><input type="submit" name="button" value="read news"></p></form> </body></html>';
        echo '<center>'.'<h1>'.'NEWS'.'</h1>'.'</center>';
        echo '<center>'."<a href=http://google.com/>world news</a>".'<br>'.'</center>';
        echo '<center>'.'local news'.'<br>'.'</center>';
        echo '<center>'.'weather forecast'.'<br>'.'</center>';
        echo '<center>'.'tech news'.'<br>'.'</center>';
        echo '<center>'.'science news'.'<br>'.'</center>';
        echo '<center>'.$html.'</center>';
    }

    function getContent()
    {
        $lines=file('http://www.bbc.com/news/world-europe-35714087/');
        foreach($lines as $value){
            echo $value;
        }
    }
}
class LeftMenu extends Menu implements ContentOfNews
{

    function showNews(){
        $html='<html><body><form action="index2.php"method="get"<p><input type="submit" name="button" value="read news"></p></form> </body></html>';
        echo '<h1>' . 'NEWS' . '</h1>';
        echo "<a href=http://google.com/>world news</a>" . '<br>';
        echo 'local news' . '<br>';
        echo 'weather forecast' . '<br>';
        echo 'tech news' . '<br>';
        echo 'science news' . '<br>';
        echo $html;
    }

    function getContent()
    {
        $lines=file('https://news.yandex.ua/world.html/');
        foreach($lines as $value){
            echo $value;
        }
    }
}

