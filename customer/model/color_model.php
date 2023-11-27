<?php
include_once '../lib/database.php';
include_once '../model/color.php';

class Color_Model
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function get_color_list()
    {
        $query = "SELECT * FROM `color`;";
        $result = $this->database->select($query);
        $color_table = $result->fetch_all(MYSQLI_ASSOC);
        $color_list = array();
        foreach ($color_table as $row) {
            $color = new Color($row['id'], $row['color_name'], $row['color_img']);
            array_push($color_list, $color);
        }
        return $color_list;
    }

}
