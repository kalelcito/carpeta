<?php

/**
 * Baseempresa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_empresa
 * @property string $nombre_empresa
 * @property string $logo
 * @property string $nombre_contacto
 * @property string $email
 * @property string $telefono
 * @property boolean $activar_sucursales
 * @property boolean $tipo
 * @property string $pais
 * @property string $estado
 * @property string $ciudad
 * @property string $municipio
 * @property string $numero
 * @property string $direccion
 * @property string $delegacion
 * @property string $cp
 * @property string $referencia
 * @property timestamp $creado
 * @property timestamp $actualizado
 * @property Doctrine_Collection $unidad
 * @property Doctrine_Collection $usuario
 * 
 * @method integer             getIdEmpresa()          Returns the current record's "id_empresa" value
 * @method string              getNombreEmpresa()      Returns the current record's "nombre_empresa" value
 * @method string              getLogo()               Returns the current record's "logo" value
 * @method string              getNombreContacto()     Returns the current record's "nombre_contacto" value
 * @method string              getEmail()              Returns the current record's "email" value
 * @method string              getTelefono()           Returns the current record's "telefono" value
 * @method boolean             getActivarSucursales()  Returns the current record's "activar_sucursales" value
 * @method boolean             getTipo()               Returns the current record's "tipo" value
 * @method string              getPais()               Returns the current record's "pais" value
 * @method string              getEstado()             Returns the current record's "estado" value
 * @method string              getCiudad()             Returns the current record's "ciudad" value
 * @method string              getMunicipio()          Returns the current record's "municipio" value
 * @method string              getNumero()             Returns the current record's "numero" value
 * @method string              getDireccion()          Returns the current record's "direccion" value
 * @method string              getDelegacion()         Returns the current record's "delegacion" value
 * @method string              getCp()                 Returns the current record's "cp" value
 * @method string              getReferencia()         Returns the current record's "referencia" value
 * @method timestamp           getCreado()             Returns the current record's "creado" value
 * @method timestamp           getActualizado()        Returns the current record's "actualizado" value
 * @method Doctrine_Collection getUnidad()             Returns the current record's "unidad" collection
 * @method Doctrine_Collection getUsuario()            Returns the current record's "usuario" collection
 * @method empresa             setIdEmpresa()          Sets the current record's "id_empresa" value
 * @method empresa             setNombreEmpresa()      Sets the current record's "nombre_empresa" value
 * @method empresa             setLogo()               Sets the current record's "logo" value
 * @method empresa             setNombreContacto()     Sets the current record's "nombre_contacto" value
 * @method empresa             setEmail()              Sets the current record's "email" value
 * @method empresa             setTelefono()           Sets the current record's "telefono" value
 * @method empresa             setActivarSucursales()  Sets the current record's "activar_sucursales" value
 * @method empresa             setTipo()               Sets the current record's "tipo" value
 * @method empresa             setPais()               Sets the current record's "pais" value
 * @method empresa             setEstado()             Sets the current record's "estado" value
 * @method empresa             setCiudad()             Sets the current record's "ciudad" value
 * @method empresa             setMunicipio()          Sets the current record's "municipio" value
 * @method empresa             setNumero()             Sets the current record's "numero" value
 * @method empresa             setDireccion()          Sets the current record's "direccion" value
 * @method empresa             setDelegacion()         Sets the current record's "delegacion" value
 * @method empresa             setCp()                 Sets the current record's "cp" value
 * @method empresa             setReferencia()         Sets the current record's "referencia" value
 * @method empresa             setCreado()             Sets the current record's "creado" value
 * @method empresa             setActualizado()        Sets the current record's "actualizado" value
 * @method empresa             setUnidad()             Sets the current record's "unidad" collection
 * @method empresa             setUsuario()            Sets the current record's "usuario" collection
 * 
 * @package    carpetavirtual
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseempresa extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('empresa');
        $this->hasColumn('id_empresa', 'integer', 11, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('nombre_empresa', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('logo', 'string', 300, array(
             'type' => 'string',
             'length' => 300,
             ));
        $this->hasColumn('nombre_contacto', 'string', 240, array(
             'type' => 'string',
             'length' => 240,
             ));
        $this->hasColumn('email', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('telefono', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('activar_sucursales', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('tipo', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('pais', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             ));
        $this->hasColumn('estado', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             ));
        $this->hasColumn('ciudad', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('municipio', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('numero', 'string', 11, array(
             'type' => 'string',
             'length' => 11,
             ));
        $this->hasColumn('direccion', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('delegacion', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('cp', 'string', 11, array(
             'type' => 'string',
             'length' => 11,
             ));
        $this->hasColumn('referencia', 'string', null, array(
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
        $this->hasMany('unidad', array(
             'local' => 'id_empresa',
             'foreign' => 'id_empresa'));

        $this->hasMany('usuario', array(
             'local' => 'id_empresa',
             'foreign' => 'id_empresa'));

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