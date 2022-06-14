<?php

session_start();

require_once '../Model/database.php';
require_once '../Model/products.php';


$class = $_GET['class'];


//sort according to discontinued

if (empty($class)) {

    $_SESSION['discontinue'] = 'order-desc';

    header("Location: ../index.php?sort=aDis");


}else{

    if ($class == 'order-asc') {

        $_SESSION['discontinue'] = 'order-desc';
        header("Location: ../index.php?sort=aDis");
    }else{
        $_SESSION['discontinue'] = 'order-asc';
        header("Location: ../index.php?sort=dDis");

    }


}
$_SESSION['productName'] = '' ;
$_SESSION['productCode'] ='';
$_SESSION['productPrice'] = '';
$_SESSION['productDescription'] = '';
$_SESSION['invCount'] = '';
$_SESSION['releaseDate'] = '';
