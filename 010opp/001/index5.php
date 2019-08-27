<?php
/*khai báo các thuộc tính
của class
thuộc tính chỉ định dịaddieemr
của class đó*/
class student{
    public $name=" nguyễn văn trung";

    public $age="23";
    public $loaction=" nam dinh";
    public $point="7";

    // phương thức
    public function __construct()
    {
        echo "<br>" . __METHOD__;
    }

    public function printInfo(){
        echo "<br>".__METHOD__;
        echo "<br>tên : ". $this->name;
        echo "<br> tuổi :". $this->age;
        echo "<br> địa chỉ:". $this->loaction;
        echo "<br> điểm tổng kết:". $this->point;
    }

}


// khởi tạo đối tượng từ class
$tuan= new student();
//muốn in ra cấu trúc của 1 đốitượng
echo "<pre>";
print_r($tuan);
echo "/<pre>";
// gọi đến các thuộc tính của class từ bên ngoài class
echo "<br>-----" . $tuan->name;
echo "<br>-----" . $tuan->age;
echo "<br>-----" . $tuan->loaction;
echo "<br>-----" . $tuan->point;
