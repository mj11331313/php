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
        //定义一个4行3列的数组：
        $cars=array(
            array('BMW',13,24),
            array('Volvo',23,15),
            array('Land Rover',20,23),
            array('Saab',19,22)
        );
        //获取数组值：
        echo $cars[0][0].'--库存: '.$cars[0][1].' 销量: '.$cars[0][2];
        echo '<br>';
        echo $cars[1][0].'--库存: '.$cars[1][1].' 销量: '.$cars[1][2];
        echo "<br>";

        //循环输出数组值：
        for($row=0;$row<4;$row++){
            for($col=0;$col<3;$col++){
                echo $cars[$row][$col]." ";
            };
            echo "<br>";
        }
    ?>
</body>
</html>