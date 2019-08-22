<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>xóa 1 sessition</h1>
<?php
//$_sessition là 1 mảng
$_SESSION["user_name"]="admin";
$_SESSION["user_email"]="trungcntt96@gmail.com";

$location=" hà nội";

$_SESSION["user_location"]=$location;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//để xóa 1 sessiton
unset($_SESSION["user_email"]);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html><?php
