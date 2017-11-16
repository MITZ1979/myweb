<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/15
 * Time: 10:33
 */
//魔术常量：
//1、获取当前行号
echo "这是第一行代码<br>";
echo "这是第二行代码<br>";
echo "这是第三行代码".__LINE__."<br>";
echo "这是第四行代码<br>";
echo "这是第五行代码".__LINE__."<br>";
echo "这是第六行代码<br>";
//2、获取当前文档所在位置的路径
echo "当前文档所在路径是：".__FILE__;
//提升：__DIR__是当前文档所在目录。
?>