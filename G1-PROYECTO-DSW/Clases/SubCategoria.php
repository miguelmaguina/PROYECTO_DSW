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
    public function getIdSubcategoria(){
        return $this->ID_Subcategoria;
    }

    public function getIdCategoria(){
        return $this->ID_Categoria;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getDescripcion(){
        return $this->Descripcion;
    }

    //Setters
    public function setIdSubcategoria($ID_Subcategoria){
        $this->ID_Subcategoria = $ID_Subcategoria;
    }

    public function setIdCategoria($ID_Categoria){
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