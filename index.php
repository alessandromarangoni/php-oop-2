<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">   
    <link rel="stylesheet" href="style.css">
    <title>pet shop</title>
</head>
<?php 

ini_set('diplay_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once __DIR__ .'/product.php';
require_once __DIR__ .'/toys.php';
require_once __DIR__ .'/categories.php';
require_once __DIR__ .'/kind.php';
require_once __DIR__ .'/generate_products.php';
require_once __DIR__ .'/traits.php';

$categorie_array=[$dogs,$cats]
?>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10 d-flex flex-wrap justify-content-between">
                <?php foreach($productarray as $prodotto) {?>
                    <div class="custom_card rounded mt-2">
                    <div class="img-container"><img src="<?php echo $prodotto->img ?>" alt="><?php echo $prodotto->name ?>" class="img-fluid"></div>
                        <div>
                        <p class="pt-1"><h4><?php echo $prodotto->Categories->icon ?></h4>
                        <?php echo $prodotto->Categories->description ?></p>
                        <h4 class=""><?php echo $prodotto->name ?></h4>
                        <p class="pt-1"><?php echo $prodotto->formatPrice($prodotto->price) ?></p>
                        <?php if( $prodotto instanceof Toys){ ?>
                        <p><?php echo $prodotto->color?></p>
                        <?php  } ?>
                        <?php if( $prodotto instanceof Food){ ?>
                        <p><?php echo $prodotto->calories?></p>
                        <?php  } ?>
                        <p>materiale: <?php if($prodotto instanceof Toys || $prodotto instanceof Prodotto){?>
                                <?php echo $prodotto->getmaterial() ?>
                            <?php } ?>
                        </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>