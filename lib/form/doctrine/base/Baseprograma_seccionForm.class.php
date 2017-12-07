<?php

/**
 * programa_seccion form base class.
 *
 * @method programa_seccion getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseprograma_seccionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_ps'                => new sfWidgetFormInputHidden(),
      'id_programa'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('programa'), 'add_empty' => false)),
      'id_seccion'           => new sfWidgetFormInputText(),
      'id_usuario_creo'      => new sfWidgetFormInputText(),
      'text_content'         => new sfWidgetFormTextarea(),
      'comentario_consultor' => new sfWidgetFormTextarea(),
      'revision'             => new sfWidgetFormInputText(),
      'activo'               => new sfWidgetFormInputText(),
      'creado'               => new sfWidgetFormDateTime(),
      'actualizado'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_ps'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_ps', 'required' => false)),
      'id_programa'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('programa'))),
      'id_seccion'           => new sfValidatorInteger(),
      'id_usuario_creo'      => new sfValidatorInteger(array('required' => false)),
      'text_content'         => new sfValidatorString(array('required' => false)),
      'comentario_consultor' => new sfValidatorString(array('required' => false)),
      'revision'             => new sfValidatorInteger(array('required' => false)),
      'activo'               => new sfValidatorInteger(array('required' => false)),
      'creado'               => new sfValidatorDateTime(),
      'actualizado'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('programa_seccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'programa_seccion';
  }

}
