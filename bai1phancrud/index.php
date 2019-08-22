<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
// nạp file kết nối csdl
include_once "config.php";

$sqlSelect = " SELECT * FROM products";

/*thực hiện câu truy vấn */
$result = $connection->query($sqlSelect);
?>
<div class="container">
   <div class="row">
       <div class="col-md-12">
           <h1>liệt kê danh sách sản phẩm</h1>
           <h1>
               <a href="create.php">Thêm mới sản phẩm </a>
           </h1>
           <table class="table">
               <thead>
               <tr>
                   <th>ID</th>
                   <th>Tên sản phẩm</th>
                   <th>mô tả sản phẩm</th>
                   <th>thời gian tạo sản phẩm</th>
                   <th>giá bán sản phẩm </th>
                   <th>số lượng sản phẩm</th>
                   <th> lưu trữ hoặc không xuất sản phẩm</th>
               <th></th>
               </tr>
               </thead>
               <tbody>
               <?php
               /**
                * Nếu $result->num_rows > 0 tức là có dữ liệu trong bảng
                * ngược lại là bảng đang rỗng
                */
               if ($result->num_rows > 0) {
                   /*
                         *
                         * Sử dụng $result->fetch_assoc() để lấy về từng dòng bản ghi trong bảng
                         * và trả về cho biến $row
                         */
                   while ($row = $result->fetch_assoc()){
                       echo "<pre>";
                       print_r($row);
                       echo "</pre>";
                       ?>
               <tr>
                   <td><?php echo $row["id"] ?></td>
                   <td><?php echo $row["product_title"] ?></td>
                   <td><?php echo $row["product_desc"] ?></td>
                   <td><?php echo $row["created"] ?></td>
                   <td><?php echo $row["price"] ?></td>
                   <td><?php echo $row["quantily"] ?></td>
                   <td><?php echo $row["status"] ?></td>
                   <td>
                       <p><a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Sửa sản phẩm</a> </p>
                       <p><a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Xóa sản phẩm </a> </p>
                   </td>
               </tr>
               <?php
                   }
               }else{
                   echo "không tồn tại sản phẩm nào";
               }
               ?>
               </tbody>
           </table>
       </div>
   </div>
</div>
</body>
</html>