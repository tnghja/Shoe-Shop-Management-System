<?php
class ProductColor
{
    private $product_id;
    private $color_id;
    private $img;

    // private $category_id;

    public function __construct($product_id, $color_id, $img)
    {
        $this->product_id = $product_id;
        $this->color_id = $color_id;
        $this->img = $img;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function getColorId()
    {
        return $this->color_id;
    }
    public function getImg()
    {
        return $this->img;
    }
}
