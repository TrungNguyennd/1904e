<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    in ra chuỗi trong php
    có 2 cách : cách 1 sử dụng dấu nháy "";
</pre>
<?php
echo "<br> hà nội ";
echo "<br> đà nẵng  ";
echo "<br> hồ chí minh ";
echo "<br> hà nội ";
?>
<pre>
    in ra chuỗi trong php
    có 2 cách : cách 2 sử dụng dấu nháy '';
</pre>
<?php
echo '<br> hà nội' ;
echo '<br> đà nẵng ';
echo '<br> hồ chí minh ';

?>
<pre>
    yêu cầu in ra chuỗi : chào 'hà nội';
    để giải quyết vấn đề có 2 cách làm chính :
    nguyên tắc 1 là dùng nháy kép để bao nháy đơn hay ngược lại dùng nháy đơn đểbao nháy kép
    nguyên tắc 2 là dùng kí tự escape để phân biệt nháy báo chuỗi và nháy xuất ra
    nháy xuất ra màn hình phải được đặt sau dấu \\
</pre>

    <?php
    echo "<br> chào 'hà nội'";
    ?>
<pre>
    dấu \được hiểu là kí tự escape
    chuỗi trong php phải được đặt trong dấu '' hay ""
    nếu văn bản in ra chuỗi cần có dấu ' hay "
    thì php sẽ không phân biệt được đâu là nháy chuỗi đâu mà in ra
    => kí tự  nháy cần in ra phải được đặt sau dấu escape \ để php phân biệt thánh công
</pre>
<?php echo '<br> chào \'hà nội\''; ?>

<pre>
    Yêu cầu : in ra chuỗi : chào "hà nội"
</pre>
<?php echo '<br>chào "hà nội"'; ?>
<?php echo "<br>chào \"hà nội\""; ?>
</body>
</html>