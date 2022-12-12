<?php

require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP OOP 2</title>
    <!-- FontAwesome CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- Bootstap CDN -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
</head>

<body>
    <div class="container my-5">
        <div class="row row-cols-5 g-3">
            <?php foreach ($database as $index => $product) : ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="./assets/img/prod_<?= $index + 1; ?>.png" class="card-img-top" alt="<?= $product->get_name(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->get_name(); ?></h5>
                            <p class="card-text"><?= $product->get_details(); ?></p>
                            <h5 class="card-text text-success">$<?= $product->get_price(); ?></h5>

                            <div class="my-2">
                                <?php if ($product->get_category() === 'dog') { ?>
                                    <i class="fa-solid fa-dog"></i>
                                <?php } else { ?>
                                    <i class="fa-solid fa-cat"></i>
                                <?php } ?>
                                <!-- <i class="fa-solid <_?php $result = ($product->get_category() === 'dog') ? 'fa-dog' : 'fa-cat'; ?>"></i> -->

                                <?php if ($product->get_product_type() === 'food') { ?>
                                    <i class="fa-solid fa-bowl-food"></i>
                                <?php } else if ($product->get_product_type() === 'toy') { ?>
                                    <i class="fa-solid fa-baseball"></i>
                                <?php } else { ?>
                                    <i class="fa-solid fa-bed"></i>
                                <?php } ?>
                            </div>

                            <div class="my-2">
                                <?php if ($product->get_product_type() === 'food') { ?>
                                    <p class="card-text"><strong>Size</strong>: <?= $product->get_size(); ?></p>
                                    <p class="card-text"><strong>Flavor</strong>: <?= $product->get_flavor(); ?></p>
                                    <p class="card-text"><strong>Caloric content</strong>: <?= $product->get_caloric_content(); ?></p>
                                <?php } else if ($product->get_product_type() === 'toy') { ?>
                                    <p class="card-text"><strong>Material</strong>: <?= $product->get_material(); ?></p>
                                    <p class="card-text"><strong>Color</strong>: <?= $product->get_color(); ?></p>
                                <?php } else { ?>
                                    <p class="card-text"><?= $product->get_type(); ?></p>
                                    <p class="card-text"><strong>Weight</strong>: <?= $product->get_weight(); ?>Kg</p>
                                    <p class="card-text"><strong>Material</strong>: <?= $product->get_material(); ?></p>
                                    <p class="card-text"><strong>Color</strong>: <?= $product->get_color(); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>