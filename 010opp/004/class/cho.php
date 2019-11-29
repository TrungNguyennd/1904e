<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/6/2019
 * Time: 6:54 PM
 */
include_once "../abstract/dongvat.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";

/**
 * Class cho
 * bất kể class nào khi extends từ abstract class
 * thì phải viêt lại code thực thi cho các method
 * abstract của class cha
 */
class cho extends Dongvat implements An,Keu ,Sinhsan {
    public function tenloai()
    {
        echo "tôi là chó ";
    }
    public function thongtin()
    {
        echo "chó là loài 4 chân chạy nhanh. chó được nuôi làm thú cưng và trông nhà";
    }
    public function toinayangi()
    {
        echo "chó hay ăn cơm";
    }

    public function keunhuthenao()
    {
        echo" chó kêu gâu gâu";
    }

    public function sinhsannhuthenao()
    {
        echo "chó sinh sản 2 lần 1 năm và thường đẻ 2 đến 4 con";
    }
}
$dog=new Cho();
