
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
   mảng kết hợp là mảng có key là 1 chuỗi hoặc 1 số chuỗi
</pre>
<?php
//cách 1
$array2=array();
$array2["hn"]="hà nội";
$array2["th"]="thanh hóa ";
$array2["hp"]="hải phòng ";
$array2["hn"]="hà nội";
$array2["hn"]="hà nội";
$array2["hn"]="hà nội";
//cách 2
$array2=array("hn"=>"hà nội","th"=>"thanh hóa ","nd"=>"nam định");
echo "<pre>";
print_r($array2);
echo "</pre>";
?>

</body>
</html>