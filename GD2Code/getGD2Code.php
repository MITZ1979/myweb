<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/15
 * Time: 15:54
 */
header ("Content-type: image/png");
//创建图片
$im = @imagecreate (50, 20)
or die ("Cannot Initialize new GD image stream");
//设置背景
$background_color = imagecolorallocate ($im, 255, 0, 255);
//设置字体颜色
$text_color = imagecolorallocate ($im, 255, 255, 255);
//产生随机数
//0-9:48-57
//a-z:97-122
//A-Z:65-90
$spword=chr(mt_rand(65,90));
$r1=mt_rand(0,2);
if($r1==0){
    $spword=chr(mt_rand(65,90));
}else if($r1==1){
    $spword=chr(mt_rand(48,57));
}else{
    $spword=chr(mt_rand(97,122));
}
$RANDWORD="01234";
$r2=mt_rand(0,strlen($RANDWORD)-1);//要减一
//$spword=substr($RANDWORD,$r2,1);
$spword=substr($RANDWORD,(mt_rand()%strlen($RANDWORD)),1);
$randNum=$spword.mt_rand(0,9).mt_rand(0,9).mt_rand(0,9);
//产生字符串图片
imagestring ($im, 5, 5, 2,  $randNum, $text_color);
//画干扰线
for($i=0;$i<5;$i++){
    $line_color=imagecolorallocate ($im, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
    imageline ( $im, mt_rand(0,50), mt_rand(0,20), mt_rand(0,50), mt_rand(0,20), $line_color);

}
//创图片（格式为：PNG）
imagepng ($im);
//销毁
imagedestroy ($im);

?>