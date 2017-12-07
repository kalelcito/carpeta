<?php


class seccion5Table extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('seccion5');
    }
}