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
    //strlen():返回字符串长度
    echo strlen("hello");
    echo "<br>";

    //strpos(,):检索字符串，返回下标（0开始）
    echo strpos("hello world","w");
    echo "<br>";

    //常量定义(true表示变量名不区分大小写)：
    define("GREET","Hello, Cynthia!",true);
    echo greet;
    echo "<br>";

    //不等号：<>和!=
    if(5 <> 6) echo "true";
    echo "<br>";

    //异或：xor(有且仅有一个为 true，则返回 true)
    if(5>4 xor 5<6){
        echo "xor:true";
    }else{
        echo "xor:false";
    };

    //===:完全相同  !===:完全不同
    ?>
</body>
</html>