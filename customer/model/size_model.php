<?php
include_once '../lib/database.php';
include_once '../model/size.php';

class Size_Model
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function get_size_list()
    {
        $query = "SELECT * FROM `size`;";
        $result = $this->database->select($query);
        $size_table = $result->fetch_all(MYSQLI_ASSOC);
        $size_list = array();
        foreach ($size_table as $row) {
            $size = new Size($row['id'], $row['size_name']);
            array_push($size_list, $size);
        }
        return $size_list;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> dev-authen
