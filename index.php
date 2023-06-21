<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
    <title>pet shop</title>
</head>
<?php 
require_once __DIR__ .'/product.php';
require_once __DIR__ .'/categories.php';
require_once __DIR__ .'/kind.php';
require_once __DIR__ .'/generate_products.php';
$productarray=[
    $Croccantini_Cani_pollo,
    $Croccantini_gatti_manzo,
    $Guinzaglio,
    $pollo_giocattolo,
    $topo_giocattolo
]
?>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <ul>
                    <?php foreach ($productarray as $item) { ?>
                    
                        <li> <?php echo $item -> name ?></li>
                        <li> <?php echo $item -> formatPrice($item -> price) ?></li>
                        <pre>
                        <li> <?php ?></li>
                        </pre>
                        <?php } ?>
                    </ul>
            </div>
        </div>
    </div>
</body>
</html>