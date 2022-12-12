<?php

require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Bed.php';

$prod_food = new Food(
    'Purina Pro Plan Adult Sensitive Skin & Stomach Salmon & Rice Formula Dry Dog Food',
    65.98,
    'This easily-digestible dog food is crafted without corn, wheat or soy',
    'dog',
    '5-lb bag',
    'Salmon & Rice',
    '4,049 kcal/kg, 467 kcal/cup'
);
var_dump($prod_food);

$prod_toy = new Toy(
    'Frisco Bird Teaser with Feathers Cat Toy',
    3.45,
    'Colorful feathers, string, and crinkle material, with a sprinkle of catnip make this cat teaser wand toy a playtime go-to.',
    'cat',
    'Polyester',
    'blue'
);
var_dump($prod_toy);

$prod_bed = new Bed(
    'FurHaven Plush & Velvet Orthopedic Comfy Couch Dog & Cat Bed',
    44.99,
    'This orthopedic bed features an orthopedic foam base to help provide relief on your furry friend’s pressure points.',
    'dog',
    'Orthopedic',
    4.4,
    'Synthetic Fabric',
    'Almondine'
);
var_dump($prod_bed);
