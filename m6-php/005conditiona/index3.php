<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    câu lệnh rẽ nhánh có diều kiện
    cú pháp
    if(điêu kiện){
         các câu lệnh sẽ chạy khi điều kiện 1 đúng

    }elseif{
         các câu lệnh sẽ chạu khi mà điều kiện 2 đúng
    }elseif{
         các câu lệnh sẽ chạu khi mà điều kiện 3 đúng
    }elseif{
         các câu lệnh sẽ chạu khi mà điều kiện 4 đúng
    }slse{
          các câu lệnh sẽ chạy khi mà tất cả các điều kiện đều sai
    }
</pre>
<?php
$tuoi=35;
if(($tuoi> 0) && ($tuoi<18)){
   echo "<br> trẻ em";
}elseif (($tuoi > 18) && ($tuoi<30)){
    echo "<br> trưởng thành ";
} elseif ( ($tuoi >= 30 ) && ($tuoi < 50) ) {
    echo "<br> trung niên";
} else {
    echo "<br> tuổi già";
}
?>
</body>
</html>