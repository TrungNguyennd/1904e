<?php
$servername = "localhost";
$username = "root";
$password = "";
//tạo 1 kết nối đến mysql

$connection= new mysqli($servername,$username,$password);
if ($connection->connect_errno){
    die("không thể kết nối đến csdl");
}
echo"kết nối thành công đến csdl";