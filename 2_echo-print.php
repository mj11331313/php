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
   /*  echo - 能够输出一个以上的字符串
    print - 只能输出一个字符串，并始终返回 1 */
    $cars=array("BMW","SAAB");
    echo "my car is a {$cars[0]}";//{}:字符串里嵌套变量
    echo "<br>";
    print "my car is a {$cars[0]}";//结果与echo相同

    echo "<br>";

    //输出数据类型：
    var_dump($cars);
    ?>
</body>
</html>