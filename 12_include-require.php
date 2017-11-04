<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>欢迎进入！</h1>
    <!-- include和require的区别：
    require 会生成致命错误（E_COMPILE_ERROR）并停止脚本
    include 只生成警告（E_WARNING），并且脚本会继续  -->


    <!--例：使用include引用footer.php文件:-->
    <?php
     include 'footer.php';
     require 'error.php';
     echo "颜色：".$color;
     echo "姓名：".$name;
     ?>


<!--require：当文件被应用程序请求时使用；
    include：当文件不是必需的，且应用程序在文件未找到时应该继续运行时使用 -->
</body>
</html>