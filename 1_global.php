<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
     $x=3;
     $y=4;
     function add(){
        //访问函数内的全局变量:
        /*方法一： global $x,$y;//global:用于访问函数内的全局变量
        $y = $x+$y; */
        //方法二：
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];//中括号内为变量名
     }
     add();
     echo $y;


     //static：
     function add2(){
         static $i=0;//初始值始终为上次改变后的值
         echo $i;
         $i++;
     }
     add2();
     add2();
    ?>
</body>
</html>