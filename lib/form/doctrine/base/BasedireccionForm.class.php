<?php

/**
 * direccion form base class.
 *
 * @method direccion getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasedireccionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_direccion' => new sfWidgetFormInputHidden(),
      'pais'         => new sfWidgetFormInputText(),
      'estado'       => new sfWidgetFormInputText(),
      'ciudad'       => new sfWidgetFormInputText(),
      'municipio'    => new sfWidgetFormInputText(),
      'delegacion'   => new sfWidgetFormInputText(),
      'direccion'    => new sfWidgetFormTextarea(),
      'referencia'   => new sfWidgetFormTextarea(),
      'numero'       => new sfWidgetFormInputText(),
      'cp'           => new sfWidgetFormInputText(),
      'id_unidad'    => new sfWidgetFormInputText(),
      'id_empresa'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_direccion' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_direccion', 'required' => false)),
      'pais'         => new sfValidatorString(array('max_length' => 64)),
      'estado'       => new sfValidatorString(array('max_length' => 64)),
      'ciudad'       => new sfValidatorString(array('max_length' => 128)),
      'municipio'    => new sfValidatorString(array('max_length' => 128)),
      'delegacion'   => new sfValidatorString(array('max_length' => 128)),
      'direccion'    => new sfValidatorString(),
      'referencia'   => new sfValidatorString(),
      'numero'       => new sfValidatorString(array('max_length' => 11)),
      'cp'           => new sfValidatorString(array('max_length' => 11)),
      'id_unidad'    => new sfValidatorInteger(),
      'id_empresa'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('direccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'direccion';
  }

}
