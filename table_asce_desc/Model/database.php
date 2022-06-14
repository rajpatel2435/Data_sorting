<?php

require_once 'products.php';

class database
{

    private const serverName = "localhost";
    private const database = "exam";
    private const username = "exam";
    private const password = "exam";
    private const connectionString = "mysql:host=" . Database::serverName . ";dbname=" . Database::database;

    private PDO $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO(Database::connectionString, Database::username, Database::password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            die("Connection failed: {$exception->getMessage()}");
        }
    }


    public function getProducts()                //to get all the products from the database
    {
        try {
            $query = "SELECT * FROM products";
            $statement = $this->connection->prepare($query);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $product = array();

            foreach ($statement->fetchAll() as $item) {
                $products = new products($item['id'], $item['productName'], $item['productCode'], $item['productPrice'], $item['productDescription'], $item['discontinue'], $item['inventoryCount'], $item['releaseDate']);
                array_push($product, $products);
            }

            return $product;

        } catch (PDOException $exception) {
            echo "ERROR : {$exception->getMessage()}";
        }
    }


    public function sortProductName(string $class)                 //to sort according to the name
    {
        try {

            if ($class == "order-desc") {
                $query = "SELECT * FROM products ORDER BY productName";
            } else {
                $query = "SELECT * FROM products ORDER BY productName DESC";
            }

            $statement = $this->connection->prepare($query);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $product = array();

            foreach ($statement->fetchAll() as $item) {
                $products = new products($item['id'], $item['productName'], $item['productCode'], $item['productPrice'], $item['productDescription'], $item['discontinue'], $item['inventoryCount'], $item['releaseDate']);
                array_push($product, $products);
            }

            return $product;

        } catch (PDOException $exception) {
            echo "ERROR : {$exception->getMessage()}";
        }
    }


    public function sortProductCode(string $class)        //to sort according to the code
    {
        try {

            if ($class == "order-desc") {
                $query = "SELECT * FROM products ORDER BY productCode";
            } else {
                $query = "SELECT * FROM products ORDER BY productCode DESC";
            }

            $statement = $this->connection->prepare($query);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $product = array();

            foreach ($statement->fetchAll() as $item) {
                $products = new products($item['id'], $item['productName'], $item['productCode'], $item['productPrice'], $item['productDescription'], $item['discontinue'], $item['inventoryCount'], $item['releaseDate']);
                array_push($product, $products);
            }

            return $product;

        } catch (PDOException $exception) {
            echo "ERROR : {$exception->getMessage()}";
        }
    }


    public function sortProductPrice(string $class)               //to sort according to the price
    {
        try {

            if ($class == "order-desc") {
                $query = "SELECT * FROM products ORDER BY productPrice";
            } else {
                $query = "SELECT * FROM products ORDER BY productPrice DESC";
            }

            $statement = $this->connection->prepare($query);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $product = array();

            foreach ($statement->fetchAll() as $item) {
                $products = new products($item['id'], $item['productName'], $item['productCode'], $item['productPrice'], $item['productDescription'], $item['discontinue'], $item['inventoryCount'], $item['releaseDate']);
                array_push($product, $products);
            }

            return $product;

        } catch (PDOException $exception) {
            echo "ERROR : {$exception->getMessage()}";
        }
    }



    public function sortDescription(string $class)                  //to sort according to the description
    {
        try {

            if ($class == "order-desc") {
                $query = "SELECT * FROM products ORDER BY productDescription";
            } else {
                $query = "SELECT * FROM products ORDER BY productDescription DESC";
            }

            $statement = $this->connection->prepare($query);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $product = array();

            foreach ($statement->fetchAll() as $item) {
                $products = new products($item['id'], $item['productName'], $item['productCode'], $item['productPrice'], $item['productDescription'], $item['discontinue'], $item['inventoryCount'], $item['releaseDate']);
                array_push($product, $products);
            }

            return $product;

        } catch (PDOException $exception) {
            echo "ERROR : {$exception->getMessage()}";
        }
    }


    public function sortDiscontinue(string $class)                       //to sort according to if discontinued or not
    {
        try {

            if ($class == "order-desc") {
                $query = "SELECT * FROM products ORDER BY discontinue";
            } else {
                $query = "SELECT * FROM products ORDER BY discontinue DESC";
            }

            $statement = $this->connection->prepare($query);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $product = array();

            foreach ($statement->fetchAll() as $item) {
                $products = new products($item['id'], $item['productName'], $item['productCode'], $item['productPrice'], $item['productDescription'], $item['discontinue'], $item['inventoryCount'], $item['releaseDate']);
                array_push($product, $products);
            }

            return $product;

        } catch (PDOException $exception) {
            echo "ERROR : {$exception->getMessage()}";
        }
    }


    public function sortInventory(string $class)            //to sort according to the inventory count
    {
        try {

            if ($class == "order-desc") {
                $query = "SELECT * FROM products ORDER BY inventoryCount";
            } else {
                $query = "SELECT * FROM products ORDER BY inventoryCount DESC";
            }

            $statement = $this->connection->prepare($query);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $product = array();

            foreach ($statement->fetchAll() as $item) {
                $products = new products($item['id'], $item['productName'], $item['productCode'], $item['productPrice'], $item['productDescription'], $item['discontinue'], $item['inventoryCount'], $item['releaseDate']);
                array_push($product, $products);
            }

            return $product;

        } catch (PDOException $exception) {
            echo "ERROR : {$exception->getMessage()}";
        }
    }


    public function sortDate(string $class)                    //to sort according to the date
    {
        try {

            if ($class == "order-desc") {
                $query = "SELECT * FROM products ORDER BY releaseDate";
            } else {
                $query = "SELECT * FROM products ORDER BY releaseDate DESC";
            }

            $statement = $this->connection->prepare($query);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $product = array();

            foreach ($statement->fetchAll() as $item) {
                $products = new products($item['id'], $item['productName'], $item['productCode'], $item['productPrice'], $item['productDescription'], $item['discontinue'], $item['inventoryCount'], $item['releaseDate']);
                array_push($product, $products);
            }

            return $product;

        } catch (PDOException $exception) {
            echo "ERROR : {$exception->getMessage()}";
        }
    }




}