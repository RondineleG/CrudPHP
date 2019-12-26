
    <?php

    require_once 'vendor/autoload.php';

    $product = new src\Model\Product;
    $product->setName("Pen");
    $product->setDescription("My pen is very coll");

    var_dump($product);

    
