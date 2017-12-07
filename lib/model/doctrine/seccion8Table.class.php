<?php


class seccion8Table extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('seccion8');
    }
}