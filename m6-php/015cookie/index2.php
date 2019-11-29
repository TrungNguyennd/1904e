<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    để xóa cookie bạn cần đặt thời gian quá hạn của nó đã qua
    ví dụ đã quá 1h
    time() sẽ lấy ra thời gian hiện tại
    cọn time() -3600 sẽ lấy ra thời gian quá 1 h

</pre>
<?php
// khởi tạo cookie

$cookie_name="username";
$cookie_value="admin";

$time = time() + (86400 * 30);
setcookie($cookie_name, $cookie_value, $time);
/**
 * In ra cookie trước khi xoá
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
</body>
</html>