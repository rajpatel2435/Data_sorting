<?php

session_start();

require_once '../Model/database.php';
require_once '../Model/products.php';

$class = $_GET['class'];


//sort according to code


if (empty($class)) {

    $_SESSION['productCode'] = 'order-desc';

    header("Location: ../index.php?sort=aCode");


}else{

    if ($class == 'order-asc') {

        $_SESSION['productCode'] = 'order-desc';
        header("Location: ../index.php?sort=aCode");
    }else{
        $_SESSION['productCode'] = 'order-asc';
        header("Location: ../index.php?sort=dCode");

    }


}

$_SESSION['productName'] = '' ;
$_SESSION['productPrice'] = '';
$_SESSION['productDescription'] = '';
$_SESSION['discontinue'] = '';
$_SESSION['invCount'] = '';
$_SESSION['releaseDate'] = '';
