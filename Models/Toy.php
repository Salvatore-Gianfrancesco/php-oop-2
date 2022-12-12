<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Material.php';
require_once __DIR__ . '/../Traits/Color.php';

class Toy extends Product
{
    use Material;
    use Color;

    public function __construct(String $product_type, String $name, Float $price, String $details, String $category, String $material, String $color)
    {
        parent::set_product_type($product_type);
        parent::set_name($name);
        parent::set_price($price);
        parent::set_details($details);
        parent::set_category($category);
        $this->material = $material;
        $this->color = $color;

        if ($product_type !== 'food' && $product_type !== 'bed' && $product_type !== 'toy') {
            echo 'Error! Product type must be "food", "bed" or "toy"';
            die;
        }

        if ($category !== 'dog' && $category !== 'cat') {
            echo 'Error! Category must be "cat" or "dog"';
            die;
        }
    }
}
