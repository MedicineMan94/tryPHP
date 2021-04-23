<?php
    require_once "classes/controller/ProductController.php";
    require_once "classes/model/EntProduct.php";
    require_once "classes/mapper/Database.php";


$ProductController = new ProductController();

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Preloading all important things-->
    <link rel="preload" href="assets/style/main.css" as="style">

    <!-- Linking to own CSS -->
    <link rel="stylesheet" href="assets/style/main.css">

    <!-- Linking to JavaScript -->
    <script src="assets/script/main.js"></script>

    <!-- Linking to icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Overzicht | tryApp</title>
</head>

<body>
<h1 class="main text-center">
    <div class="title overview__title">Reparatie overzicht</div>
</h1>

<div class="containerstyle">
<div class="container center">
    <div class="row">
        <div class="col-sm-12">
            <div id="accordion">
                <?php
                // Getting the products
                $productList = $ProductController->overview();
                $count = 0;
                // Looping through the categories
                foreach ($productList as $product) {
                    $count++;
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapse<?php echo $count?>"  aria-expanded="false" aria-controls="collapse<?php echo $count?>">
                                    <?php echo $product->getProductName(); ?>
                                </button>
                            </h5>
                        </div>

                        <div id="collapse<?php echo $count?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr> <th>Categorie</th> <th>Prijs</th> </tr>
                                    </thead>
                                        <tr>
                                        <td><?php echo $product->getCategoryName(); ?></td>
                                        <td><?php echo $product->getPrice(); ?></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

<!--            <table class="overview__table">-->
<!--                <thead>-->
<!--                <tr> <th>Product Id</th> <th>CategoryId</th> <th>ProductName</th> <th>getCategoryName</th> <th>Price</th></tr>-->
<!--                </thead>-->
<!---->
<!--                <tbody>-->
<!--                --><?php
//                // Getting the repairs
//                $productList = $ProductController->overview();
//
//                // Checking if there are records to show, else show empty text
//                if (count($productList) != 0) {
//                    // Looping through the categories
//                    foreach ($productList as $product) {
//                        ?>
<!--                        <tr>-->
<!--                            <td>--><?php //echo $product->getProductId(); ?><!--</td>-->
<!--                            <td>--><?php //echo $product->getCategoryId(); ?><!--</td>-->
<!--                            <td>--><?php //echo $product->getProductName(); ?><!--</td>-->
<!--                            <td>--><?php //echo $product->getCategoryName(); ?><!--</td>-->
<!--                            <td>--><?php //echo $product->getPrice(); ?><!--</td>-->
<!--                        </tr>-->
<!--                        --><?php
//                    }
//                } else {
//                    ?>
<!--                    <tr><td colspan="6" class="overview__empty">No records found</td></tr>-->
<!--                    --><?php
//                }
//                ?>
<!--                </tbody>-->
<!--            </table>-->

