<?php

class Proforma {
  
    //Atributos
    private $ID_Carrito;
    private $ID_Cliente;
    private $ID_Producto;
    private $Cantidad;
    private $Fecha;
 
    //Constructor vacio
    public function Proforma(){
 
    }
 
    //Getters
    public function getIdCarrito(){
        return $this->ID_Carrito;
    }
 
    public function getIdCliente(){
        return $this->ID_Cliente;
    }
 
    public function getIdProducto(){
        return $this->ID_Producto;
    }

    public function getCantidad(){
        return $this->Cantidad;
    }
 
    public function getFecha(){
        return $this->Fecha;
    }
 
 
    //Setters
 
    public function setIdCarrito($ID_Carrito){
        $this->ID_Carrito = $ID_Carrito;
    }
 
    public function setIdCliente($ID_Cliente){
        $this->ID_Cliente = $ID_Cliente;
    }
 
    public function setIdProducto($ID_Producto){
        $this->ID_Producto = $ID_Producto;
    }   
   
    public function setCantidad($Cantidad){
        $this->Cantidad = $Cantidad;
    }
 
    public function setFecha($Fecha){
        $this->Fecha = $Fecha;
    }   

}

?>