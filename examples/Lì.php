<?php
#调用PHP_DS类
$PHP_DS_LANGUAGE="ZH";
include("../PHP-DS/PHP_DS.php");
#为PHP_DS创建一个对象
$x = new PHP_DS_SUPPORTED("example-lang/ZH.PHP");


//----------------------------------------------------------------------------------------------------
// 让我们做我们的调整
//----------------------------------------------------------------------------------------------------
#更改类名称
$x->类 ="班级名称";
#密钥类型
$x->运用="目的";
#功能标准显示
$x->功能="功能";
#可变的标准指标
$x->变量="变量";
//----------------------------------------------------------------------------------------------------
// 让我们开始创建我们的代码:)
//----------------------------------------------------------------------------------------------------
$x->码='  
class 班级名称
{
public $变量1 = "它的空";

public function 功能1()
{
  echo "你好<br>";
}
public function 功能2()
{
  echo $this->变量1;
}

}
';

//----------------------------------------------------------------------------------------------------
// 并使用我们的代码
//----------------------------------------------------------------------------------------------------
$x->加();
$y = new 例子;
$y->介绍="我是PHP-DS。我是PHP类的语言包。";
$y->打个招呼();
$y->介绍你自己();
