<?php
// khai báo hằng số đến csdl
define("DB_SEVER", "localhost");
define("DB_SEVER_USERNAME", "root");
define("DB_SEVER_PASSWORD", "");
define("DB_SEVER_NAME", "demoapploin");

$connection = mysqli_connect(DB_SEVER,DB_SEVER_USERNAME,DB_SEVER_PASSWORD,DB_SEVER_NAME);

if($connection == false){
    die("ERROR không thể kết nối đến CSDL") . mysqli_connect_error();
}