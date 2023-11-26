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

    public function get_color_name_by_ids($ids)
    {
        $query = "SELECT `color_name` FROM `color` WHERE `id` in ($ids);";
        $result = $this->database->select($query);
        $color_table = $result->fetch_all(MYSQLI_ASSOC);
        $color_list = array();
        foreach ($color_table as $row) {
            array_push($color_list, $row['color_name']);
        }
        return $color_list;

    }
}
