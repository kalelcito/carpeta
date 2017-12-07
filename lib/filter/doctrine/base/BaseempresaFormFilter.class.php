<?php

/**
 * empresa filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseempresaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_empresa'     => new sfWidgetFormFilterInput(),
      'logo'               => new sfWidgetFormFilterInput(),
      'nombre_contacto'    => new sfWidgetFormFilterInput(),
      'email'              => new sfWidgetFormFilterInput(),
      'telefono'           => new sfWidgetFormFilterInput(),
      'activar_sucursales' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'pais'               => new sfWidgetFormFilterInput(),
      'estado'             => new sfWidgetFormFilterInput(),
      'ciudad'             => new sfWidgetFormFilterInput(),
      'municipio'          => new sfWidgetFormFilterInput(),
      'numero'             => new sfWidgetFormFilterInput(),
      'direccion'          => new sfWidgetFormFilterInput(),
      'delegacion'         => new sfWidgetFormFilterInput(),
      'cp'                 => new sfWidgetFormFilterInput(),
      'referencia'         => new sfWidgetFormFilterInput(),
      'creado'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'actualizado'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre_empresa'     => new sfValidatorPass(array('required' => false)),
      'logo'               => new sfValidatorPass(array('required' => false)),
      'nombre_contacto'    => new sfValidatorPass(array('required' => false)),
      'email'              => new sfValidatorPass(array('required' => false)),
      'telefono'           => new sfValidatorPass(array('required' => false)),
      'activar_sucursales' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'pais'               => new sfValidatorPass(array('required' => false)),
      'estado'             => new sfValidatorPass(array('required' => false)),
      'ciudad'             => new sfValidatorPass(array('required' => false)),
      'municipio'          => new sfValidatorPass(array('required' => false)),
      'numero'             => new sfValidatorPass(array('required' => false)),
      'direccion'          => new sfValidatorPass(array('required' => false)),
      'delegacion'         => new sfValidatorPass(array('required' => false)),
      'cp'                 => new sfValidatorPass(array('required' => false)),
      'referencia'         => new sfValidatorPass(array('required' => false)),
      'creado'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'actualizado'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('empresa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'empresa';
  }

  public function getFields()
  {
    return array(
      'id_empresa'         => 'Number',
      'nombre_empresa'     => 'Text',
      'logo'               => 'Text',
      'nombre_contacto'    => 'Text',
      'email'              => 'Text',
      'telefono'           => 'Text',
      'activar_sucursales' => 'Boolean',
      'tipo'               => 'Boolean',
      'pais'               => 'Text',
      'estado'             => 'Text',
      'ciudad'             => 'Text',
      'municipio'          => 'Text',
      'numero'             => 'Text',
      'direccion'          => 'Text',
      'delegacion'         => 'Text',
      'cp'                 => 'Text',
      'referencia'         => 'Text',
      'creado'             => 'Date',
      'actualizado'        => 'Date',
    );
  }
}
