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
    //定义类:
    class Car{ 
        var $color;
        //定义构造函数：
        function Car($color="red"){//参数设默认值
            $this->color=$color;
        }
        function what_color(){
            return $this->color;
        }
    }

    //定义方法：遍历输出$obj中的属性名和属性值
    function print_vars($obj){
        foreach(get_object_vars($obj) as $prop=>$val){
            echo "$prop = $val\n";
        }//$prop:属性名  $val:属性值
    }
    //类的实例化：
    $mi = new Car("white");
    print_vars($mi);
    ?>
</body>
</html>