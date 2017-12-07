<?php

/**
 * Basecertificado_seccion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_seccion
 * @property integer $id_certificado
 * @property string $titulo
 * @property string $descripcion
 * @property decimal $calificacion
 * 
 * @method integer             getIdSeccion()      Returns the current record's "id_seccion" value
 * @method integer             getIdCertificado()  Returns the current record's "id_certificado" value
 * @method string              getTitulo()         Returns the current record's "titulo" value
 * @method string              getDescripcion()    Returns the current record's "descripcion" value
 * @method decimal             getCalificacion()   Returns the current record's "calificacion" value
 * @method certificado_seccion setIdSeccion()      Sets the current record's "id_seccion" value
 * @method certificado_seccion setIdCertificado()  Sets the current record's "id_certificado" value
 * @method certificado_seccion setTitulo()         Sets the current record's "titulo" value
 * @method certificado_seccion setDescripcion()    Sets the current record's "descripcion" value
 * @method certificado_seccion setCalificacion()   Sets the current record's "calificacion" value
 * 
 * @package    carpetavirtual
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecertificado_seccion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('certificado_seccion');
        $this->hasColumn('id_seccion', 'integer', 11, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('id_certificado', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('titulo', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('calificacion', 'decimal', 3, array(
             'type' => 'decimal',
             'scale' => 2,
             'length' => 3,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}