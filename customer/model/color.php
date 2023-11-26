<?php
class Color
{
    private $id;
    private $color_name;
    private $color_img;

    public function __construct($id, $color_name, $color_img)
    {
        $this->id = $id;
        $this->color_name = $color_name;
        $this->color_img = $color_img;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getColorName()
    {
        return $this->color_name;
    }
    public function getColorImg()
    {
        return $this->color_img;
    }
}