<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    kiểu dữ liệu tạo mảng (array)
    kiểu dữ liệu tạo mảng dùng để chứa nhiều giá trị
    khác với kiểu số nguyên, số thực,chuỗi chỉ chứa 1 giá trị đơn
    thì mảng có thể chứa nhiều giá trị
    để khai báo mảng thì sử dụng từ khóa (array)
    hoặc[] {ngoặc vuông chỉ sử dụng trong php 7}
    chú ý không thẻ echo cho mảng
    nếu muốn xem mảng thì phải dùng hàm var_dump()
    hoặc sử dụng hàm print_r() hàm này thường được dùng với thẻ pre trong html
    để phân tách các phần tử trong mảng sẽ sử dụng dấu ,
</pre>
<?php
$arr1= array(1,2,3,4,5);
$arr2= array("A","B","C","D");
$arr3= array(true,false, true,false);

var_dump($arr1);

echo "<pre>";
print_r($arr1);
echo "<pre>";

echo "<pre>";
print_r($arr2);
echo "<pre>";

echo "<pre>";
print_r($arr3);
echo "<pre>";

?>
</body>
</html>