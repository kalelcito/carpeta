<?php


class seccion6Table extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('seccion6');
    }
}