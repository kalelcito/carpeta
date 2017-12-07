<?php

/**
 * Baseprograma_anexos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_anexo
 * @property integer $id_programa
 * @property string $nombre
 * @property string $url
 * @property string $tipo_archivo
 * @property string $comentarios
 * @property timestamp $creado
 * @property timestamp $actualizado
 * @property programa $programa
 * 
 * @method integer         getIdAnexo()      Returns the current record's "id_anexo" value
 * @method integer         getIdPrograma()   Returns the current record's "id_programa" value
 * @method string          getNombre()       Returns the current record's "nombre" value
 * @method string          getUrl()          Returns the current record's "url" value
 * @method string          getTipoArchivo()  Returns the current record's "tipo_archivo" value
 * @method string          getComentarios()  Returns the current record's "comentarios" value
 * @method timestamp       getCreado()       Returns the current record's "creado" value
 * @method timestamp       getActualizado()  Returns the current record's "actualizado" value
 * @method programa        getPrograma()     Returns the current record's "programa" value
 * @method programa_anexos setIdAnexo()      Sets the current record's "id_anexo" value
 * @method programa_anexos setIdPrograma()   Sets the current record's "id_programa" value
 * @method programa_anexos setNombre()       Sets the current record's "nombre" value
 * @method programa_anexos setUrl()          Sets the current record's "url" value
 * @method programa_anexos setTipoArchivo()  Sets the current record's "tipo_archivo" value
 * @method programa_anexos setComentarios()  Sets the current record's "comentarios" value
 * @method programa_anexos setCreado()       Sets the current record's "creado" value
 * @method programa_anexos setActualizado()  Sets the current record's "actualizado" value
 * @method programa_anexos setPrograma()     Sets the current record's "programa" value
 * 
 * @package    carpetavirtual
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseprograma_anexos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('programa_anexos');
        $this->hasColumn('id_anexo', 'integer', 11, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('id_programa', 'integer', 11, array(
             'primary' => true,
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('nombre', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('url', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('tipo_archivo', 'string', 8, array(
             'type' => 'string',
             'length' => 8,
             ));
        $this->hasColumn('comentarios', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('creado', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('actualizado', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('programa', array(
             'local' => 'id_programa',
             'foreign' => 'id_programa',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'created' => 
             array(
              'alias' => 'creado',
              'disabled' => false,
              'name' => 'creado',
             ),
             'updated' => 
             array(
              'alias' => 'actualizado',
              'disabled' => false,
              'name' => 'actualizado',
             ),
             ));
        $this->actAs($timestampable0);
    }
}