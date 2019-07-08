<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    biến trong php
    biến là thứ,khái niệm,đối tượng ... dùng để chứa các giá trị số hoặc chuỗi
    và biến có đặc điểm là thay đổi trong quá trình chạy;
    biến trong php bắt đầu bằng $
    tên biến trong php bắt đầu bằng 1 chữ cái
    tên biên nên chỉ chứa 1 số, 1 chữ cái hay một kí tự mà không chứa những kí hiệu đặc biệt
    tên biến không được phép chứa tiếng việt hay dấu cách
    trong php thì nối chuỗi bằng dầu .
</pre>
<?php
$ten = "nguyen quang anh";
$tuoi = 18;
$quehuong = "hà nội";
echo "<br> tên là : " . $ten;
echo "<br> tuổi là : " . $tuoi;
echo "<br> quê hương là : " . $quehuong;
?>

<pre>
    Nếu trong "" mà in ra tên của biến
    thì php sẽ hiểu trong nháy kép đó là biến
    Nếu trong '' mà in ra tên của biến
    thì php sẽ hiểu trong nháy đơn đó đơn thuẩn chỉ là 1 chuỗi bình thường
</pre>
<?php echo "<br> $ten : $ten"; ?>
<?php echo '<br> $ten : $ten'; ?>

</body>
</html>
