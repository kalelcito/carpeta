<?php


class programa_seccionTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('programa_seccion');
    }
}