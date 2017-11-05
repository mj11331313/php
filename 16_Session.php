<!DOCTYPE html>
<!-- 1.启动会话：把用户信息存储到 PHP session 中之前，首先必须启动会话 -->
<!-- session_start() 函数必须位于 <html> 标签之前: -->
<?php session_start(); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    /* 关于Session:
    在服务器上存储用户信息以便随后使用。
    但所存储的信息是临时的，在用户离开网站后将被删除 */


    //2.session变量的存储与获取：
    $_SESSION["person"]="Tom";
    $_SESSION["kid"]="Bob";
    echo "name: ".$_SESSION["person"]."<br>";
    echo "name: ".$_SESSION["kid"]."<br>"; 


    //3.同样可以使用isset()函数判断某session变量是否存在



    //4.删除session数据：
    //删除某一变量：
    unset($_SESSION["kid"]);
    echo "name: ".$_SESSION["kid"]."<br>";     
    //彻底删除当前所有session数据：
    session_destroy();    
    ?>
</body>
</html>