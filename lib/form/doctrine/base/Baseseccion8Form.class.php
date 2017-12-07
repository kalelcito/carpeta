<?php

/**
 * seccion8 form base class.
 *
 * @method seccion8 getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion8Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_ps'           => new sfWidgetFormInputHidden(),
      'id_seccion'      => new sfWidgetFormInputText(),
      'id_programa'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_usuario_creo' => new sfWidgetFormInputText(),
      'p_d'             => new sfWidgetFormInputText(),
      't_p_d'           => new sfWidgetFormInputText(),
      'p_a'             => new sfWidgetFormInputText(),
      't_p_a'           => new sfWidgetFormInputText(),
      'p_c'             => new sfWidgetFormInputText(),
      't_p_c'           => new sfWidgetFormInputText(),
      'p_p'             => new sfWidgetFormInputText(),
      't_p_p'           => new sfWidgetFormInputText(),
      'p_o'             => new sfWidgetFormInputText(),
      't_p_o'           => new sfWidgetFormInputText(),
      'd_d'             => new sfWidgetFormInputText(),
      't_d_d'           => new sfWidgetFormInputText(),
      'd_a'             => new sfWidgetFormInputText(),
      't_d_a'           => new sfWidgetFormInputText(),
      'd_c'             => new sfWidgetFormInputText(),
      't_d_c'           => new sfWidgetFormInputText(),
      'd_p'             => new sfWidgetFormInputText(),
      't_d_p'           => new sfWidgetFormInputText(),
      'd_o'             => new sfWidgetFormInputText(),
      't_d_o'           => new sfWidgetFormInputText(),
      'e_d'             => new sfWidgetFormInputText(),
      't_e_d'           => new sfWidgetFormInputText(),
      'e_a'             => new sfWidgetFormInputText(),
      't_e_a'           => new sfWidgetFormInputText(),
      'e_c'             => new sfWidgetFormInputText(),
      't_e_c'           => new sfWidgetFormInputText(),
      'e_p'             => new sfWidgetFormInputText(),
      't_e_p'           => new sfWidgetFormInputText(),
      'e_o'             => new sfWidgetFormInputText(),
      't_e_o'           => new sfWidgetFormInputText(),
      'r_d'             => new sfWidgetFormInputText(),
      't_r_d'           => new sfWidgetFormInputText(),
      'r_a'             => new sfWidgetFormInputText(),
      't_r_a'           => new sfWidgetFormInputText(),
      'r_c'             => new sfWidgetFormInputText(),
      't_r_c'           => new sfWidgetFormInputText(),
      'r_p'             => new sfWidgetFormInputText(),
      't_r_p'           => new sfWidgetFormInputText(),
      'r_o'             => new sfWidgetFormInputText(),
      't_r_o'           => new sfWidgetFormInputText(),
      'fecha_creado'    => new sfWidgetFormDate(),
      'porcentaje'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_ps'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_ps', 'required' => false)),
      'id_seccion'      => new sfValidatorInteger(array('required' => false)),
      'id_programa'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'required' => false)),
      'id_usuario_creo' => new sfValidatorInteger(array('required' => false)),
      'p_d'             => new sfValidatorInteger(array('required' => false)),
      't_p_d'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'p_a'             => new sfValidatorInteger(array('required' => false)),
      't_p_a'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'p_c'             => new sfValidatorInteger(array('required' => false)),
      't_p_c'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'p_p'             => new sfValidatorInteger(array('required' => false)),
      't_p_p'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'p_o'             => new sfValidatorInteger(array('required' => false)),
      't_p_o'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'd_d'             => new sfValidatorInteger(array('required' => false)),
      't_d_d'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'd_a'             => new sfValidatorInteger(array('required' => false)),
      't_d_a'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'd_c'             => new sfValidatorInteger(array('required' => false)),
      't_d_c'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'd_p'             => new sfValidatorInteger(array('required' => false)),
      't_d_p'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'd_o'             => new sfValidatorInteger(array('required' => false)),
      't_d_o'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'e_d'             => new sfValidatorInteger(array('required' => false)),
      't_e_d'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'e_a'             => new sfValidatorInteger(array('required' => false)),
      't_e_a'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'e_c'             => new sfValidatorInteger(array('required' => false)),
      't_e_c'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'e_p'             => new sfValidatorInteger(array('required' => false)),
      't_e_p'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'e_o'             => new sfValidatorInteger(array('required' => false)),
      't_e_o'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'r_d'             => new sfValidatorInteger(array('required' => false)),
      't_r_d'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'r_a'             => new sfValidatorInteger(array('required' => false)),
      't_r_a'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'r_c'             => new sfValidatorInteger(array('required' => false)),
      't_r_c'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'r_p'             => new sfValidatorInteger(array('required' => false)),
      't_r_p'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'r_o'             => new sfValidatorInteger(array('required' => false)),
      't_r_o'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'fecha_creado'    => new sfValidatorDate(array('required' => false)),
      'porcentaje'      => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seccion8[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion8';
  }

}
