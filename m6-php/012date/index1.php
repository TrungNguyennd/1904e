<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
timezone là múi giờ
    giờ việt nam là múi giờ :"Asia/Ho_Chi_Minh"
    link các múi giờ của châu á :https://www.php.net/manual/en/timezones.asia.php
    link các múi giờ của thế giới : https://www.php.net/manual/en/timezones.php
    nếu muốn lấy giờ hiện tại chính xác thì cần đặt đúng múi giờ của zone đó
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    nếu muốn chuyển múi giò thì cần thay đổi tham số hàm date_default_timezone_set()
    mình sẽ có 2 kiểu lấy múi giờ trong php:
    kiểu 1 kiểu cho người đọc
    kiểu 2 múi giờ linux

</pre>
<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

echo "<br> giờ cho người đọc :" . date("H:i:s d/m/Y");
echo "<br> Giờ của linux ( timestamp )  : " . time();

?>
</body>
</html>
