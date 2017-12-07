<?php

/**
 * region form base class.
 *
 * @method region getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseregionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_region' => new sfWidgetFormInputHidden(),
      'nombre'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_region' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_region', 'required' => false)),
      'nombre'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'region', 'column' => array('id_region')))
    );

    $this->widgetSchema->setNameFormat('region[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'region';
  }

}
