<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 21/01/16
 * Time: 11:30 AM
 */
class Privilegios
{
    static public function superadmin($id){
        $res=false;
        $grupos=array(1);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function consultor($id){
        $res=false;
        $grupos=array(2);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function gerente($id){
        $res=false;
        $grupos=array(3);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function presidentecomite($id){
        $res=false;
        $grupos=array(4);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function solocomite($id){
        $res=false;
         $grupos=array(5);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function directorgral($id){
        $res=false;
        $grupos=array(6,7);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function subdirector($id){
        $res=false;
        $grupos=array(8);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function vicepresidente($id){
        $res=false;
        $grupos=array(9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }


    static public function crearrempresa($id){
        $res=false;
        $grupos=array(1);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function crearsucursal($id){
        $res=false;
        $grupos=array(1,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function crearcomite($id){
        $res=false;
        $grupos=array(1,2,3,4,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }

    static public function editarempresa($id){
        $res=false;
        $grupos=array(1);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function verrempresa($id){
        $res=false;
        $grupos=array(1,2,3,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function editarsucursal($id){
        $res=false;
        $grupos=array(1);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function verrsucursal($id){
        $res=false;
        $grupos=array(1,2,3,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function editarcomite($id){
        $res=false;
        $grupos=array(1,2,3,6,7,8,9,4);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function crearusuario($id){
        $res=false;
        $grupos=array(1,2,3,4,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }

    static public function editarusuario($id){
        $res=false;
        $grupos=array(1,2,3,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function verrusuario($id){
        $res=false;
        $grupos=array(1,2,3,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function agregarprograma($id){
        $res=false;
        $grupos=array(1,2,3,4,5,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
    static public function editarprograma($id){
        $res=false;
        $grupos=array(1,2,3,6,7,8,9);
        if(in_array($id,$grupos)){
            $res=true;
        }
        return $res;
    }
}