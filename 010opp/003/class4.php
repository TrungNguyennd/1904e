<?php
class student{
    public $name=" nguyen van trung";
    public function getInfo(){
        echo "<br>" . __METHOD__;
        echo "<br>".$this->name;
    }
}
class student2{
    public static $name=" nguyen van trung";
    /*
     * trong 1 method static khi không đướcử dụng từ khóa $this
     * để gọi đến chính bản thân class đó
     * mafkhi sử dụng từ khóa self
     * khi muốn gọi đến 1 method hay 1 thuộc tính được khai báo static
     * self::$ten thuộc tinh và self::tên_phương_thức()
     * chú ý là trong class thường khi truy cập đến thuộc tính $this->tên thuộc tính (không có $)
     * ví dụ $this->name
     * nhưng trong method static thì khi gọi đếnthuộc tính static ví dụ
     * self::$name
     */
    public static function getInfo(){
        echo "<br>" . __METHOD__;
        //echo "<br>" . $this->>name
        echo "<br>" . self::$name;
        echo "<br>" . self::getInfo2();


    }
    /*
     * tại sao khi sử dụng từ khóa static ?
     * khi mà muốn gọi 1method hay 1 cái thuộc tính từ class ben ngoài class đó
     * thì luôn phải khởi tạo 1 object đớitượng class đó
     *
     */

}
$student = new student();
$student->getInfo();
/*
 * khi mà sử dụng từ khóa static cho thuộc tính và phương thức
 * thì không cần thiết phải khởi tạo đối tươngk
 *
 */
echo "<br> ---" . student2::$name;
student2::getInfo2();
student2::getInfo2();
