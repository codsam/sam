<?php

// 字符串替换函数
//设定字符串中的制定内容，被其他内容替换
//参数：
//1，原字符串中有的，需要被替换的内容
//2，原字符串中没有的，需要被写入的内容
//3，原字符串
//4，是程序员自定义的变量，php函数会自动在变量中存储替换执行的次数

//将字符串中的空格替换成减号
$str = 'hellow word and hellow anybody';
echo str_replace(' ' , '-' , $str,$int);
echo $int;
// ' ' 对应上的1
// '-' 对应上的2
// $str 对应上的3

// 第四个参数一般用作查找关键词出现的次数
//在字符串中查询关键词
$str1 = '看到JFK六九二海洋健康节海洋可就是科技海洋奇偶i佩服海洋计划能否海洋愧疚万分';
str_replace('海洋', '海洋', $str1,$int1);
echo "海洋一共出现{$int}次";