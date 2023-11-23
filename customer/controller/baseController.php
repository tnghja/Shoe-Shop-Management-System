<?php
include_once("../model/baseModel.php");
class Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Model();
    }
    public function invoke()
    {
        /*
        include_once "../view/header.php";
        include_once "../view/account-manage.php";
        include_once "../view/footer.php";
        */
    }
    
  
}
