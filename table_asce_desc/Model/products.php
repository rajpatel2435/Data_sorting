<?php

require_once 'database.php';

class products
{

    private $id;
    private $productName;
    private $productCode;
    private $productPrice;
    private $productDescription;
    private $discontinue;
    private $inventoryCount;
    private $releaseDate;


    public function __construct($id, $productName, $productCode,$productPrice, $productDescription, $discontinue, $inventoryCount, $releaseDate)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->productCode = $productCode;
        $this->productPrice = $productPrice;
        $this->productDescription = $productDescription;
        $this->discontinue = $discontinue;
        $this->inventoryCount = $inventoryCount;
        $this->releaseDate = $releaseDate;

    }



    public function getID()
    {
        return $this->id;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    public function getProductPrice()
    {
        return $this->productPrice;
    }

    public function getProductDescription()
    {
        return $this->productDescription;
    }

    public function getDiscontinue()
    {
        return $this->discontinue;
    }

    public function getInventoryCount()
    {
        return $this->inventoryCount;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }



    public function printArr()                    //to print the table values
    {
        $array = [];

        if ($this->discontinue){
            $addClass = ' product-discontinue';
            array_push($array, "$addClass");
        }


        if ($this->getInventoryCount() > 100){
            $addClass = ' product-over-100';
            array_push($array, "$addClass");
        }

        $toFindDate = date("Y",strtotime($this->getReleaseDate()));

        if ($toFindDate == 2020){
            $addClass = ' product-current-year';
            array_push($array, "$addClass");
        }

        $class = implode(" ", $array);  //join array with string

        echo '<tr class="'. $class.'">';
        echo '<td>'. $this->getProductName() .'</td>';
        echo '<td>'. $this->getProductCode() .'</td>';
        echo '<td>'. $this->getProductPrice() .'</td>';
        echo '<td>'. $this->getProductDescription() .'</td>';
        echo '<td>'. $this->getDiscontinue() .'</td>';
        echo '<td>'. $this->getInventoryCount() .'</td>';
        echo '<td>'. $this->getReleaseDate() .'</td>';
        echo '</tr>';
    }











}