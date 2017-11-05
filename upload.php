<?php 
   /*  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    //被上传的文件名：
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    //被上传文件类型：
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    //被上传文件大小：
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //存储在服务器的文件的临时副本的名称：
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
    // $_FILES["file"]["error"]：由文件上传导致的错误代码
    } */




    //上传限制：对于 IE，识别 jpg 文件的类型必须是 pjpeg，对于 FireFox，必须是 jpeg
    if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 200000))
      {
      if ($_FILES["file"]["error"] > 0){
        echo "Error: " . $_FILES["file"]["error"] . "<br />";
        }else{
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        echo "Stored in: " . $_FILES["file"]["tmp_name"];
        //检查upload文件夹下是否存在该文件：
        if (file_exists("upload/" . $_FILES["file"]["name"])){
        echo $_FILES["file"]["name"] . " already exists. ";
        }else{//如果不存在，则把文件拷贝到指定的文件夹中(文件夹必须事前建立好):
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
        echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
            }
        }
    }else{
        echo "Invalid file";
      }
      
?>