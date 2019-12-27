 <?php

    require_once 'vendor/autoload.php';
     require './src/model/Product.php';
     require './src/model/ProductDAO.php';

    $product = new \src\Model\Product();
    $product->setName("Pen");
    $product->setDescription("My pen is very coll");

$productDAO = new \src\Model\ProductDAO();

$productDAO->Create($product);
    