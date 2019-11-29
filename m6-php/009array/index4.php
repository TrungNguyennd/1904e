<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/*cách khai báo mảng chỉ số cách 1
áp dụng mảng chỉ số
mảng chỉ số sẽ tự tạo key khi truyền value cho mảng */
$cities=array("hà nội","hải phòng", "nam định");

/*cách khai báo mảng chỉ số cách 2
khai báo key cho mảng chỉ số */
$cities= array (0=>"hà nội",1=>"hải phòng ",2=>"nam định");
//cách khai báo mảng chỉ số cách 3
$cities=array();
$cities[]="hà nội";
$cities[]="nam định";
$cities[]="hải dương";
$cities[]="thái bình ";
$cities[]="hà nam";

//cách 4
$cities=array();
$cities[0]="hà nội";
$cities[1]="nam định";
$cities[2]="hải dương";
$cities[3]="thái bình ";
$cities[4]="hà nam";

?>
</body>
</html>
