
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
$array2=array();
$array2["hn"]="hà nội";
$array2["th"]="thanh hóa ";
$array2["hp"]="hải phòng ";
$array2["hd"]="hải dương";
$array2["hn"]="hà nội";
$array2["hn"]="hà nội";

echo "<pre>";
print_r($array2);
echo "</pre>";

echo"<br>".$array2["hn"];
echo"<br>".$array2["th"];
echo"<br>".$array2["hd"];
//thay đôi giá trị phần tử
$array2["hn"] = "thu đô hà nội";
echo "<pre>";
print_r($array2);
echo "</pre>";
?>

</body>
</html>