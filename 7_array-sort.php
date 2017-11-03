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
		//按照数字升序对数组中的元素进行排序:
		$num=array(6,1,8,5,10);
		sort($num);
		foreach($num as $val){
		    echo "$val ";
		}

        echo "<br>";

		//按照字母降序对数组中的元素进行排序:
		$name=array("bob","mary","ellen");
		rsort($name);
		foreach($name as $val){
            echo "$val ";
        }

        echo "<br>";

        //根据值对关联数组进行升序排序:
        $peo=array("Bob"=>"20","Mary"=>"17","Tom"=>"21");
        asort($peo);
        foreach($peo as $key=>$key_value){
            echo "$key = $key_value ";
        }

        echo "<br>";

        //根据键对关联数组进行升序排序:
        ksort($peo);
        foreach($peo as $key=>$key_value){
              echo "$key = $key_value ";
        }

        echo "<br>";

        //根据值对关联数组进行降序排序：
        arsort($peo);
        foreach($peo as $key=>$key_value){
              echo "$key = $key_value ";
        }

        echo "<br>";

        //根据键对关联数组进行降序排序：
        krsort($peo);
        foreach($peo as $key=>$key_value){
              echo "$key = $key_value ";
        }      
	?>
</body>
</html>