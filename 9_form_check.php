<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<!--将表单数据提交到当前页面处理：-->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		name:<input type="text" name="name">
		school:<input type="text" name="school">
		<input type="submit">
	</form>
	<?php
	echo $_POST["name"];
	echo $_POST["school"];
	?>
</body>
</html>