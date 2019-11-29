
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
//cách truy xuất các phần tử của mảng thông qua key
<?php
$array1=array("hà nội","nam định","hải phòng ","hải dương");
echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<br>".$array1[0];
echo "<br>".$array1[2];
echo "<br>".$array1[1];
echo "<br>".$array1[3];
echo "<br>".$array1[4];

/*cách gán lại value cho 1 phần tử trong mảng
thông qua key*/

$array1[0]="thủ đô hà nội";
$array1[1]="thủ đô nam định";
echo "<pre>";
print_r($array1);
echo "</pre>";
?>

</body>
</html>