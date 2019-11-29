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