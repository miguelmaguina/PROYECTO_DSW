<?php

class SubCategoria {
    
    //Atributos
    private $ID_Subcategoria;
    private $ID_Categoria;
    private $Nombre;
    private $Descripcion;

    //Constructor vacio
    public function Subcategoria(){

    }

    //Getters
    public function getID_Subcategoria(){
        return $this->ID_Subcategoria;
    }

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
    public function setID_Subcategoria($ID_Subcategoria){
        $this->ID_Subcategoria = $ID_Subcategoria;
    }

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