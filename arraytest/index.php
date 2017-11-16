<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/16
 * Time: 13:41
 */
//数组的创建（定义）和初始化
$arr1=array('aa','b','c','d');
$arr2=range(1,10);
$arr3=range('a','z');
//显示数组内容：
echo $arr1[1];
var_dump($arr1);
//var_dump($arr2);
//var_dump($arr3);
$arr4=array('Mike'=>20,'Tim'=>22);
var_dump($arr4);
echo "Mike今年".$arr4['Mike']."岁";
//添加元素：(题目:给$arr1添加一个元素'tt')
$arr4['Marry']=18;
var_dump($arr4);
$arr4['Marry']=19;
var_dump($arr4);
$arr1[]='tt';
var_dump($arr1);
$arr1[count($arr1)]='countt';
var_dump($arr1);
array_push($arr1,'hhh');
var_dump($arr1);

$arr1[]=$arr4;
$arr1[count($arr1)]=$arr2;
array_push($arr1,$arr3);
var_dump($arr1);
//删除元素
$arr5=array ("orange", "banana", "apple", "raspberry");
array_shift($arr5);
var_dump($arr5);
//在数组中搜索给定的值，如果成功则返回相应的键名
echo $arr4['Mike'];
echo array_search(20,$arr4);
?>