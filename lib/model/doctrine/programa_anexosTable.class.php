<?php


class programa_anexosTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('programa_anexos');
    }
}