<?php

class Categoria {
     
    //Atributos
    private $ID_Categoria;
    private $Nombre;
    private $Descripcion;

    //Constructor vacio
    public function Categoria(){

    }

    //Getters
    public function getID_Categoria(){
        return $this->ID_Categoria;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getDescripcion(){
        return $this->Descripcion;
    }

    //Setters

    public function setID_Categoria($ID_Categoria){
        $this->ID_Categoria = $ID_Categoria;
    }

    public function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }

    public function setDescripcion($Descripcion){
        $this->Descripcion = $Descripcion;
    }   
   

}

?>