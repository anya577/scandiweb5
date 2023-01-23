<?php
error_reporting(error_level:-1);
require_once __DIR__.'/inc/db.php';
require_once __DIR__.'/inc/func.php';
$products=get_products();
debug($products);
?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="assets/css/main.css">

    <title>juniordevelopertestAnnaTukvadze</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.html">Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home page <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Гитарное оборудование</a>
                </li> -->
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart-modal">
                        busket <span class="badge badge-light">3</span>
                    </button>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="wrapper mt-5">
        <div class="container">
            <div class="row">

                <div class="product-cards mb-5">
                    <?php if (!empty($products)):?>
                    <?php foreach ($products as $product):?>    

                    <div class="product-card">
                        <div class="offer">
                            
                        </div>
                        <div class="card-thumb">
                            <a href="#"><img src="img/<?=$product['img']?>" alt="<?=$product['Name']?>"></a>

                        </div>
                        <div class="card-caption">
                            <div class="card-title">
                                <a href="#"><?=$product['name']?></a>
                            </div>
                            <div class="description">700MB</div>
                            <div class="card-price text-center">                                
                                1.00 usd.
                            </div>
                            <button type="button" class="btn btn-info btn-block card-addtocart">
                                <i class="fas fa-cart-arrow-down"></i> buy
                            </button>
                            <div class="item-status"><i class="fas fa-check text-success"></i> in stock</div>
                        </div>
                    <?php endforeach;?>    
                    <?php endif; ?>

                </div><!-- /product-cards -->

            </div><!-- /row -->

            <div class="row">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div><!-- /row -->

        </div><!-- /container -->
    </div><!-- /wrapper -->

    

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
