<?php
class Category
{
    private $id;
    private $category_name;
    private $object;

    public function __construct($id, $category_name, $object)
    {
        $this->id = $id;
        $this->category_name = $category_name;
        $this->object = $object;
    }

    public function toString()
    {
        return "ID: $this->id, Name: $this->category_name, Object: $this->object ";
    }

    public function getID(){
        return $this->id;
    }

    public function getName(){
        return $this->category_name;
    }

    public function getObject()
    {
        return $this->object;
    }
}