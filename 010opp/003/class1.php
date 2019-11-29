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
    public $name="demo public 1";
    public $name2="demo protected 2";
    public $name3="demo private 3";

    public function  getInfo(){
        echo "<br>". __METHOD__;
        // truy cập thuộc tính trừ bên trong class
        return $this->name1;
    }

}
// bên ngoài của class
$an=new student();
echo "<br>". $an->$name1;
echo "<br>". $an->getInfo();

$chiid=new childStudent();
echo "<br>". $chiid->getParentInfo();

/*
 * kết luận :thuộc tính và method có giới hạn truy cập là pulic thì
 * có thể truy cập mọi nơi
 */
