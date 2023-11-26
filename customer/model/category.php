<?php
class Category
{
    private $id;
    private $name;
    private $object;

    public function __construct($id, $name, $object)
    {
        $this->id = $id;
        $this->name = $name;
        $this->object = $object;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getObject()
    {
        return $this->object;
    }
}