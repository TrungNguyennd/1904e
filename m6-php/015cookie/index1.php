<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    cookie được sử dụng để nhận diện người dùng
    cookie là 1file nhỏ được sever nhứng vào máy tính người dùng
    mỗi lần 1 máy tính đó gửi requesst đến server nó cũng sẽ gửi cookie đến
    với php bạ có thể tạo ra và lấy giá trị của cookie
    để tạo mới cookie bạn sử dụng hàm setcookie()
    cú pháp :
    setcookie (name,vaulue, epire,path, domain, secure,httponly);
    chí số tham số name đầu tiên là bắt buộc truyền vào
    còn các tham số sau đó như vulue, path,... có thể truyền hoặc không
</pre>
<?php
/*thời gian 1 ngày là 864000 giây
cookie bên dưới sexsoongs trong 30 ngày */
$cookie_name="username";
$cookie_value="admin";
setcookie($cookie_name,$cookie_value,time()+(86400*30));

?>
<?php
//xem tất cả các cookie
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
<?php
//truy cập vào 1cookie

if(!isset($_COOKIE["username"])){
    echo '<br> Cookie $_COOKIE["username"] chưa được tạo';
} else {
    echo '<br>Giá trị của $_COOKIE["username"] là : ' . $_COOKIE["username"];
}
?>
</body>
</html>