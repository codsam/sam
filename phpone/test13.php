<?php

//错误抑制运算符
//抑制表达式中的错误
//1,对执行的语句没有效果，例如echo，如果要抑制echo输出的错误，需要将@符号写在输出内容前，而不是echo语句前
//2,对于语法错误，没有效果。
// $int;
// @var_dump($int);

// @var_dump(is_null($int));

// echo @$int;


//执行运算符  ``  两反引号
//执行外部命令使用
//例如：外部命令 ipconfig
//将外部命令运行完毕，将结果赋值给变量
$str = `ipconfig`;
//cmd中的编码格式为GBK，与utf-8编码格式不同，输入内容需要转化编码格式
echo "<pre>";
echo iconv(`GBK`,'utf-8',$str);
echo "</pre>";


/*

位运算符
~ 按位反
& 按位与
| 按位或
^ 按位异或
<< 按位左移
>> 按位右移

*/