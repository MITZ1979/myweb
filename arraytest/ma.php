<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/17
 * Time: 11:11
 */

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
    $shengname=$_GET['sn'];
    echo "<select>";
    for($i=0;$i<count(array_keys($address[$shengname]));$i++){
        echo "<option>".array_keys($address[$shengname])[$i]."</option>";
    }
    echo "</select>";

?>