      
<?php

class Product
{
     private $Name , $Description;

     
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