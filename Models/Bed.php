<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Material.php';
require_once __DIR__ . '/../Traits/Color.php';

class Bed extends Product
{
    protected $type;
    protected $weight;

    use Material;
    use Color;

    public function __construct(String $name, Float $price, String $details, String $category, String $type, Float $weight, String $material, String $color)
    {
        parent::set_name($name);
        parent::set_price($price);
        parent::set_details($details);
        parent::set_category($category);
        $this->type = $type;
        $this->weight = $weight;
        $this->material = $material;
        $this->color = $color;

        if ($category !== 'dog' && $category !== 'cat') {
            echo 'Error! Category must be "cat" or "dog"';
            die;
        }
    }

    public function get_type()
    {
        return $this->type;
    }

    public function get_weight()
    {
        return $this->weight;
    }
}
