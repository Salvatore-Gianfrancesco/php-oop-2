<?php

require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Bed.php';

$database = [
    new Food(
        'food',
        'Purina Pro Plan Adult Sensitive Skin & Stomach Salmon & Rice Formula Dry Dog Food',
        65.98,
        'This easily-digestible dog food is crafted without corn, wheat or soy',
        'dog',
        '5-lb bag',
        'Salmon & Rice',
        '4,049 kcal/kg, 467 kcal/cup'
    ),

    new Food(
        'food',
        'Fancy Feast Classic Seafood Feast Variety Pack Canned Cat Food',
        18.98,
        'Includes 3 different wet cat food recipes including Classic Pate Cod, Sole & Shrimp Feast, Classic Pate Savory Salmon Feast, and Classic Pate Ocean Whitefish & Tuna Feast.',
        'cat',
        '3-oz can, case of 24',
        'Seafood',
        '964 kcal/kg, 82 kcal/can'
    ),

    new Food(
        'food',
        'Friskies Shreds Variety Pack Canned Cat Food',
        28.48,
        'Variety pack features satisfying recipes with real meat for the high-protein nutrition and flavor your little carnivore craves.',
        'cat',
        '5.5-oz can, case of 40',
        'Variety flavors',
        '857 kcal/kg, 134 kcal/can'
    ),
    new Food(
        'food',
        'Blue Buffalo Life Protection Formula Adult Chicken & Brown Rice Recipe Dry Dog Food',
        57.98,
        'Essential, high-quality protein for healthy muscle development, and carbs for energy for an active life.',
        'dog',
        '30-lb bag',
        'Chicken & Brown Rice',
        '3,618 kcal/kg, 377 kcal/cup'
    ),

    new Food(
        'food',
        'Hill\'s Science Diet Adult Sensitive Stomach & Skin Chicken Recipe Dry Dog Food',
        74.09,
        'Highly digestible to help support optimal nutrient absorption.',
        'dog',
        '30-lb bag',
        'Chicken',
        '394 kcal/cup'
    ),

    new Toy(
        'toy',
        'Frisco Bird Teaser with Feathers Cat Toy',
        3.45,
        'Colorful feathers, string, and crinkle material, with a sprinkle of catnip make this cat teaser wand toy a playtime go-to.',
        'cat',
        'Polyester',
        'blue'
    ),

    new Toy(
        'toy',
        'Frisco Basic Plush Mice Cat Toy with Catnip, 5 count',
        4.64,
        'From Frisco by Chewy. These colorful plush mice feature soft textures, string tails and a Canadian catnip infusion sewn inside.',
        'cat',
        'Polyester, Synthetic Fabric',
        'red'
    ),

    new Toy(
        'toy',
        'Chuckit! Ultra Rubber Ball Tough Dog Toy',
        4.89,
        'High bouncing balls that can be used in the water for a splashing good time.',
        'dog',
        'Rubber',
        'orange'
    ),

    new Bed(
        'bed',
        'FurHaven Plush & Velvet Orthopedic Comfy Couch Dog & Cat Bed',
        44.99,
        'This orthopedic bed features an orthopedic foam base to help provide relief on your furry friend’s pressure points.',
        'dog',
        'Orthopedic',
        4.4,
        'Synthetic Fabric',
        'Almondine'
    ),

    new Bed(
        'bed',
        'Frisco Self Warming Bolster Round Cat Bed',
        11.99,
        'Made with a material that reflects your pet’s own body heat to keep them warm.',
        'cat',
        'Machine-washable',
        2.1,
        'Polyester',
        'Cream'
    ),
];
