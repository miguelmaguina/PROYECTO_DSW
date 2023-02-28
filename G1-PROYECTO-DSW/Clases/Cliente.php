<?php

class Cliente {

    //Atributos
    private $ID_Cliente;
    private $Nombres;
    private $Apellidos;
    private $Email;
    private $Celular;
    private $Contrasena;
    private $Departamento;
    private $Usuario;
    private $DNI;
    private $Fecha_Creacion;
    private $Foto_Perfil;

    //Constructor vacío
    public function Producto(){}

    //Getters
    public function getID_Cliente()
    {
        return $this->ID_Cliente;
    }

    public function getNombres()
    {
        return $this->Nombres;
    }

    public function getApellidos()
    {
        return $this->Apellidos;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getCelular()
    {
        return $this->Celular;
    }

    public function getContrasena()
    {
        return $this->Contrasena;
    }

    public function getDepartamento()
    {
        return $this->Departamento;
    }

    public function getUsuario()
    {
        return $this->Usuario;
    }

    public function getDNI()
    {
        return $this->DNI;
    }

    public function getFecha_Creacion()
    {
        return $this->Fecha_Creacion;
    }

    public function getFoto_Perfil()
    {
        return $this->Foto_Perfil;
    }

    //Setters
    public function setID_Cliente($ID_Cliente)
    {
        $this->ID_Cliente=$ID_Cliente;
    }

    public function setNombres($Nombres)
    {
        $this->Nombres=$Nombres;
    }

    public function setApellidos($Apellidos)
    {
        $this->Apellidos=$Apellidos;
    }

    public function setEmail($Email)
    {
        $this->Email=$Email;
    }

    public function setCelular($Celular)
    {
        $this->Celular=$Celular;
    }

    public function setContrasena($Contrasena)
    {
        $this->Contrasena=$Contrasena;
    }

    public function setDepartamento($Departamento)
    {
        $this->Departamento=$Departamento;
    }

    public function setUsuario($Usuario)
    {
        $this->Usuario=$Usuario;
    }

    public function setDNI($DNI)
    {
        $this->DNI=$DNI;
    }

    public function setFecha_Creacion($Fecha_Creacion)
    {
        $this->Fecha_Creacion=$Fecha_Creacion;
    }

    public function setFoto_Perfil($Foto_Perfil)
    {
        $this->Foto_Perfil=$Foto_Perfil;
    }
   
}

?>