
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    mảng là gì ? mảng là kiểu dữ liệu trong php
    lưu trữ dã trị
    trong php có 3 kiểu mảng chính
    1 mảng kết hợp
    2 mảng chỉ số
    3 mảng đa chiều
    trong mảng có 2 khái niệm cần nắm được
    trong mảng gồm nhiều phần tử
    key : là chỉ số các phần tử trong mảng
    value : giá trọ phần tử trong mảng
    không echo được mảng
    phần tủ trong mảng bao gồm cả  key và vualue

    mảng chí số có các mảng có key là chỉ số
    chú ý key trong mảng bắt đầu tử 0
</pre>
<?php
$array1=array("hà nội","nam định","hải phòng ","hải dương");
echo "<pre>";
print_r($array1);
echo "</pre>";

//cú pháp rút gọn
foreach ($array1 as $value){
    echo "<br>".$value;
}

// cú pháp lặp mảng đầy đủ
foreach ($array1 as $key => $value){
    echo "<br>".$key."-".$value;

}

// cú pháp ít dùng

foreach ($array1 as $key => $value){
    echo "<br>".$key."-".$array1[$key];
}
?>

</body>
</html>