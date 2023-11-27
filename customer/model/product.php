<?php
class Product
{
    private $id;
    private $name;
    private $price;
    private $description;

    // private $category_id;

    public function __construct($id, $name, $price, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }
    // public function getCategoryId()
    // {
    //     return $this->category_id;
    // }
<<<<<<< HEAD
}
=======
}
>>>>>>> dev-authen
