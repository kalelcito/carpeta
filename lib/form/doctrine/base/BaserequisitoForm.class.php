<?php

/**
 * requisito form base class.
 *
 * @method requisito getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaserequisitoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_requisito'  => new sfWidgetFormInputHidden(),
      'titulo'        => new sfWidgetFormTextarea(),
      'descripcion'   => new sfWidgetFormTextarea(),
      'guia_de_apoyo' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_requisito'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_requisito', 'required' => false)),
      'titulo'        => new sfValidatorString(),
      'descripcion'   => new sfValidatorString(array('required' => false)),
      'guia_de_apoyo' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('requisito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'requisito';
  }

}
