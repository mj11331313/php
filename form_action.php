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
	echo $_POST["name"];//$_POST[""]:接收以post方式传的数据,引号内为数据的name值
	?>
	<br>
	password:
	<?php 
	echo $_POST["password"];
	?>
	//get方式同理，将post改为get即可
</body>
</html>