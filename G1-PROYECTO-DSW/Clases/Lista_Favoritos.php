<?php

class Lista_Favoritos {
   
    //Atributos
   private $ID_Lista_Favoritos;
   private $ID_Cliente;
   private $ID_Producto;

   //Constructor vacio
   public function Lista_Favoritos(){

   }

   //Getters
   public function getIdListaFavoritos(){
       return $this->ID_Lista_Favoritos;
   }

   public function getIdCliente(){
       return $this->ID_Cliente;
   }

   public function getIdProducto(){
       return $this->ID_Producto;
   }

   //Setters

   public function setIdListaFavoritos($ID_Lista_Favoritos){
       $this->ID_Lista_Favoritos = $ID_Lista_Favoritos;
   }

   public function setIdCliente($ID_Cliente){
       $this->ID_Cliente = $ID_Cliente;
   }

   public function setIdProducto($ID_Producto){
       $this->ID_Producto = $ID_Producto;
   }    

}

?>