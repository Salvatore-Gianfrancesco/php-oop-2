<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    protected $size;
    protected $flavor;
    protected $caloric_content;

    public function __construct(String $product_type, String $name, Float $price, String $details, String $category, String $size, String $flavor, String $caloric_content)
    {
        parent::set_product_type($product_type);
        parent::set_name($name);
        parent::set_price($price);
        parent::set_details($details);
        parent::set_category($category);
        $this->size = $size;
        $this->flavor = $flavor;
        $this->caloric_content = $caloric_content;

        if ($product_type !== 'food' && $product_type !== 'bed' && $product_type !== 'toy') {
            throw new Exception('Error! Product type must be "food", "bed" or "toy"');
        }

        if ($category !== 'dog' && $category !== 'cat') {
            throw new Exception('Error! Category must be "cat" or "dog"');
        }
    }

    public function get_size()
    {
        return $this->size;
    }

    public function get_flavor()
    {
        return $this->flavor;
    }

    public function get_caloric_content()
    {
        return $this->caloric_content;
    }
}
