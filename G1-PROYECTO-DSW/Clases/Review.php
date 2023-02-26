<?php

class Review {
    //Atributos
    private $ID_Review;
    private $ID_Cliente;
    private $ID_Producto;
    private $Comentario;
    private $Fecha;
 
    //Constructor vacio
    public function Review(){
 
    }
 
    //Getters
    public function getIdReview(){
        return $this->ID_Review;
    }
 
    public function getIdCliente(){
        return $this->ID_Cliente;
    }
 
    public function getIdProducto(){
        return $this->ID_Producto;
    }

    public function getComentario(){
        return $this->Comentario;
    }
 
    public function getFecha(){
        return $this->Fecha;
    }
 
 
    //Setters
 
    public function setIdReview($ID_Review){
        $this->ID_Review = $ID_Review;
    }
 
    public function setIdCliente($ID_Cliente){
        $this->ID_Cliente = $ID_Cliente;
    }
 
    public function setIdProducto($ID_Producto){
        $this->ID_Producto = $ID_Producto;
    }   
   
    public function setComentario($Comentario){
        $this->Comentario = $Comentario;
    }
 
    public function setFecha($Fecha){
        $this->Fecha = $Fecha;
    }    

}

?>