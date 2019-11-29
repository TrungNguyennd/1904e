<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<pre>
   lấy giá trị của từng ô input post đi từ $_post
    vì $_post là 1 mảng
    nên muốn lấy giá trị của từng phần tử
    truy cập $_post['key']
    isset() được sử dụng để kiểm tra xem 1 biến có tồn tại hay không
    nếu có isset() trả về true không tồn tạo thì trả về false

</pre>

<?php
function tinhluong($luongthang = 8000000,$songaycong = 24) {
    // những biến khai báo trong hàm sẽ là biến cục bộ
    $tongngaycong = 24;
    /**
     * Tham số trong hàm sẽ là biến cục bộ
     */
    $luongthuclinh = ($luongthang*$songaycong)/$tongngaycong;
    return $luongthuclinh;
}
echo "<pre>";
print_r($_POST);
echo "</pre>";
// gán giá trị mặc định
$net_salary=0;
$salary='';
$day ='';
if(isset($_POST["salary"]) && $_POST["day"]){
    $salary=$net_salary;
    $day=$_POST["day"];
    if(($salary>0)&&($day>0)){
        $net_salary = tinhluong($salary, $day);
    }
}


//

?>

<div class="container">
    <div class="row">
        <form name="demo" action="" method="post">

            <p>
               lương tháng : <input name="salary" type="text" value="">
            </p>

            <p>
                số ngày công  : <input name="day" type="password" value="">
            </p>

            <p>
                lương thực lĩnh:
                <?php
                if($net_salary>0){
                    echo $net_salary;
                }
                ?>
            </p>
            <p>
                <input type="submit" name="submit" value="Tính lương">
            </p>

        </form>
    </div>
</div>

</body>
</html>