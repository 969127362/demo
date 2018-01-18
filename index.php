<?php
//只需要引入autoload.php
//它会去找comeposer.json内配置的autoload填写的参数以及依赖文件require里加载的插件中提供的类；
//不需要我们使用include多个类了
include 'vendor/autoload.php';

//默认让所有动作访问Boot类中的run方法
\core\Boot::run();
