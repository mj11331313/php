<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	name:
	<?php 
	echo $_POST["name"];//$_POST[""]:������post��ʽ��������,������Ϊ���ݵ�nameֵ
	?>
	<br>
	password:
	<?php 
	echo $_POST["password"];
	?>
	//get��ʽͬ����post��Ϊget����
</body>
</html>