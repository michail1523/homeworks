<?php
class PagesController extends Controller{

    public function index(){
   $this->data['test_content']='here will be pages list';
    }
    public function view(){
        $params=App::getRouter()->getParams();
        if(isset($params[0])){
            $alias = strtolower($params[0]);
          $this->data['content']= "it will be an alias '{$alias}' here";
        }
    }
}