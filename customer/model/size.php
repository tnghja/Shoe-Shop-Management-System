<?php
class Size
{
    private $id;
    private $size_name;

    public function __construct($id, $size_name)
    {
        $this->id = $id;
        $this->size_name = $size_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSizeName()
    {
        return $this->size_name;
    }
}