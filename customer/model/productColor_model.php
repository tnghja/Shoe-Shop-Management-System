<?php
include_once '../lib/database.php';

class ProductColor_Model
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }
}
