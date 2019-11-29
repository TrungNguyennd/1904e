<?php
/*khai báo các thuộc tính
của class
thuộc tính chỉ định dịaddieemr
của class đó*/
class student{
    public $name=" nguyễn văn trung";

    public $age="23";
    public $loaction=" nam dinh";
    public $poin="7";

}


// khởi tạo đối tượng từ class
$tuan= new student();
//muốn in ra cấu trúc của 1 đốitượng
echo "<pre>";
print_r($tuan);
echo "/<pre>";