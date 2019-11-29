<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/6/2019
 * Time: 8:05 PM
 */
interface Crud{
    public function create();
    public function update();
    public function read();
    public function delete();
}