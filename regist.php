<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/14
 * Time: 13:46
 */
////定义变量
//$mod="";
////定义常量
//define("WebRoot","C:/myweb/");
//echo WebRoot;
//$mod=$_POST['mod'];
//正则表达式匹配函数，在 subject 字符串中搜索与 pattern
// 给出的正则表达式相匹配的内容。
//preg_match();

//$pattern="/PHP/";//定义要匹配的规则
//$pattern='/^[a-zA-Z]+[a-zA-Z0-9]+$/';
//$str="PHP I love PHP in 2017";
//echo preg_match($pattern,$str);
         //1234567890
//$string = "April 12, 2017";//"April 15, 2003";
//$pattern = "/(\w+) (\d+), (\d+)/i";
//$replacement = "年份：\${3},月份：\${1},日：\${2}";
//print preg_replace($pattern, $replacement, $string);
$patternmod="/^(13|15|18|17|14)\d{9}$/";
$patterncheckCode="/^\d{5}$/";
$patternmodusername="/^[a-zA-Z]/";
$patternmodpassword="/^[a-zA-Z]/";
$mod=$_POST['mod'];
$checkCode=$_POST['checkCode'];
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
echo "你输入的信息如下：";
echo "<br>电话号码：".$mod;
echo "<br>验证码：".$checkCode;
echo "<br>用户名：".$username;
echo "<br>密码：".$password;
echo "<br>确认密码：".$repassword;

echo "
    <script language='JavaScript'>
        location.href='./index.php';
    </script>
";

//echo "<br><br>表单验证如下：";
//if(preg_match($patternmod,$mod)){
//    echo "<br>号码正确";
//}
//else{
//    echo "<br>号码不正确";
//}
//if(preg_match($patterncheckCode,$checkCode)){
//    echo "<br>验证码正确";
//}
//else{
//    echo "<br>验证码不正确";
//}
//if(preg_match($patternmodusername,$username)){
//    echo "<br>用户名正确";
//}
//else{
//    echo "<br>用户名不正确";
//}
//if(preg_match($patternmodpassword,$password)){
//    echo "<br>密码正确";
//}
//else{
//    echo "<br>密码不正确";
//}
//if($password==$repassword){
//    echo "<br>确认密码正确";
//}
//else{
//    echo "<br>确认密码不正确";
//}

?>