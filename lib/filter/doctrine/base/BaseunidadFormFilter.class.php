<?php

/**
 * unidad filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseunidadFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('empresa'), 'add_empty' => true)),
      'id_usuario'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'), 'add_empty' => true)),
      'id_consultor'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuarioConsultor'), 'add_empty' => true)),
      'id_gerente'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioGte'), 'add_empty' => true)),
      'id_subdirector'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioSubd'), 'add_empty' => true)),
      'id_director_general' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioDirg'), 'add_empty' => true)),
      'logo'                => new sfWidgetFormFilterInput(),
      'id_region'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'add_empty' => true)),
      'nombre'              => new sfWidgetFormFilterInput(),
      'sucursal'            => new sfWidgetFormFilterInput(),
      'nombre_contacto'     => new sfWidgetFormFilterInput(),
      'email'               => new sfWidgetFormFilterInput(),
      'telefono'            => new sfWidgetFormFilterInput(),
      'pais'                => new sfWidgetFormFilterInput(),
      'estado'              => new sfWidgetFormFilterInput(),
      'ciudad'              => new sfWidgetFormFilterInput(),
      'municipio'           => new sfWidgetFormFilterInput(),
      'direccion'           => new sfWidgetFormFilterInput(),
      'numero'              => new sfWidgetFormFilterInput(),
      'delegacion'          => new sfWidgetFormFilterInput(),
      'cp'                  => new sfWidgetFormFilterInput(),
      'referencia'          => new sfWidgetFormFilterInput(),
      'creado'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'actualizado'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('empresa'), 'column' => 'id_empresa')),
      'id_usuario'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('usuario'), 'column' => 'id_usuario')),
      'id_consultor'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('usuarioConsultor'), 'column' => 'id_usuario')),
      'id_gerente'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsuarioGte'), 'column' => 'id_usuario')),
      'id_subdirector'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsuarioSubd'), 'column' => 'id_usuario')),
      'id_director_general' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsuarioDirg'), 'column' => 'id_usuario')),
      'logo'                => new sfValidatorPass(array('required' => false)),
      'id_region'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Region'), 'column' => 'id_region')),
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'sucursal'            => new sfValidatorPass(array('required' => false)),
      'nombre_contacto'     => new sfValidatorPass(array('required' => false)),
      'email'               => new sfValidatorPass(array('required' => false)),
      'telefono'            => new sfValidatorPass(array('required' => false)),
      'pais'                => new sfValidatorPass(array('required' => false)),
      'estado'              => new sfValidatorPass(array('required' => false)),
      'ciudad'              => new sfValidatorPass(array('required' => false)),
      'municipio'           => new sfValidatorPass(array('required' => false)),
      'direccion'           => new sfValidatorPass(array('required' => false)),
      'numero'              => new sfValidatorPass(array('required' => false)),
      'delegacion'          => new sfValidatorPass(array('required' => false)),
      'cp'                  => new sfValidatorPass(array('required' => false)),
      'referencia'          => new sfValidatorPass(array('required' => false)),
      'creado'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'actualizado'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('unidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'unidad';
  }

  public function getFields()
  {
    return array(
      'id_unidad'           => 'Number',
      'id_empresa'          => 'ForeignKey',
      'id_usuario'          => 'ForeignKey',
      'id_consultor'        => 'ForeignKey',
      'id_gerente'          => 'ForeignKey',
      'id_subdirector'      => 'ForeignKey',
      'id_director_general' => 'ForeignKey',
      'logo'                => 'Text',
      'id_region'           => 'ForeignKey',
      'nombre'              => 'Text',
      'sucursal'            => 'Text',
      'nombre_contacto'     => 'Text',
      'email'               => 'Text',
      'telefono'            => 'Text',
      'pais'                => 'Text',
      'estado'              => 'Text',
      'ciudad'              => 'Text',
      'municipio'           => 'Text',
      'direccion'           => 'Text',
      'numero'              => 'Text',
      'delegacion'          => 'Text',
      'cp'                  => 'Text',
      'referencia'          => 'Text',
      'creado'              => 'Date',
      'actualizado'         => 'Date',
    );
  }
}
