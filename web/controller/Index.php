<?php
/**
 * Date: 2018/1/18
 * Time: 15:17
 */
namespace web\controller;
use core\View;
class Index{
    public function entry(){
        //加载模板，调用View 类里面的make方法
       return (new View())->make('index');
        //echo 1;
    }
}





