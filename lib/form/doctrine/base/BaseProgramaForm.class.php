<?php

/**
 * programa form base class.
 *
 * @method programa getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseprogramaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_programa'         => new sfWidgetFormInputHidden(),
      'id_requisito'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('requisito'), 'add_empty' => false)),
      'id_comite'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('comite'), 'add_empty' => true)),
      'nombre'              => new sfWidgetFormInputText(),
      'coordinador'         => new sfWidgetFormInputText(),
      'existencia'          => new sfWidgetFormInputText(),
      'difusion'            => new sfWidgetFormInputText(),
      'participacion'       => new sfWidgetFormInputText(),
      'mejora'              => new sfWidgetFormInputText(),
      'vinculacion'         => new sfWidgetFormInputText(),
      'calificacion'        => new sfWidgetFormInputText(),
      'fecha_elaboracion'   => new sfWidgetFormDate(),
      'revisor1'            => new sfWidgetFormInputText(),
      'fecha_revision'      => new sfWidgetFormDate(),
      'revisor2'            => new sfWidgetFormInputText(),
      'fecha_revision2'     => new sfWidgetFormDate(),
      'revisor3'            => new sfWidgetFormInputText(),
      'fecha_revision3'     => new sfWidgetFormDate(),
      'revisor4'            => new sfWidgetFormInputText(),
      'fecha_revision4'     => new sfWidgetFormDate(),
      'revisor5'            => new sfWidgetFormInputText(),
      'fecha_revision5'     => new sfWidgetFormDate(),
      'id_usuario_elaboro'  => new sfWidgetFormInputText(),
      'id_consultor'        => new sfWidgetFormInputText(),
      'fecha_compromiso'    => new sfWidgetFormDate(),
      'no_revision'         => new sfWidgetFormInputText(),
      'id_usuario_reviso'   => new sfWidgetFormInputText(),
      'id_usuario_modifico' => new sfWidgetFormInputText(),
      'fecha_modifico'      => new sfWidgetFormDate(),
      'creado'              => new sfWidgetFormDateTime(),
      'actualizado'         => new sfWidgetFormDateTime(),
      'comentario'          => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_programa'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_programa', 'required' => false)),
      'id_requisito'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('requisito'))),
      'id_comite'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('comite'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'coordinador'         => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'existencia'          => new sfValidatorNumber(array('required' => false)),
      'difusion'            => new sfValidatorNumber(array('required' => false)),
      'participacion'       => new sfValidatorNumber(array('required' => false)),
      'mejora'              => new sfValidatorNumber(array('required' => false)),
      'vinculacion'         => new sfValidatorNumber(array('required' => false)),
      'calificacion'        => new sfValidatorNumber(array('required' => false)),
      'fecha_elaboracion'   => new sfValidatorDate(array('required' => false)),
      'revisor1'            => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'fecha_revision'      => new sfValidatorDate(array('required' => false)),
      'revisor2'            => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'fecha_revision2'     => new sfValidatorDate(array('required' => false)),
      'revisor3'            => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'fecha_revision3'     => new sfValidatorDate(array('required' => false)),
      'revisor4'            => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'fecha_revision4'     => new sfValidatorDate(array('required' => false)),
      'revisor5'            => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'fecha_revision5'     => new sfValidatorDate(array('required' => false)),
      'id_usuario_elaboro'  => new sfValidatorInteger(array('required' => false)),
      'id_consultor'        => new sfValidatorInteger(array('required' => false)),
      'fecha_compromiso'    => new sfValidatorDate(array('required' => false)),
      'no_revision'         => new sfValidatorInteger(array('required' => false)),
      'id_usuario_reviso'   => new sfValidatorInteger(array('required' => false)),
      'id_usuario_modifico' => new sfValidatorInteger(array('required' => false)),
      'fecha_modifico'      => new sfValidatorDate(array('required' => false)),
      'creado'              => new sfValidatorDateTime(),
      'actualizado'         => new sfValidatorDateTime(),
      'comentario'          => new sfValidatorString(array('max_length' => 600, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('programa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'programa';
  }

}
