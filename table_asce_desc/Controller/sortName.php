<?php

session_start();

require_once '../Model/database.php';
require_once '../Model/products.php';


$class = $_GET['class'];


//sort according to name

if (empty($class)) {

    $_SESSION['productName'] = 'order-desc';

    header("Location: ../index.php?sort=aName");


}else{

    if ($class == 'order-asc') {

        $_SESSION['productName'] = 'order-desc';
        header("Location: ../index.php?sort=aName");
    }else{
        $_SESSION['productName'] = 'order-asc';
        header("Location: ../index.php?sort=dName");

    }


}

$_SESSION['productCode'] ='';
$_SESSION['productPrice'] = '';
$_SESSION['productDescription'] = '';
$_SESSION['discontinue'] = '';
$_SESSION['invCount'] = '';
$_SESSION['releaseDate'] = '';
