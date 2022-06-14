<?php

session_start();

require_once '../Model/database.php';
require_once '../Model/products.php';


$class = $_GET['class'];


//sort according to date


if (empty($class)) {

    $_SESSION['releaseDate'] = 'order-desc';

    header("Location: ../index.php?sort=aDate");


}else{

    if ($class == 'order-asc') {

        $_SESSION['releaseDate'] = 'order-desc';
        header("Location: ../index.php?sort=aDate");
    }else{
        $_SESSION['releaseDate'] = 'order-asc';
        header("Location: ../index.php?sort=dDate");

    }


}

$_SESSION['productName'] = '' ;
$_SESSION['productCode'] ='';
$_SESSION['productPrice'] = '';
$_SESSION['productDescription'] = '';
$_SESSION['discontinue'] = '';
$_SESSION['invCount'] = '';
