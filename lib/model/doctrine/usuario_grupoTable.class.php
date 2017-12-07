<?php


class usuario_grupoTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('usuario_grupo');
    }
}