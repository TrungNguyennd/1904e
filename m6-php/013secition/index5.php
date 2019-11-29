<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>chỉnh sửa sessition trong php</h1>
<?php
// tạo ra sessition
$_SESSION["user_name"]="admin";

// xem tất cả các sessition đang hoạt động
echo "<br> in ra sessition trước khi sửa ";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// sửa sessition
$_SESSION["user_name"]="mod";

// xem tất cả các sessition đang hoạt động
echo "<br> in ra sessition sau khi sửa ";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>

</body>
</html>
