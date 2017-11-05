<!DOCTYPE html>
<!-- 1.创建cookie(必须位于html标签之前): -->
<?php 
    //cookie名：user,cookie值：Cynthia,保存时间：1小时(time()单位是秒)
    /* 备注：在发送cookie时，cookie的值会自动进行URL编码，
    在取回时进行自动解码（为防止URL编码，请使用setrawcookie()取而代之） */
    setcookie("user","Cynthia",time()+3600);
    setcookie("school","NEFU",time()+3600);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 什么是 Cookie？
    cookie常用于识别用户。cookie是服务器留在用户计算机中的小文件。
    每当相同的计算机通过浏览器请求页面时，它同时会发送cookie。
    通过PHP，能够创建并取回cookie的值。-->


    <!-- 2.获取cookie值： -->
    <?php 
    //获取某一个cookie值：
    echo $_COOKIE['user']."<br>";
    //获取所有cookie值：
    print_r($_COOKIE);//返回数组，索引(下标)为cookie名，元素值为cookie值
    echo "<br>";



    // 3.判断某cookie是否已存在：
    if(isset($_COOKIE["user"])){
        echo "Welcome, ".$_COOKIE["user"]."!<br>";
    }else{
        echo "Hello, dear you.<br>";
    }



    //4.删除cookie:
    setcookie("school","",time()-4000);//使到期时间变为原定时间之前
    ?>
</body>
</html>