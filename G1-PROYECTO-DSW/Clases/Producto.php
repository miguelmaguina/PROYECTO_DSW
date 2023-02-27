<?php

class Producto
{
    //Atributos
    private $ID_Producto;
    private $Nombre;
    private $Precio;
    private $Descripcion;
    private $ID_Categoria;
    private $ID_Subcategoria;
    private $Descuento;
    private $Fecha;
    private $ID_Emprendimiento;
    private $Disponibilidad;
    private $Foto_Secundaria1;
    private $Foto_Secundaria2;
    private $Foto_Secundaria3;

    //Constructor vacío
    public function Producto(){}

    //Getters
    public function ID_Producto()
    {
        return $this->ID_Producto;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function getPrecio()
    {
        return $this->Precio;
    }

    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    public function getID_Categoria()
    {
        return $this->ID_Categoria;
    }

    public function getID_Subcategoria()
    {
        return $this->ID_Subcategoria;
    }

    public function getDescuento()
    {
        return $this->Descuento;
    }

    public function getFecha()
    {
        return $this->Fecha;
    }

    public function getID_Emprendimiento()
    {
        return $this->ID_Emprendimiento;
    }

    public function getDisponibilidad()
    {
        return $this->Disponibilidad;
    }

    public function getFoto_Secundaria1()
    {
        return $this->Foto_Secundaria1;
    }

    public function getFoto_Secundaria2()
    {
        return $this->Foto_Secundaria2;
    }

    public function getFoto_Secundaria3()
    {
        return $this->Foto_Secundaria3;
    }

    //Setters
    public function setID_Producto($ID_Producto)
    {
        $this->ID_Producto=$ID_Producto;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre=$Nombre;
    }

    public function setPrecio($Precio)
    {
        $this->Precio=$Precio;
    }

    public function setDescripcion($Descripcion)
    {
        $this->Descripcion=$Descripcion;
    }

    public function setID_Categoria($ID_Categoria)
    {
        $this->ID_Categoria=$ID_Categoria;
    }

    public function setID_Subcategoria($ID_Subcategoria)
    {
        $this->ID_Subcategoria=$ID_Subcategoria;
    }

    public function setDescuento($Descuento)
    {
        $this->Descuento=$Descuento;
    }

    public function setFecha($Fecha)
    {
        $this->Fecha=$Fecha;
    }

    public function setID_Emprendimiento($ID_Emprendimiento)
    {
        $this->ID_Emprendimiento=$ID_Emprendimiento;
    }

    public function setDisponibilidad($Disponibilidad)
    {
        $this->Disponibilidad=$Disponibilidad;
    }

    public function setFoto_Secundaria1($Foto_Secundaria1)
    {
        $this->Foto_Secundaria1=$Foto_Secundaria1;
    }

    public function setFoto_Secundaria2($Foto_Secundaria2)
    {
        $this->Foto_Secundaria2=$Foto_Secundaria2;
    }

    public function setFoto_Secundaria3($Foto_Secundaria3)
    {
        $this->Foto_Secundaria3=$Foto_Secundaria3;
    }
}

?>