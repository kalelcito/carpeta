<?php

/**
 * Baserequisito
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_requisito
 * @property string $titulo
 * @property string $descripcion
 * @property string $guia_de_apoyo
 * @property Doctrine_Collection $programa
 * 
 * @method integer             getIdRequisito()   Returns the current record's "id_requisito" value
 * @method string              getTitulo()        Returns the current record's "titulo" value
 * @method string              getDescripcion()   Returns the current record's "descripcion" value
 * @method string              getGuiaDeApoyo()   Returns the current record's "guia_de_apoyo" value
 * @method Doctrine_Collection getPrograma()      Returns the current record's "programa" collection
 * @method requisito           setIdRequisito()   Sets the current record's "id_requisito" value
 * @method requisito           setTitulo()        Sets the current record's "titulo" value
 * @method requisito           setDescripcion()   Sets the current record's "descripcion" value
 * @method requisito           setGuiaDeApoyo()   Sets the current record's "guia_de_apoyo" value
 * @method requisito           setPrograma()      Sets the current record's "programa" collection
 * 
 * @package    carpetavirtual
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baserequisito extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('requisito');
        $this->hasColumn('id_requisito', 'integer', 11, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('titulo', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('guia_de_apoyo', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('programa', array(
             'local' => 'id_requisito',
             'foreign' => 'id_requisito'));
    }
}