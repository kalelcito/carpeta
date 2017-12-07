<?php

/**
 * direccion filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasedireccionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pais'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'municipio'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'delegacion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'referencia'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cp'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_unidad'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_empresa'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'pais'         => new sfValidatorPass(array('required' => false)),
      'estado'       => new sfValidatorPass(array('required' => false)),
      'ciudad'       => new sfValidatorPass(array('required' => false)),
      'municipio'    => new sfValidatorPass(array('required' => false)),
      'delegacion'   => new sfValidatorPass(array('required' => false)),
      'direccion'    => new sfValidatorPass(array('required' => false)),
      'referencia'   => new sfValidatorPass(array('required' => false)),
      'numero'       => new sfValidatorPass(array('required' => false)),
      'cp'           => new sfValidatorPass(array('required' => false)),
      'id_unidad'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_empresa'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('direccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'direccion';
  }

  public function getFields()
  {
    return array(
      'id_direccion' => 'Number',
      'pais'         => 'Text',
      'estado'       => 'Text',
      'ciudad'       => 'Text',
      'municipio'    => 'Text',
      'delegacion'   => 'Text',
      'direccion'    => 'Text',
      'referencia'   => 'Text',
      'numero'       => 'Text',
      'cp'           => 'Text',
      'id_unidad'    => 'Number',
      'id_empresa'   => 'Number',
    );
  }
}
