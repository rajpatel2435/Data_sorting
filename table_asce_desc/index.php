<?php

session_start();

include_once 'Model/products.php';
include_once 'Model/database.php';

$fields = [
    'productName' => ['order' => '', 'label' => 'Nom'],
    'productCode' => ['order' => '', 'label' => 'Code'],
    'productPrice' => ['order' => '', 'label' => 'Prix'],
    'productDescription' => ['order' => '', 'label' => 'Description'],
    'discontinue' => ['order' => '', 'label' => 'Discontinue'],
    'inventoryCount' => ['order' => '', 'label' => 'Inventaire'],
    'releaseDate' => ['order' => '', 'label' => 'Date de distribution'],
];


//to check if the values have been assigned or its the first time without any sort

if (!isset($_GET['sort'])){
    if (!isset($_SESSION['productName'])){
        $_SESSION['productName'] = '';
    }
    if (!isset($_SESSION['productCode'])){
        $_SESSION['productCode'] = '';
    }
    if (!isset($_SESSION['productPrice'])){
        $_SESSION['productPrice'] = '';
    }
    if (!isset($_SESSION['productDescription'])){
        $_SESSION['productDescription'] = '';
    }
    if (!isset($_SESSION['discontinue'])){
        $_SESSION['discontinue'] = '';
    }
    if (!isset($_SESSION['invCount'])){
        $_SESSION['invCount'] = '';
    }
    if (!isset($_SESSION['releaseDate'])){
        $_SESSION['releaseDate'] = '';
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .order-asc::after {
            content: "↓";
        }

        .order-desc::after {
            content: "↑";
        }

        thead th {
            position: sticky;
            top: 0;
        }

        .product-discontinue {
            background-color: red;
        }

        .product-over-100 {
            border: 3px solid blue;
        }

        .product-current-year {
            font-weight: bold;
        }
    </style>
    <title>Practical Exam</title>
</head>

<body>
<div class="container">

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th class=" <?= $_SESSION['productName']?>"><a href="Controller/sortName.php?class=<?= $_SESSION['productName']?>" >Name</a></th>
            <th class=" <?= $_SESSION['productCode']?>"><a href="Controller/sortCode.php?class=<?= $_SESSION['productCode']?>" >Code</a></th>
            <th class=" <?= $_SESSION['productPrice']?>"><a href="Controller/sortPrice.php?class=<?= $_SESSION['productPrice']?>" >Price</a></th>
            <th class=" <?= $_SESSION['productDescription']?>"><a href="Controller/sortDesc.php?class=<?= $_SESSION['productDescription']?>" >Description</a></th>
            <th class=" <?= $_SESSION['discontinue']?>"><a href="Controller/sortDis.php?class=<?= $_SESSION['discontinue']?>" >Discontinued</a></th>
            <th class=" <?= $_SESSION['invCount']?>"><a href="Controller/sortInv.php?class=<?= $_SESSION['invCount']?>" >Inventory</a></th>
            <th class=" <?= $_SESSION['releaseDate']?>"><a href="Controller/sortDate.php?class=<?= $_SESSION['releaseDate']?>" >Distribution Date</a></th>
        </tr>

        </thead>
        <tbody>

        <?php

        $database = new database();

        if (isset($_GET['sort'])) {

            $sort = $_GET['sort'];

            switch ($sort) {

                case 'aName' :                      //sorted according to the name

                    $products = $database->sortProductName("order-asc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;


                case 'dName':                   //sorted according to the name

                    $products = $database->sortProductName("order-desc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;

                case 'aCode' :                           //sorted according to the code

                    $products = $database->sortProductCode("order-asc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;



                case 'dCode' :                     //sorted according to the code

                    $products = $database->sortProductCode("order-desc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;


                case 'aPrice' :                    //sorted according to the price

                    $products = $database->sortProductPrice("order-asc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;


                case 'dPrice' :                      //sorted according to the price

                    $products = $database->sortProductPrice("order-desc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;


                case 'aDesc' :                  //sorted according to the description

                    $products = $database->sortDescription("order-asc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;


                case 'dDesc' :                        //sorted according to the description

                    $products = $database->sortDescription("order-desc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;

                case 'aDis' :                       //sorted according to the discontinued

                    $products = $database->sortDiscontinue("order-asc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;


                case 'dDis' :                        //sorted according to the discontinued or not

                    $products = $database->sortDiscontinue("order-desc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;


                case 'aInv' :                           //sorted according to the inventory

                    $products = $database->sortInventory("order-asc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;



                case 'dInv' :                                //sorted according to the inventory

                    $products = $database->sortInventory("order-desc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;

                case 'aDate' :                   //sorted according to the date

                    $products = $database->sortDate("order-asc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;


                case 'dDate' :                    //sorted according to the date

                    $products = $database->sortDate("order-desc");

                    foreach ($products as $value) {
                        $value->printArr();
                    }
                    break;



            }
        }else{                  //first time use no sorting done
            $products = $database->getProducts();

            foreach ($products as $value) {
                $value->printArr();
            }
        }

        ?>
        </tbody>
    </table>

</div>
</body>

</html>