<?php


class certificado_seccionTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('certificado_seccion');
    }
}