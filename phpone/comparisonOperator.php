<?php

// 比较运算符

// 1，所有比较运算符的执行结果都是布尔类型
// 2，比较远算符只接受一个比较或者判断的条件
/*
>
>=
<=
*/
// == 等于判断
// ===全等判断

//判断整数5是否等于整数3，结果为false
var_dump(5==3);
//判断整数5是否等于整数5，结果为true
var_dump(5==5);
//判断整数5是否等于字符串，结果为true
var_dump(5=='5dsjks');
// == 等于判断，执行过程
// 先将左右两端变量中存储的数据，转化为相同的数据类型，再去进行数据的比较

// 判断整数5是否全等于字符串，结果为false
var_dump(5==='5dsjks');
// === 全等判断，执行原理
//先比较两个变量存储数据的数据类型，如果数据类型不同，直接返回false结果，如果数据类型相同，再比较数值，如果数值相同，返回true,数值不同返回false


/*
总结：
== true的条件：数据类型转化之后的数值相同即可
=== true的条件：数据类型必须相同，存储的数据数值也必须相同
*/


// != 不等判断 与 == 判断结果正好相反
// !== 不全等判断 与 === 判断结果正好相反