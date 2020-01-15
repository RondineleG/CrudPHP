<?php

namespace src\Repository;

use src\Data\Connection;

class ProductRepository
{
    public function Create(Product $product)
    {
        $sql = 'INSERT INTO product (Name, Description)VALUES(?,?)';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt -> bindValue(1, $product->getName());
        $stmt -> bindValue(2, $product->getDescription());
        $stmt->execute();
    }

    public function Read()
    {
        $sql = 'SELECT * FROM product';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0 )
        {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
        else
        {
            return [];
        }
            
    }

    public function Update(Product $product)
    {
        $sql = 'UPDATE produtos SET Name = ?, Description = ? WHERE id = ?';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1,$product->getName());
        $stmt->bindValue(2,$product->getDescription());
        $stmt->bindValue(3,$product->getId());
        $stmt->execute();
    }

    public function Delete($id)
    {
        $sql = 'DELETE FROM produtos WHERE id = ?';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
}
