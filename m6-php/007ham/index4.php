<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    phạm vi của biến
    đọc trong https://freetuts.net/xay-dung-ham-trong-php-11.html
</pre>


<?php
function tinhluong($luongthang,$songaycong) {
    // những biến khai báo trong hàm sẽ được goi là biến cục bộ
    $tongngaycong=24;
    /*
     * tham số trong hàm sẽ được gọi là biên cục bộ
     */
    $luongthuclinh = ($luongthang*$songaycong)/24;
    return $luongthuclinh;
}
// gọi hàm
/*
 * biến khai báo ngoài hàm gọi là biến toàn cục
 * */
$x = 10000000;
$y = 12;
echo "<br> Lương tháng của bạn là : " . tinhluong($x, $y);
?>

</body>
</html>