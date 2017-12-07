<?php

/**
 * seccion10 form base class.
 *
 * @method seccion10 getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion10Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_ps'           => new sfWidgetFormInputHidden(),
      'id_programa'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_seccion'      => new sfWidgetFormInputText(),
      'id_usuario_creo' => new sfWidgetFormInputText(),
      'comentario'      => new sfWidgetFormTextarea(),
      'creado'          => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_ps'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_ps', 'required' => false)),
      'id_programa'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'required' => false)),
      'id_seccion'      => new sfValidatorInteger(array('required' => false)),
      'id_usuario_creo' => new sfValidatorInteger(array('required' => false)),
      'comentario'      => new sfValidatorString(array('max_length' => 800, 'required' => false)),
      'creado'          => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seccion10[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion10';
  }

}
