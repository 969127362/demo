<?php
/**
 * Date: 2018/1/18
 * Time: 14:41
 */
namespace core;
class Boot{
    public static function run(){
        //开启session
        session_start() || session_id();
        //分析get参数，通过get参数中的值来指向不同的控制器里的方法
        self::parseGet();
    }
    public static function parseGet(){
        //定义get参数中的一个s参数，此参数的格式为s=a/b, a：需要调用的控制器名称，b：需要调用的方法名

        //判断get参数的s是否存在，若存在，通过分析s参数来置顶控制器和方法，若不存在，给默认的控制器和方法
        if(isset($_GET['s'])){
            //S存在 ， 分析s
            //处理get参数中的S，
            $info = explode('/',$_GET['s']);    //将字符串切割成数组
            $c = 'web\controller\\' . ucfirst($info[0]);    //定义控制器名称
            $a = $info[1];
        }else{
            //S 不存在，设置默认控制器和方法
            $c = 'web\controller\Index';    //默认访问的控制器
            $a = 'entry';   //默认执行的方法
        }
        //实例化$c控制器，调用$a 方法
        echo (new $c())->$a();
    }



















}