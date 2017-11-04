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
    //readfile():读取文件，并把文件写入输出缓冲:
    echo readfile('fileTest.txt')."<br>";//读取成功则返回字节数


    //fopen():打开文件，第一个参数:文件名，第二个参数:打开方式，若打开失败则会生成一段消息：
    $open=fopen('fileTest.txt','r') or die('文件打开失败！');//若打开失败则显示“文件打开失败!”
    //fread():读取文件一定的字节数,filesize()获取文件字节数
    echo fread($open,filesize('fileTest.txt'));//表示读到文件尾
    fclose($open);//关闭文件


    //fgets():每次只读取文件的一行,且每次调用后文件指针会移动到下一行：
    $cell=fopen('fileTest.txt','r') or die('文件打开失败！');
    echo fgets($cell);//输出第一行
    echo fgets($cell);//输出第二行
    echo fgets($cell);//输出第三行
    fclose($cell);



    //feof():检查文件指针是否到达文件尾(end of file)：
    $check=fopen('fileTest.txt','r') or die('文件打开失败！');
    while(!feof($check)){//若未到达文件尾
        echo fgets($check)."<br>";
    }
    fclose($check);




    //创建文件：w和a方式下,若要打开的文件不存在,则会自动在当前php文件同级目录下创建该文件
    $create=fopen('newTest.txt','w');


    //fwrite():写入文件,第一个参数:要写入的文件名，第二个参数:要写的字符串
    //注意：若文件已存在并且有数据，原数据会被新数据覆盖(原数据会消失)
   /*  $str="Hello, I'm Cynthia.\n";
    fwrite($create,$str); */
    $str1="How are you?\n";
    fwrite($create,$str1);
    fclose($create);
    ?>
</body>
</html>