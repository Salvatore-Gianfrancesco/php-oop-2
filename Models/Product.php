<?php

class Product
{
    protected $product_type;
    protected $name;
    protected $price;
    protected $details;
    protected $category;

    public function __construct(String $product_type, String $name, Float $price, String $details, String $category)
    {
        $this->product_type = $product_type;
        $this->name = $name;
        $this->price = $price;
        $this->details = $details;
        $this->category = $category;

        if ($product_type !== 'food' && $product_type !== 'bed' && $product_type !== 'toy') {
            echo 'Error! Product type must be "food", "bed" or "toy"';
            die;
        }

        if ($category !== 'dog' && $category !== 'cat') {
            echo 'Error! Category must be "cat" or "dog"';
            die;
        }
    }

    public function get_product_type()
    {
        return $this->product_type;
    }

    public function set_product_type($product_type)
    {
        $this->product_type = $product_type;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_price()
    {
        return $this->price;
    }

    public function set_price($price)
    {
        $this->price = $price;
    }

    public function get_details()
    {
        return $this->details;
    }

    public function set_details($details)
    {
        $this->details = $details;
    }

    public function get_category()
    {
        return $this->category;
    }

    public function set_category($category)
    {
        $this->category = $category;
    }
}
