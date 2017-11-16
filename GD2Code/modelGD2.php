<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/16
 * Time: 10:35
 */
/**
 * @param $imgwidth 图片的宽度
 * @param $imgheight
 * @param $n
*/
function createGD2Img($n){
    header ("Content-type: image/png");
    $width=$n*10+5;
    $im = @imagecreate ($width, 20)
    or die ("Cannot Initialize new GD image stream");
//设置背景
    $background_color = imagecolorallocate ($im, 255, 0, 255);
//设置字体颜色
    $text_color = imagecolorallocate ($im, 255, 255, 255);
    $line_color=imagecolorallocate ($im, 0, 255, 0);

//产生随机数 $n个
    $randNum="";
    for($i=0;$i<$n;$i++){
        if($i%2==0){
            $randNum=mt_rand(0,9);
            imagestring ($im, 5, $i*9+5, 2,  $randNum, $text_color);
            imageline ( $im, mt_rand(0,$width), mt_rand(0,20), mt_rand(0,$width), mt_rand(0,20), $line_color);
        }else{
           imageline ( $im, mt_rand(0,$width), mt_rand(0,20), mt_rand(0,$width), mt_rand(0,20), $line_color);
             $randNum=mt_rand(0,9);
            imagestring ($im, 5, $i*9+5, 2,  $randNum, $text_color);
        }
    }
//产生字符串图片

//画干扰线
    for($i=0;$i<$n;$i++){
    }
//创图片（格式为：PNG）
    imagepng ($im);
//销毁
    return $im;
}

?>