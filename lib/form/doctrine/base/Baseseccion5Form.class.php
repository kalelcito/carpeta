<?php

/**
 * seccion5 form base class.
 *
 * @method seccion5 getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion5Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_ps'          => new sfWidgetFormInputHidden(),
      'id_programa'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_seccion'     => new sfWidgetFormInputText(),
      'directivos'     => new sfWidgetFormInputText(),
      'personalno_sin' => new sfWidgetFormInputText(),
      'personal_sin'   => new sfWidgetFormInputText(),
      't_personal'     => new sfWidgetFormInputText(),
      'f_personal'     => new sfWidgetFormInputText(),
      'o_grupos'       => new sfWidgetFormInputText(),
      'text_otros'     => new sfWidgetFormInputText(),
      'creado'         => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_ps'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_ps', 'required' => false)),
      'id_programa'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'required' => false)),
      'id_seccion'     => new sfValidatorInteger(array('required' => false)),
      'directivos'     => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'personalno_sin' => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'personal_sin'   => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      't_personal'     => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'f_personal'     => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'o_grupos'       => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'text_otros'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'creado'         => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seccion5[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion5';
  }

}
