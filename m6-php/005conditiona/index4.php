<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    cú pháp thay thế cho lệnh if slse
    cú pháp này thường được dùng để thay thế cho phép gán giá trị
    $a = (điều kiện) ? giá trị 1: giá trị 2;
    điều kiện là true sẽ lấy sau ? là giá trị gán cho $a
    điều kiện là false sẽ lấy giá trị sau : gán cho $a
</pre>
<?php

$luong = 12000000;
$thue = ($luong > 9000000) ? ($luong * 5 / 100) : 0;
echo "<br>thuế : " . $thue;

?>
</body>
</html>