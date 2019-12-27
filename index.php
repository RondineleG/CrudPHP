 <?php

    require_once 'vendor/autoload.php';

    $product = new \src\Model\Product();
    $product->setName("Pen");
    $product->setDescription("My pen is very coll");

$productDAO = new \src\Model\ProductDAO();

$productDAO->Create($product);

$productDAO->Delete(5);

$productDAO->Update($produto);

$productDAO->Create($produto);

$productDAO->Read();

var_dump($produtoDao->Read());

foreach($productDAO->read() as $produto)
{
    echo $product['name']."<br>".$produto['description']."<hr>";
}
   