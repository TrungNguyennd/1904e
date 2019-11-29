<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
//nạp kết nối csdl
include_once "config.php";

$product_title="";
$product_desc="";
$created="";
$price="";
$quantily="";
$status="";

/**
 * Kiểm tra xem có dữ liệu submit đi hay không
 * !empty($_POST) có nghĩa là không rỗng tức là có dữ liệu trong mảng này
 * isset($_POST) dùng để kiểm tra biến có tồn tại hay không
 */
if(isset($_POST)&& !empty($_POST)) {
// tạo ra 1 biến để check lỗi mặc định là rỗng

    $errors = array();

    if (!isset($_POST["product_title"]) || empty($_POST["product_title"])) {
        $errors[] = "tên sản phẩm không hợp lệ";
    }
    if (!isset($_POST["product_desc"]) || empty($_POST["product_desc"])) {
        $errors[] = "mô tả  không hợp lệ";
    }
    if (!isset($_POST["created"]) || empty($_POST["created"])) {
        $errors[] = "thời gian tạo sản phẩm  không hợp lệ";
    }
    if (!isset($_POST["quantily"]) || empty($_POST["quantily"])) {
        $errors[] = "giá  sản phẩm  không hợp lệ";
    }
    if (!isset($_POST["status"]) || empty($_POST["status"])) {
        $errors[] = "trạng thái   không hợp lệ";
    }
    // $errors rỗng tức là không có lỗi
    if(empty($errors)){
        $product_title=$_POST["product_title"];
        $product_desc=$_POST["product_desc"];
        $created=$_POST["created"];
        $price=$_POST["price"];
        $quantily=$_POST["quantily"];
        $status=$_POST["status"];

        $sqlInsert = "INSERT INTO products (product_title,product_desc,created,price,quantily,status) VALUES ($product_title,$product_desc,$created,$price,$quantily,$status)" ;

        // thực hiện câu lệnh sql
        $result = $connection->query($sqlInsert);

        if($result==true){
            echo "<div class='alert alert-success'>
Thêm mới sản phẩm  thành công ! <a href='index.php'>Trang chủ</a>
</div>";
        }else {
            echo "<div class='alert alert-danger'>
Thêm mới sản phẩm  thất bại !
</div>";
    }
}else{
        /**
         * Chuyển mảng $errors thành chuỗi = hàm implode()
         */
        $errors_string = implode("<br>", $errors);

        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>
<div class="container">
    <div class="row">
       <div class="col-md-12">
           <h1>tạo mới sản phẩm</h1>
           <form name="create" action="" method="post">
               <div class="form-group">
                   <label>Tên sản phẩm</label>
                   <input type="text" name="name" class="form-control" value="<?php echo $product_title ?>">
               </div>
               <div class="form-group">
                   <label>mô tả  sản phẩm</label>
                   <textarea name="mô tả " cols="15" rows="6" class="form-control" value="<?php echo $product_desc ?>"></textarea>
               </div>
               <div class="form-group">
                   <label>Thời gian tạo sản phẩm</label>
                   <input type="date" name="name" class="form-control" value="<?php echo $created ?>">

               </div>
               <div class="form-group">
                   <label>giá sản phẩm</label>
                   <input type="text" name="name" class="form-control" value="<?php echo $price ?>">
               </div>
               <div class="form-group">
                   <label>số lượng sản phẩm</label>
                   <input type="text" name="name" class="form-control" value="<?php echo $quantily ?>">
               </div>
               <div class="form-group">
                   <label>Trạng thái lưu trữ sản phẩm</label>
                   <input type="radio" name="xuất bản" value="<?php echo $status ?>" placeholder="1">1
                   <input type="radio" name="không xuất bản" value="<?php echo $status ?>" placeholder="0">0
               </div>
               <button type="submit" class="btn btn-primary">tạo sản phẩm </button>
           </form>
       </div>
    </div>
</div>
</body>
</html>