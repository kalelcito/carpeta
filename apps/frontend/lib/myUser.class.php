<?php

class myUser extends sfBasicSecurityUser
{
    
     public function dominio()
    {
        if (!$this->hasAttribute('dominio'))
        $this->setAttribute('dominio', 'https://www.sistemaserac.com/');
        return $this->getAttribute('dominio');       
    }
    public function dominiomail()
    {
        if (!$this->hasAttribute('dominiomail'))
        $this->setAttribute('dominiomail', 'sistemaserac.com');
        return $this->getAttribute('dominiomail');       
    }
    public function setSeccion($seccion)
    {
        $this->setAttribute('seccion', $seccion);     
    }
    public function setNombre($nombre)
    {
        $this->setAttribute('nombre', $nombre);     
    }
    public function getNombre()
    {
        if (!$this->hasAttribute('nombre'))
        $this->setAttribute('nombre', 'Usuario');
        return $this->getAttribute('nombre');       
    }
     public function setIdusuario($id)
    {
        $this->setAttribute('idusuario', $id);     
    }
     public function getIdusuario()
    {
        if (!$this->hasAttribute('idusuario'))
        $this->setAuthenticated(false);
        return $this->getAttribute('idusuario');       
    }
    public function setRol($id)
    {
        $this->setAttribute('rol', $id);
    }
    public function getRol()
    {
        //if (!$this->hasAttribute('rol'))
            //$this->setAuthenticated(false);
        return $this->getAttribute('rol');
    }
    public function setEmpresa($id)
    {
        $this->setAttribute('empresa', $id);
    }
    public function getEmpresa()
    {
        if (!$this->hasAttribute('empresa'))
            $this->setAuthenticated(false);
        return $this->getAttribute('empresa');
    }
    public function setIdempresa($id)
    {
        $this->setAttribute('idempresa', $id);
    }
    public function getIdempresa()
    {
        if (!$this->hasAttribute('idempresa'))
            $this->setAuthenticated(false);
        return $this->getAttribute('idempresa');
    }
    public function setPuesto($id)
    {
        $this->setAttribute('puesto', $id);
    }
    public function getPuesto()
    {
       // if (!$this->hasAttribute('puesto'))
            //$this->setAuthenticated(false);
        return $this->getAttribute('puesto');
    }
    public function setLogo($id)
    {
        $this->setAttribute('logo', $id);
    }
    public function getLogo()
    {
        //if (!$this->hasAttribute('logo'))
            //$this->setAuthenticated(false);
        return $this->getAttribute('logo');
    }
    public function setFoto($id)
    {
        $this->setAttribute('foto', $id);
    }
    public function getFoto()
    {
        if (!$this->hasAttribute('foto'))
            $this->setAttribute('foto', "");
        return $this->getAttribute('foto');
    }
    public function getSeccion()
    {
        if (!$this->hasAttribute('seccion'))
        $this->setAttribute('seccion', '1');
        return $this->getAttribute('seccion');       
    }
    public function getMenu()
    {
        if (!$this->hasAttribute('menu'))
            $this->setAttribute('menu', '1');
        return $this->getAttribute('menu');
    }
    public function setMenu($id)
    {
        $this->setAttribute('menu', $id);
    }

}
