<?php 

    require_once __DIR__.'/Model/animalBreed.php';
    require_once __DIR__.'/Model/petProducts.php';
    require_once __DIR__.'/Model/petFood.php';
    require_once __DIR__.'/Model/petGames.php';
    require_once __DIR__.'/Model/petAccessory.php';


    $dogs = new Breed('Dogs');
    $cats = new Breed('Cats');
    $fishes = new Breed('Fish');
    $birds = new Breed('Birds');

    $miniadult = new food('Royal Canin', 'Mini Adult', '15,00€', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'Dry Food', '2 Kg', '15/12/2026');
    
?>