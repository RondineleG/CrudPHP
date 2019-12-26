      
<?php

namespace src\Model;

class Product
{
     private $Id, $Name, $Description;

     public function getId()
     {
          return $this->Id;
     }
     public function setId($Id)
     {
          $this->Id = $Id;
     }

     public function getName()
     {
          return $this->Name;
     }

     public function setName($Name)
     {
          $this->Name = $Name;
     }

     public function getDescription()
     {
          return $this->Description;
     }
     public function setDescription($Description)
     {
          $this->Description = $Description;
     }
}


?>