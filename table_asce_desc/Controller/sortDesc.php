<?php

session_start();

require_once '../Model/database.php';
require_once '../Model/products.php';

$class = $_GET['class'];

//sort according to description

if (empty($class)) {

    $_SESSION['productDescription'] = 'order-desc';

    header("Location: ../index.php?sort=aDesc");


}else{

    if ($class == 'order-asc') {

        $_SESSION['productDescription'] = 'order-desc';
        header("Location: ../index.php?sort=aDesc");
    }else{
        $_SESSION['productDescription'] = 'order-asc';
        header("Location: ../index.php?sort=dDesc");

    }


}


$_SESSION['productName'] = '' ;
$_SESSION['productCode'] ='';
$_SESSION['productPrice'] = '';
$_SESSION['discontinue'] = '';
$_SESSION['invCount'] = '';
$_SESSION['releaseDate'] = '';
