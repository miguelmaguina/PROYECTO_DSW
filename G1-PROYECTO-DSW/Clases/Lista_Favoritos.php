<?php

class Lista_Favoritos {
   
    //Atributos
   private $ID_Lista_Favoritos;
   private $ID_Cliente;
   private $ID_Producto;
   private $Fecha;

   //Constructor vacio
   public function Lista_Favoritos(){

   }

   //Getters
   public function getID_Lista_Favoritos(){
       return $this->ID_Lista_Favoritos;
   }

   public function getID_Cliente(){
       return $this->ID_Cliente;
   }

   public function getID_Producto(){
       return $this->ID_Producto;
   }

   public function getFecha(){
    return $this->Fecha;
}

   //Setters

   public function setID_Lista_Favoritos($ID_Lista_Favoritos){
       $this->ID_Lista_Favoritos = $ID_Lista_Favoritos;
   }

   public function setID_Cliente($ID_Cliente){
       $this->ID_Cliente = $ID_Cliente;
   }

   public function setID_Producto($ID_Producto){
       $this->ID_Producto = $ID_Producto;
   } 
   
   public function setFecha($Fecha){
    $this->Fecha = $Fecha;
}

}

?>