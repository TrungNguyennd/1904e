<?php
/*khai báo các thuộc tính
của class
thuộc tính chỉ định dịaddieemr
của class đó*/
class student{
    public $name;

    public $age;
    public $loaction;
    public $point;

}


// khởi tạo đối tượng từ class
$tuan= new student();
//muốn in ra cấu trúc của 1 đốitượng
echo "<pre>";
print_r($tuan);
echo "/<pre>";