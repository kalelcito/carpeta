<?php

/**
 * Baseseccion10
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_ps
 * @property integer $id_programa
 * @property integer $id_seccion
 * @property integer $id_usuario_creo
 * @property string $comentario
 * @property date $creado
 * @property programa $Programa
 * 
 * @method integer   getIdPs()            Returns the current record's "id_ps" value
 * @method integer   getIdPrograma()      Returns the current record's "id_programa" value
 * @method integer   getIdSeccion()       Returns the current record's "id_seccion" value
 * @method integer   getIdUsuarioCreo()   Returns the current record's "id_usuario_creo" value
 * @method string    getComentario()      Returns the current record's "comentario" value
 * @method date      getCreado()          Returns the current record's "creado" value
 * @method programa  getPrograma()        Returns the current record's "Programa" value
 * @method seccion10 setIdPs()            Sets the current record's "id_ps" value
 * @method seccion10 setIdPrograma()      Sets the current record's "id_programa" value
 * @method seccion10 setIdSeccion()       Sets the current record's "id_seccion" value
 * @method seccion10 setIdUsuarioCreo()   Sets the current record's "id_usuario_creo" value
 * @method seccion10 setComentario()      Sets the current record's "comentario" value
 * @method seccion10 setCreado()          Sets the current record's "creado" value
 * @method seccion10 setPrograma()        Sets the current record's "Programa" value
 * 
 * @package    carpetavirtual
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseseccion10 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('seccion10');
        $this->hasColumn('id_ps', 'integer', 11, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('id_programa', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('id_seccion', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('id_usuario_creo', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('comentario', 'string', 800, array(
             'type' => 'string',
             'length' => 800,
             ));
        $this->hasColumn('creado', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('programa as Programa', array(
             'local' => 'id_programa',
             'foreign' => 'id_programa',
             'onDelete' => 'CASCADE'));
    }
}