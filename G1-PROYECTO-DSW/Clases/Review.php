<?php

class Review {
    //Atributos
    private $ID_Review;
    private $ID_Cliente;
    private $ID_Producto;
    private $Estado;
    private $Comentario;
    private $Fecha;
 
    //Constructor vacio
    public function Review(){
 
    }
 
    //Getters
    public function getID_Review(){
        return $this->ID_Review;
    }
 
    public function getID_Cliente(){
        return $this->ID_Cliente;
    }
 
    public function getID_Producto(){
        return $this->ID_Producto;
    }

    public function getEstado(){
        return $this->Estado;
    }

    public function getComentario(){
        return $this->Comentario;
    }
 
    public function getFecha(){
        return $this->Fecha;
    }
 
 
    //Setters
 
    public function setID_Review($ID_Review){
        $this->ID_Review = $ID_Review;
    }
 
    public function setID_Cliente($ID_Cliente){
        $this->ID_Cliente = $ID_Cliente;
    }
 
    public function setID_Producto($ID_Producto){
        $this->ID_Producto = $ID_Producto;
    }   

    public function setEstado($Estado){
        $this->Estado = $Estado;
    } 
   
    public function setComentario($Comentario){
        $this->Comentario = $Comentario;
    }
 
    public function setFecha($Fecha){
        $this->Fecha = $Fecha;
    }    

}

?>