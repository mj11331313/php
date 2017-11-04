<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--enctype:规定在提交表单时要使用内容的类型 multipart/form-data表示文件类型-->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label><input type="file" name="file" id="file"></label><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>