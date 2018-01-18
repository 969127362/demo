<?php
/**
 * Date: 2018/1/18
 * Time: 15:39
 */
namespace core;
class View{
    //定义一个需要加载的模板文件名称
    public $file;
    //模板需要使用的变量属性
    public $vars=[];

    /**
     *加载模板方法
     */
    public function make($file){
        //将传递进来的参数（模板文件名）赋值给当前属性
        $this->file = 'view/'. $file . '.php';
        //返回的是当前对象
        return $this;
    }

    public function __toString(){
        //在加载模板之前


        //引入需要的模板
        include $this->file;

        return '';
    }


}