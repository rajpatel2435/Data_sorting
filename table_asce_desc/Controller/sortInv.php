<?php

session_start();

require_once '../Model/database.php';
require_once '../Model/products.php';


$class = $_GET['class'];


//sort according to inventory count

if (empty($class)) {

    $_SESSION['invCount'] = 'order-desc';

    header("Location: ../index.php?sort=aInv");


}else{

    if ($class == 'order-asc') {

        $_SESSION['invCount'] = 'order-desc';
        header("Location: ../index.php?sort=aInv");
    }else{
        $_SESSION['invCount'] = 'order-asc';
        header("Location: ../index.php?sort=dInv");

    }


}

$_SESSION['productName'] = '' ;
$_SESSION['productCode'] ='';
$_SESSION['productPrice'] = '';
$_SESSION['productDescription'] = '';
$_SESSION['discontinue'] = '';
$_SESSION['releaseDate'] = '';