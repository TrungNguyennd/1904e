
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
   mảng đa chiều chính là phần trong 1 mảng là mảng
    mảng đa chiều là mảng lồng mảng
</pre>
<?php
$array3=array();
$array3["china"]=array("name"=>"trung quốc","city"=>array("bắc kinh","hà nam","quảng châu"));
$array3["vn"]=array("name"=>"việt nam","city"=>array("hà nội","hà nam","thanh hóa "));


echo "<pre>";
print_r($array3);
echo "</pre>";

echo "<br>".$array3["china"]['name'];
echo "<br>".$array3["vn"]['name'];

echo "<br>".$array3["china"]["city"][0];
echo "<br>".$array3["china"]["city"][1];
echo "<br>".$array3["china"]["city"][2];
?>

</body>
</html>