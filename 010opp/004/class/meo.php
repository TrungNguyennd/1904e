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
class meo extends Dongvat implements An,Keu ,Sinhsan {
    public function tenloai()
    {
        echo "tôi là mèo";
    }
    public function thongtin()
    {
        echo "tôi là mèo có 4 chân hay nằm góc bếp";
    }
    public function toinayangi()
    {
       echo "mèo hay bắt chuột";
    }
    public function keunhuthenao()
    {
        echo "mèo kêu meo meo";
    }
    public function sinhsannhuthenao()
    {
        echo "mèo hay đẻ 3 lần một năm ";
    }

}