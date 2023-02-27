<?php

class Emprendimiento
{
    private $ID_Emprendimiento;
    private $Nombre;
    private $Usuario;
    private $Email;
    private $Celular;
    private $Contrasena;
    private $Departamento;
    private $Direccion;
    private $Logo;
    private $Fecha_Creacion;
    private $URL_Web;
    private $URL_Facebook;
    private $URL_Instagram;
    private $URL_Otros;

    //Constructor vacío
    public function Emprendimiento(){}

    //Getters
    public function getID_Emprendimiento()
    {
        return $this->ID_Emprendimiento;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function getUsuario()
    {
        return $this->Usuario;
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

    public function getDireccion()
    {
        return $this->Direccion;
    }

    public function getLogo()
    {
        return $this->Logo;
    }

    public function getFecha_Creacion()
    {
        return $this->Fecha_Creacion;
    }

    public function getURL_Web()
    {
        return $this->URL_Web;
    }

    public function getURL_Facebook()
    {
        return $this->URL_Facebook;
    }

    public function getURL_Instagram()
    {
        return $this->URL_Instagram;
    }

    public function getURL_Otros()
    {
        return $this->URL_Otros;
    }

    //Setters
    public function setID_Emprendimiento($ID_Emprendimiento)
    {
        $this->ID_Emprendimiento=$ID_Emprendimiento;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre=$Nombre;
    }

    public function setUsuario($Usuario)
    {
        $this->Usuario=$Usuario;
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

    public function setDireccion($Direccion)
    {
        $this->Direccion=$Direccion;
    }

    public function setLogo($Logo)
    {
        $this->Logo=$Logo;
    }

    public function setFecha_Creacion($Fecha_Creacion)
    {
        $this->Fecha_Creacion=$Fecha_Creacion;
    }

    public function setURL_Web($URL_Web)
    {
        $this->URL_Web=$URL_Web;
    }

    public function setURL_Facebook($URL_Facebook)
    {
        $this->URL_Facebook=$URL_Facebook;
    }

    public function setURL_Instagram($URL_Instagram)
    {
        $this->URL_Instagram=$URL_Instagram;
    }

    public function setURL_Otros($URL_Otros)
    {
        $this->URL_Otros=$URL_Otros;
    }
}

?>