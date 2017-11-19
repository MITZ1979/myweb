<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/16
 * Time: 15:05
 */
//    $address=array();
//$address['广东省']=array('珠海市'=>array('香洲区','斗门区'),'中山市','广州市');
//$address['湖南省']=array('h','长沙市','张家界','岳阳');
//$address['江西省']=array('南昌','赣州','上饶');
//    var_dump($address['广东省']);
$witchsheng="sheng1";
$address=array(
    'sheng1'=>array('sheng1shi1'=>array('sheng1shi1qu1','sheng1shi1qu2','sheng1shi1qu3'),
        'sheng1shi2'=>array('sheng1shi2qu1','sheng1shi2qu2','sheng1shi2qu3'),
        'sheng1shi3'=>array('sheng1shi3qu1','sheng1shi3qu2','sheng1shi3qu3'),
    ),
    'sheng2'=>array('sheng2shi1'=>array('sheng2shi1qu1','sheng2shi1qu2','sheng2shi1qu3'),
        'sheng2shi2'=>array('sheng2shi2qu1','sheng2shi2qu2','sheng2shi2qu3'),
        'sheng2shi3'=>array('sheng2shi3qu1','sheng2shi3qu2','sheng2shi3qu3'),
    ),
    'sheng3'=>array('sheng3shi1'=>array('sheng3shi1qu1','sheng3shi1qu2','sheng2shi1qu3'),
        'sheng3shi2'=>array('sheng3shi2qu1','sheng3shi2qu2','sheng3shi2qu3'),
        'sheng3shi3'=>array('sheng3shi3qu1','sheng3shi3qu2','sheng3shi3qu3'),
    )
);
$testvalue="PHP value";
function showShi()
{

    $address=array(
        'sheng1'=>array('sheng1shi1'=>array('sheng1shi1qu1','sheng1shi1qu2','sheng1shi1qu3'),
            'sheng1shi2'=>array('sheng1shi2qu1','sheng1shi2qu2','sheng1shi2qu3'),
            'sheng1shi3'=>array('sheng1shi3qu1','sheng1shi3qu2','sheng1shi3qu3'),
        ),
        'sheng2'=>array('sheng2shi1'=>array('sheng2shi1qu1','sheng2shi1qu2','sheng2shi1qu3'),
            'sheng2shi2'=>array('sheng2shi2qu1','sheng2shi2qu2','sheng2shi2qu3'),
            'sheng2shi3'=>array('sheng2shi3qu1','sheng2shi3qu2','sheng2shi3qu3'),
        ),
        'sheng3'=>array('sheng3shi1'=>array('sheng3shi1qu1','sheng3shi1qu2','sheng2shi1qu3'),
            'sheng3shi2'=>array('sheng3shi2qu1','sheng3shi2qu2','sheng3shi2qu3'),
            'sheng3shi3'=>array('sheng3shi3qu1','sheng3shi3qu2','sheng3shi3qu3'),
        )
    );
    $testvalue="";

    return $testvalue;
}
//    var_dump(array_keys($address));
//在PHP文档里面，PHP代码块外面
?>
<script>
    function test(shengname) {
        var shi=document.getElementById("shi");
        <?php
            $testvalue="\"+shengname+\"";
        ?>
        shi.innerHTML="<iframe src='./ma.php?sn="+shengname+"' frameborder='no' scrolling='0'></iframe>";

    }
    
</script>
<select onchange="test(this.value)" style="float: left">
   <?php
        $shengs=array_keys($address);
        for($i=0;$i<count($shengs);$i++){
            echo "<option>".$shengs[$i]."</option>";
        }
   ?>
</select>
<div id="shi" style="float: left">

</div>

