<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    các hàm xử lý mảng trong php
</pre>
<?php
$array1= array(0,1,2);
// đếm số phần tử của mảng
echo "<br> hàm count : " .count($array1);

//kiểm tra 1 biến có phải là mảng hay không

echo "<nr> ham is_array ";
var_dump(is_array($array1));

/*kiểm tra 1 mảng có phải mảng rỗng hay không
empty($aray1) trả về true nếu mảng rỗng và trả về false nếu mảng không rỗng
!empty($aray1) trả về true nếu mảng có dữ liệu và trả về false nếu mảng không có dữ liệu*/

echo "<br>";
var_dump(empty($array1));
?>
</body>
</html>