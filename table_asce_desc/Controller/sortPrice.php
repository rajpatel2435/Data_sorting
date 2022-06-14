<?php

session_start();

require_once '../Model/database.php';
require_once '../Model/products.php';


$class = $_GET['class'];

//sort according to price

if (empty($class)) {

    $_SESSION['productPrice'] = 'order-desc';

    header("Location: ../index.php?sort=aPrice");


}else{

    if ($class == 'order-asc') {

        $_SESSION['productPrice'] = 'order-desc';
        header("Location: ../index.php?sort=aPrice");
    }else{
        $_SESSION['productPrice'] = 'order-asc';
        header("Location: ../index.php?sort=dPrice");

    }


}


$_SESSION['productName'] = '' ;
$_SESSION['productCode'] ='';
$_SESSION['productDescription'] = '';
$_SESSION['discontinue'] = '';
$_SESSION['invCount'] = '';
$_SESSION['releaseDate'] = '';
