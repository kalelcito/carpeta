<?php

/**
 * usuario_grupo form base class.
 *
 * @method usuario_grupo getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseusuario_grupoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_grupo' => new sfWidgetFormInputHidden(),
      'nombre'   => new sfWidgetFormInputText(),
      'permisos' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_grupo' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_grupo', 'required' => false)),
      'nombre'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'permisos' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_grupo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'usuario_grupo';
  }

}
