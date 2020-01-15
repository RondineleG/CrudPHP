<?php

namespace src;

require 'autoload.php';

use src\Model\Product;
use src\Repository\ProductRepository;

    $product = new Product();
    $product->setName("Pen");
    $product->setDescription("My pen");

$productRepository = new ProductRepository();

$productRepository->Create($product);

$productRepository->Delete(5);

$productRepository->Update($product);

$productRepository->Create($product);

$productRepository->Read();

var_dump($productRepository->Read());

foreach($productRepository->read() as $product)
{
    echo $product['name']."<br>".$product['description']."<hr>";
}
   
?>