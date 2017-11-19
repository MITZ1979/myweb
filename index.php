<!doctype html>
<html>
    <head>
        <title>58同城首页</title>
        <script language="JavaScript">

            function changeAddress() {
                var div=document.getElementById("showaddress");
                div.innerHTML="<iframe src='./arraytest/ma.php?sn=sheng1' frameborder='no' scrolling='0'></iframe>";
            }
        </script>
    </head>
    <body>
       <div>珠海【<a href="javascript:changeAddress()">切换城市</a>】</div>
       选择城市：
       <div id="showaddress">
       </div>
    </body>
</html>



<?php
/**
 * Created by PhpStorm.
 * User: lol
 * Date: 2017/11/17
 * Time: 15:09
 */

?>