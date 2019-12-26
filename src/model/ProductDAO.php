<?php

namespace src\Model;

class ProductDAO
{
    public function Create(Product $product)
    {
        $sql = "INSERT INTO product (Name, Description)VALUES(?,?)";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt -> bindValue(1, $product->getName());
        $stmt -> bindValue(2, $product->getDescription());
        $stmt->execute();
    }

    public function Read()
    {
    }

    public function Update(Product $product)
    {
    }

    public function Delete($id)
    {
    }
}
