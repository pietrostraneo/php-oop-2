<?php

require_once __DIR__ . '/Model/animalBreed.php';
require_once __DIR__ . '/Model/petProducts.php';
require_once __DIR__ . '/Model/petFood.php';
require_once __DIR__ . '/Model/petGames.php';
require_once __DIR__ . '/Model/petAccessory.php';


$dogs = new Breed('Dogs');
$cats = new Breed('Cats');
$fishes = new Breed('Fish');
$birds = new Breed('Birds');

$food = [
    new Food('Royal Canin', 'Mini adult', '15€', $dogs, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'Dry', '2,5Kg', '25/02/2026'),
    new Food('Almo Nature', 'Holistic Maintenance', '24,99€', $dogs, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Dry', '12Kg', '30/07/2025'),
    new Food('Almo Nature', 'Cat Daily', '4,99€', $cats, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Wet', '250g', '15/05/2024'),
    new Food('Tetra', 'Guppy Mini Flakes', '10€', $fishes, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Dry', '200g', '21/10/2028')
];

$accessory = [
    new Accessory('Wilma', 'Voliera in Legno', '49,99€', $birds, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', '135cm x 90cm x 67cm', '5kg'),
    new Accessory('Tetra', 'EasyCrystal filter pack', '9,99€', $fishes, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', '5cm x 5cm', '50g')
];

$game = [
    new Game('Kong', 'Kong Classic', '12,50€', $dogs, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', '15cm x 5cm', '120g', ''),
    new Game('Trixie', 'Topini Peluche', '8,99€', $cats, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', '12,50cm x 3cm', '25g', 'y')
];
