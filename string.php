<?php
//字符串，使用单引号或双引号包含起来的，单引号，不会解析字符串里面的变量，双引号会解析里面的变量
$txt = "Hello world";
$txt2 = "What a nice day";
echo $txt . " " . $txt2;

//获取字符串长度
echo strlen("Hello world");

//在字符串中查找指定的文本,返回首次出现的索引位置
echo strpos("Hello world","world");

//截取字符串
echo substr("Hello world",5,2);