<?php
require_once __DIR__ .'/product.php';
require_once __DIR__ .'/categories.php';
require_once __DIR__ .'/kind.php';
require_once __DIR__ .'/toys.php';
require_once __DIR__ .'/traits.php';
//categoire
$dogs = new Categories(
    'cani',
    'prodotti per i nostri amici a quattro zampe',
    '<i class="fa-solid fa-dog"></i>');
$cats = new Categories(
    'gatti',
    'prodotti per i nostri amici a felini',
    '<i class="fa-solid fa-cat"></i>');
$generic = new Categories(
        'cani',
        'prodotti per i nostri amici a quattro zampe');
//lista prodotti
$productarray=[
    new Toys('osso pupazzo',12.99, $dogs ,'https://www.sleepypets.it/944-medium_default/gioco-per-cani-personalizzato.jpg','sky blue'),
    new Food('pedigree',7.80,$dogs,'https://cdn.shopify.com/s/files/1/0312/8826/2795/products/Untitleddesign-2020-10-16T121135.232_1200x1200.png?v=1602831068',1200,),
    new Toys('sheba',3.87, $cats ,'https://cdn.shopify.com/s/files/1/0288/2152/0466/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379',300,),
    new Prodotto('cuccia',32.99, $cats ,'https://i.etsystatic.com/10382984/r/il/9a9660/4111336952/il_1588xN.4111336952_4sgd.jpg')
];
$productarray[0]->setmaterial('stoffa');
$productarray[3]->setmaterial('stoffa');
// $productarray[1]->setweight('120');
?>