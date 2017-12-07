<?php


class seccion9Table extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('seccion9');
    }
}