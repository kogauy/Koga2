<?php

   class Coche
   {

      public $color;
      public $marca;
      public $velocidad;

      public function getColor()
      {
         return $this->color;
      }
 
      public function setColor($color)
      {
         $this->color=$color;
      }

      public function getMarca()
      {
         return $this->marca;
      }
 
      public function setMarca($marca)
      {
         $this->marca=$marca;
      }

      public function Acelerar()
      {
         $this->velocidad++;
      }

      public function Frenar()
      {
         $this->velocidad--;
      }
   }
?>