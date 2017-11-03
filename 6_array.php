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
        $cars=array("Volvo","BMW","SAAB");
        echo "I like $cars[0] ,$cars[1]  and $cars[2].";
        echo "<br>";
        //获得数组的长度 - count():
        echo count($cars);
        echo "<br>";

        //关联数组($key:key值 $value:value值)：
        $info=array("Bob"=>"20","Mary"=>"19");
        foreach($info as $key=>$value){//变量名$key和$value可改变
            echo "$key:$value ";
        }
    ?>
</body>
</html>