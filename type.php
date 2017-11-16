<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/15
 * Time: 8:55
 */
$num123=2.6;
$str1="$num123\a4567890"."abcd".'+-*/';
$str2='$num123\t45"123"67890'.'abcd'."+-*/<input type='text' value='1\t2'>";
$str3="<textarea rows='5'>1\r\n2\n3</textarea>";
echo $str1."<br>";
echo $str2."<br>";
echo $str3."<br>";

$num=(boolean)$num;
echo $num;
echo gettype($num);
echo "<br>";
if(is_integer($num)){
    echo "yes";
}else{
    echo "no";
}
?>