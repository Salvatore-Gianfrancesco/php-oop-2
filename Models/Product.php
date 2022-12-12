<?php

class Product
{
    protected $name;
    protected $price;
    protected $details;
    protected $category;

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
