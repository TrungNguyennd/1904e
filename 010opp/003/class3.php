<?php
class student{
    /*
     * khai báo thuộc tính
     * của class
     * thuộc tính chỉ tính chất đặc điểm
     * của class đó
     */
    /*
     * thuộc tính có giới hạn truy cập tức là public
     * thì có thể truy cập mọi nơi
     * class kế thừa
     * bản thân bên trong class đó
     * @var string
     */
    protected $name1="demo public 1";

    public function  getInfo(){
        echo "<br>". __METHOD__;
        // truy cập thuộc tính trừ bên trong class
        return $this->name1;
    }

}
class ChildStudent extends Student {
    public function getParentInfo() {
        echo "<br>" . __METHOD__;
        // truy cập thuộc tính từ bên trong của class kế thừa
        return $this->name1;
    }
}
// bên ngoài của class
$an=new student();
//echo "<br>". $an->$name1;
echo "<br>". $an->getInfo();
// truy cập  từ class kế thừa
$chiid=new childStudent();
echo "<br>". $chiid->getParentInfo();

/*
 * kết luận :thuộc tính và phương thức có giới hạn là protected
 * thì co thể truy cập từ bên trong class đó
 * và class kế thừa từ nó
 * nếu như ai đó bảo tôi
 */
