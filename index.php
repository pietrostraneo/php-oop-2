<?php

require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <title>LYP eShop</title>
</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center p-4">
                    <div class="logo">
                        <img src="./img/logo.png" alt="LYP" class="img-fluid">
                    </div>
                    <div class="nav">
                        <ul class="list-unstyled d-flex gap-5 text-center">
                            <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#"><i class="fas fa-cart-shopping"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <div class="row mt-4">
                <section id="food">
                    <div class="col-12">
                        <h2>Food:</h2>
                    </div>
                    <div class="d-flex mt-4">
                        <?php foreach ($food as $article) { ?>
                            <div class="col-12 col-md-3 card mx-1 text-center">
                                <img src="<?php echo $article->img ?>" alt="<?php echo $article->name ?>" class="card-img-top p-4">
                                <div class="card-body border-top">
                                    <h5 class="card-title"><?php echo $article->company ?></h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $article->name ?></h6>
                                    <div class="mt-3">
                                        <button class="btn btn-outline-success">
                                            <i class="fas fa-cart-shopping"></i>
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>

            <div class="row">

            </div>

        </div>
    </main>
</body>

</html>