<?php


class comite_usuariosTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('comite_usuarios');
    }
}