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
		//������������������е�Ԫ�ؽ�������:
		$num=array(6,1,8,5,10);
		sort($num);
		foreach($num as $val){
		    echo "$val ";
		}

        echo "<br>";

		//������ĸ����������е�Ԫ�ؽ�������:
		$name=array("bob","mary","ellen");
		rsort($name);
		foreach($name as $val){
            echo "$val ";
        }

        echo "<br>";

        //����ֵ�Թ������������������:
        $peo=array("Bob"=>"20","Mary"=>"17","Tom"=>"21");
        asort($peo);
        foreach($peo as $key=>$key_value){
            echo "$key = $key_value ";
        }

        echo "<br>";

        //���ݼ��Թ������������������:
        ksort($peo);
        foreach($peo as $key=>$key_value){
              echo "$key = $key_value ";
        }

        echo "<br>";

        //����ֵ�Թ���������н�������
        arsort($peo);
        foreach($peo as $key=>$key_value){
              echo "$key = $key_value ";
        }

        echo "<br>";

        //���ݼ��Թ���������н�������
        krsort($peo);
        foreach($peo as $key=>$key_value){
              echo "$key = $key_value ";
        }      
	?>
</body>
</html>