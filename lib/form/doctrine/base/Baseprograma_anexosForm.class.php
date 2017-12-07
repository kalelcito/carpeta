<?php

/**
 * programa_anexos form base class.
 *
 * @method programa_anexos getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseprograma_anexosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_anexo'     => new sfWidgetFormInputHidden(),
      'id_programa'  => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'url'          => new sfWidgetFormInputText(),
      'tipo_archivo' => new sfWidgetFormInputText(),
      'comentarios'  => new sfWidgetFormTextarea(),
      'creado'       => new sfWidgetFormDateTime(),
      'actualizado'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_anexo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_anexo', 'required' => false)),
      'id_programa'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_programa', 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'url'          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'tipo_archivo' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'comentarios'  => new sfValidatorString(array('required' => false)),
      'creado'       => new sfValidatorDateTime(),
      'actualizado'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('programa_anexos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'programa_anexos';
  }

}
