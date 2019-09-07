<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/6/2019
 * Time: 8:34 PM
 */
class Classicphone{
    //gọi điện
    public function callVoice(){
        echo "<br>".__METHOD__;
    }
    //nhận cuộ gọi
    public function receiveVoice(){
        echo "<br>".__METHOD__;
    }
}
//khai báo trait
trait Ipod{
    public function listenMusic(){
        echo "<br>".__METHOD__;
    }
}
trait Radio{
    public function listenRadio(){
        echo "<br>".__METHOD__;
    }
}
trait Computer{
    public function sendEmail(){
        echo "<br>".__METHOD__;
    }
    public function playgame(){
        echo "<br>".__METHOD__;
    }
    public function wordOffice(){
        echo "<br>".__METHOD__;
    }
}
class Smartphone extends Classicphone{
    use Ipod,Radio, Computer;
}
// khởi tạo đối  tượng
$samsung = new Smartphone();
$samsung->callVoice();
$samsung->receiveVoice();
$samsung->listenMusic();
$samsung->listenRadio();
$samsung->playGame();