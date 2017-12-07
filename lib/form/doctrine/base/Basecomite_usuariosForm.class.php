<?php

/**
 * comite_usuarios form base class.
 *
 * @method comite_usuarios getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Basecomite_usuariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_usuario'     => new sfWidgetFormInputHidden(),
      'id_comite'      => new sfWidgetFormInputHidden(),
      'cargo_comite'   => new sfWidgetFormInputText(),
      'fecha_agregado' => new sfWidgetFormDateTime(),
      'fecha_agregado' => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_usuario'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_usuario', 'required' => false)),
      'id_comite'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_comite', 'required' => false)),
      'cargo_comite'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_agregado' => new sfValidatorDateTime(),
      'fecha_agregado' => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('comite_usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'comite_usuarios';
  }

}
