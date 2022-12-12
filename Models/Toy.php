<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Material.php';
require_once __DIR__ . '/../Traits/Color.php';

class Toy extends Product
{
    use Material;
    use Color;

    public function __construct(String $name, Float $price, String $details, String $category, String $material, String $color)
    {
        parent::set_name($name);
        parent::set_price($price);
        parent::set_details($details);
        parent::set_category($category);
        $this->material = $material;
        $this->color = $color;

        if ($category !== 'dog' && $category !== 'cat') {
            echo 'Error! Category must be "cat" or "dog"';
            die;
        }
    }
}
