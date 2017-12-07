<?php

/**
 * seccion9 form base class.
 *
 * @method seccion9 getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion9Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_ps'           => new sfWidgetFormInputHidden(),
      'id_programa'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_seccion'      => new sfWidgetFormInputText(),
      'id_usuario_creo' => new sfWidgetFormInputText(),
      'anio1'           => new sfWidgetFormInputText(),
      'anio2'           => new sfWidgetFormInputText(),
      'anio3'           => new sfWidgetFormInputText(),
      'anio4'           => new sfWidgetFormInputText(),
      'anio5'           => new sfWidgetFormInputText(),
      'indicador'       => new sfWidgetFormTextarea(),
      'ind_a1a'         => new sfWidgetFormInputText(),
      'ind_a2a'         => new sfWidgetFormInputText(),
      'ind_a3a'         => new sfWidgetFormInputText(),
      'ind_a4a'         => new sfWidgetFormInputText(),
      'ind_a5a'         => new sfWidgetFormInputText(),
      'indicador2'      => new sfWidgetFormTextarea(),
      'ind_a1b'         => new sfWidgetFormInputText(),
      'ind_a2b'         => new sfWidgetFormInputText(),
      'ind_a3b'         => new sfWidgetFormInputText(),
      'ind_a4b'         => new sfWidgetFormInputText(),
      'ind_a5b'         => new sfWidgetFormInputText(),
      'indicador3'      => new sfWidgetFormTextarea(),
      'ind_a1c'         => new sfWidgetFormInputText(),
      'ind_a2c'         => new sfWidgetFormInputText(),
      'ind_a3c'         => new sfWidgetFormInputText(),
      'ind_a4c'         => new sfWidgetFormInputText(),
      'ind_a5c'         => new sfWidgetFormInputText(),
      'indicador4'      => new sfWidgetFormTextarea(),
      'ind_a1d'         => new sfWidgetFormInputText(),
      'ind_a2d'         => new sfWidgetFormInputText(),
      'ind_a3d'         => new sfWidgetFormInputText(),
      'ind_a4d'         => new sfWidgetFormInputText(),
      'ind_a5d'         => new sfWidgetFormInputText(),
      'creado'          => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_ps'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_ps', 'required' => false)),
      'id_programa'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'required' => false)),
      'id_seccion'      => new sfValidatorInteger(array('required' => false)),
      'id_usuario_creo' => new sfValidatorInteger(array('required' => false)),
      'anio1'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'anio2'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'anio3'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'anio4'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'anio5'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'indicador'       => new sfValidatorString(array('required' => false)),
      'ind_a1a'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a2a'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a3a'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a4a'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a5a'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'indicador2'      => new sfValidatorString(array('required' => false)),
      'ind_a1b'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a2b'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a3b'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a4b'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a5b'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'indicador3'      => new sfValidatorString(array('required' => false)),
      'ind_a1c'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a2c'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a3c'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a4c'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a5c'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'indicador4'      => new sfValidatorString(array('required' => false)),
      'ind_a1d'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a2d'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a3d'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a4d'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ind_a5d'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'creado'          => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seccion9[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion9';
  }

}
