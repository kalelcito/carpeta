<?php

/**
 * Baseunidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_unidad
 * @property integer $id_empresa
 * @property integer $id_usuario
 * @property integer $id_consultor
 * @property integer $id_gerente
 * @property integer $id_subdirector
 * @property integer $id_director_general
 * @property string $logo
 * @property integer $id_region
 * @property string $nombre
 * @property string $sucursal
 * @property string $nombre_contacto
 * @property string $email
 * @property string $telefono
 * @property string $pais
 * @property string $estado
 * @property string $ciudad
 * @property string $municipio
 * @property string $direccion
 * @property string $numero
 * @property string $delegacion
 * @property string $cp
 * @property string $referencia
 * @property timestamp $creado
 * @property timestamp $actualizado
 * @property empresa $empresa
 * @property usuario $usuario
 * @property region $Region
 * @property usuario $usuarioConsultor
 * @property usuario $UsuarioGte
 * @property usuario $UsuarioSubd
 * @property usuario $UsuarioDirg
 * @property Doctrine_Collection $comite
 * @property Doctrine_Collection $Usuario
 * 
 * @method integer             getIdUnidad()            Returns the current record's "id_unidad" value
 * @method integer             getIdEmpresa()           Returns the current record's "id_empresa" value
 * @method integer             getIdUsuario()           Returns the current record's "id_usuario" value
 * @method integer             getIdConsultor()         Returns the current record's "id_consultor" value
 * @method integer             getIdGerente()           Returns the current record's "id_gerente" value
 * @method integer             getIdSubdirector()       Returns the current record's "id_subdirector" value
 * @method integer             getIdDirectorGeneral()   Returns the current record's "id_director_general" value
 * @method string              getLogo()                Returns the current record's "logo" value
 * @method integer             getIdRegion()            Returns the current record's "id_region" value
 * @method string              getNombre()              Returns the current record's "nombre" value
 * @method string              getSucursal()            Returns the current record's "sucursal" value
 * @method string              getNombreContacto()      Returns the current record's "nombre_contacto" value
 * @method string              getEmail()               Returns the current record's "email" value
 * @method string              getTelefono()            Returns the current record's "telefono" value
 * @method string              getPais()                Returns the current record's "pais" value
 * @method string              getEstado()              Returns the current record's "estado" value
 * @method string              getCiudad()              Returns the current record's "ciudad" value
 * @method string              getMunicipio()           Returns the current record's "municipio" value
 * @method string              getDireccion()           Returns the current record's "direccion" value
 * @method string              getNumero()              Returns the current record's "numero" value
 * @method string              getDelegacion()          Returns the current record's "delegacion" value
 * @method string              getCp()                  Returns the current record's "cp" value
 * @method string              getReferencia()          Returns the current record's "referencia" value
 * @method timestamp           getCreado()              Returns the current record's "creado" value
 * @method timestamp           getActualizado()         Returns the current record's "actualizado" value
 * @method empresa             getEmpresa()             Returns the current record's "empresa" value
 * @method usuario             getUsuario()             Returns the current record's "usuario" value
 * @method region              getRegion()              Returns the current record's "Region" value
 * @method usuario             getUsuarioConsultor()    Returns the current record's "usuarioConsultor" value
 * @method usuario             getUsuarioGte()          Returns the current record's "UsuarioGte" value
 * @method usuario             getUsuarioSubd()         Returns the current record's "UsuarioSubd" value
 * @method usuario             getUsuarioDirg()         Returns the current record's "UsuarioDirg" value
 * @method Doctrine_Collection getComite()              Returns the current record's "comite" collection
 * @method Doctrine_Collection getUsuario()             Returns the current record's "Usuario" collection
 * @method unidad              setIdUnidad()            Sets the current record's "id_unidad" value
 * @method unidad              setIdEmpresa()           Sets the current record's "id_empresa" value
 * @method unidad              setIdUsuario()           Sets the current record's "id_usuario" value
 * @method unidad              setIdConsultor()         Sets the current record's "id_consultor" value
 * @method unidad              setIdGerente()           Sets the current record's "id_gerente" value
 * @method unidad              setIdSubdirector()       Sets the current record's "id_subdirector" value
 * @method unidad              setIdDirectorGeneral()   Sets the current record's "id_director_general" value
 * @method unidad              setLogo()                Sets the current record's "logo" value
 * @method unidad              setIdRegion()            Sets the current record's "id_region" value
 * @method unidad              setNombre()              Sets the current record's "nombre" value
 * @method unidad              setSucursal()            Sets the current record's "sucursal" value
 * @method unidad              setNombreContacto()      Sets the current record's "nombre_contacto" value
 * @method unidad              setEmail()               Sets the current record's "email" value
 * @method unidad              setTelefono()            Sets the current record's "telefono" value
 * @method unidad              setPais()                Sets the current record's "pais" value
 * @method unidad              setEstado()              Sets the current record's "estado" value
 * @method unidad              setCiudad()              Sets the current record's "ciudad" value
 * @method unidad              setMunicipio()           Sets the current record's "municipio" value
 * @method unidad              setDireccion()           Sets the current record's "direccion" value
 * @method unidad              setNumero()              Sets the current record's "numero" value
 * @method unidad              setDelegacion()          Sets the current record's "delegacion" value
 * @method unidad              setCp()                  Sets the current record's "cp" value
 * @method unidad              setReferencia()          Sets the current record's "referencia" value
 * @method unidad              setCreado()              Sets the current record's "creado" value
 * @method unidad              setActualizado()         Sets the current record's "actualizado" value
 * @method unidad              setEmpresa()             Sets the current record's "empresa" value
 * @method unidad              setUsuario()             Sets the current record's "usuario" value
 * @method unidad              setRegion()              Sets the current record's "Region" value
 * @method unidad              setUsuarioConsultor()    Sets the current record's "usuarioConsultor" value
 * @method unidad              setUsuarioGte()          Sets the current record's "UsuarioGte" value
 * @method unidad              setUsuarioSubd()         Sets the current record's "UsuarioSubd" value
 * @method unidad              setUsuarioDirg()         Sets the current record's "UsuarioDirg" value
 * @method unidad              setComite()              Sets the current record's "comite" collection
 * @method unidad              setUsuario()             Sets the current record's "Usuario" collection
 * 
 * @package    carpetavirtual
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseunidad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('unidad');
        $this->hasColumn('id_unidad', 'integer', 11, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('id_empresa', 'integer', 11, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 11,
             ));
        $this->hasColumn('id_usuario', 'integer', 11, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 11,
             ));
        $this->hasColumn('id_consultor', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('id_gerente', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('id_subdirector', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('id_director_general', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('logo', 'string', 300, array(
             'type' => 'string',
             'length' => 300,
             ));
        $this->hasColumn('id_region', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('sucursal', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
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
        $this->hasColumn('direccion', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('numero', 'string', 11, array(
             'type' => 'string',
             'length' => 11,
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
        $this->hasOne('empresa', array(
             'local' => 'id_empresa',
             'foreign' => 'id_empresa',
             'onDelete' => 'CASCADE'));

        $this->hasOne('usuario', array(
             'local' => 'id_usuario',
             'foreign' => 'id_usuario',
             'onDelete' => 'restrict'));

        $this->hasOne('region as Region', array(
             'local' => 'id_region',
             'foreign' => 'id_region'));

        $this->hasOne('usuario as usuarioConsultor', array(
             'local' => 'id_consultor',
             'foreign' => 'id_usuario'));

        $this->hasOne('usuario as UsuarioGte', array(
             'local' => 'id_gerente',
             'foreign' => 'id_usuario'));

        $this->hasOne('usuario as UsuarioSubd', array(
             'local' => 'id_subdirector',
             'foreign' => 'id_usuario'));

        $this->hasOne('usuario as UsuarioDirg', array(
             'local' => 'id_director_general',
             'foreign' => 'id_usuario'));

        $this->hasMany('comite', array(
             'local' => 'id_unidad',
             'foreign' => 'id_unidad'));

        $this->hasMany('usuario as Usuario', array(
             'local' => 'id_unidad',
             'foreign' => 'id_unidad'));

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