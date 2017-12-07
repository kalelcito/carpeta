<?php


class seccion11Table extends Doctrine_Table
{

    public static function getInstance()
    {
        return Doctrine_Core::getTable('seccion11');
    }
}