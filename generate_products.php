<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/kind.php';

    $Croccantini_Cani_pollo = new prodotto(
        'croccantini per cani al pollo',
        12, 
            new Categories(
                'cani',
                'prodotti per i nostri amici a quattro zampe',
                    new Type(
                        'cibo per animali')
                        )
                    );
$Croccantini_gatti_manzo = new prodotto(
    'croccantini per gatti al manzo',
    19, 
        new Categories(
            'gatti',
            'prodotti per i nostri amici a quattro zampe',
                new Type(
                    'cibo per animali')
                    )
                );
$Guinzaglio = new prodotto(
    'guinzaglio allungabile 6 metri',
    7, 
        new Categories(
            'cani',
            'prodotti per i nostri amici a quattro zampe',
                new Type(
                    'accessori')
                    )
                );
$pollo_giocattolo = new prodotto(
    'pollo giocattolo',
    3.50, 
        new Categories(
            'cani',
            'prodotti per i nostri amici a quattro zampe',
                new Type(
                    'giocattoli')
                    )
                );

                $topo_giocattolo = new prodotto(
                    'topo giocattolo a rotelle',
                    5.90, 
                        new Categories(
                            'gatti',
                            'prodotti per i nostri amici a quattro zampe',
                                new Type(
                                    'giocattoli')
                                    )
                                );
                
?>