<?php

/**
 * seccion11 form base class.
 *
 * @method seccion11 getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion11Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_ps'      => new sfWidgetFormInputHidden(),
      'id_comite'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comite'), 'add_empty' => true)),
      'id_seccion' => new sfWidgetFormInputText(),
      'id_usuario' => new sfWidgetFormInputText(),
      'min_a1'     => new sfWidgetFormInputCheckbox(),
      'min_b1'     => new sfWidgetFormInputCheckbox(),
      'min_c1'     => new sfWidgetFormInputCheckbox(),
      'min_d1'     => new sfWidgetFormInputCheckbox(),
      'min_e1'     => new sfWidgetFormInputCheckbox(),
      'min_a2'     => new sfWidgetFormInputCheckbox(),
      'min_a3'     => new sfWidgetFormInputCheckbox(),
      'min_a4'     => new sfWidgetFormInputCheckbox(),
      'min_a5'     => new sfWidgetFormInputCheckbox(),
      'min_b5'     => new sfWidgetFormInputCheckbox(),
      'min_c5'     => new sfWidgetFormInputCheckbox(),
      'min_d5'     => new sfWidgetFormInputCheckbox(),
      'min_e5'     => new sfWidgetFormInputCheckbox(),
      'min_f5'     => new sfWidgetFormInputCheckbox(),
      'min_g5'     => new sfWidgetFormInputCheckbox(),
      'min_a6'     => new sfWidgetFormInputCheckbox(),
      'min_b6'     => new sfWidgetFormInputCheckbox(),
      'min_c6'     => new sfWidgetFormInputCheckbox(),
      'min_a7'     => new sfWidgetFormInputCheckbox(),
      'min_b7'     => new sfWidgetFormInputCheckbox(),
      'min_a8'     => new sfWidgetFormInputCheckbox(),
      'min_b8'     => new sfWidgetFormInputCheckbox(),
      'min_a9'     => new sfWidgetFormInputCheckbox(),
      'min_b9'     => new sfWidgetFormInputCheckbox(),
      'min_c9'     => new sfWidgetFormInputCheckbox(),
      'min_d9'     => new sfWidgetFormInputCheckbox(),
      'min_e9'     => new sfWidgetFormInputCheckbox(),
      'min_a10'    => new sfWidgetFormInputCheckbox(),
      'min_a11'    => new sfWidgetFormInputCheckbox(),
      'min_a16'    => new sfWidgetFormInputCheckbox(),
      'min_a17'    => new sfWidgetFormInputCheckbox(),
      'min_b17'    => new sfWidgetFormInputCheckbox(),
      'min_a19'    => new sfWidgetFormInputCheckbox(),
      'min_a24'    => new sfWidgetFormInputCheckbox(),
      'min_a25'    => new sfWidgetFormInputCheckbox(),
      'min_b25'    => new sfWidgetFormInputCheckbox(),
      'fecha'      => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_ps'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_ps', 'required' => false)),
      'id_comite'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Comite'), 'required' => false)),
      'id_seccion' => new sfValidatorInteger(array('required' => false)),
      'id_usuario' => new sfValidatorInteger(array('required' => false)),
      'min_a1'     => new sfValidatorBoolean(array('required' => false)),
      'min_b1'     => new sfValidatorBoolean(array('required' => false)),
      'min_c1'     => new sfValidatorBoolean(array('required' => false)),
      'min_d1'     => new sfValidatorBoolean(array('required' => false)),
      'min_e1'     => new sfValidatorBoolean(array('required' => false)),
      'min_a2'     => new sfValidatorBoolean(array('required' => false)),
      'min_a3'     => new sfValidatorBoolean(array('required' => false)),
      'min_a4'     => new sfValidatorBoolean(array('required' => false)),
      'min_a5'     => new sfValidatorBoolean(array('required' => false)),
      'min_b5'     => new sfValidatorBoolean(array('required' => false)),
      'min_c5'     => new sfValidatorBoolean(array('required' => false)),
      'min_d5'     => new sfValidatorBoolean(array('required' => false)),
      'min_e5'     => new sfValidatorBoolean(array('required' => false)),
      'min_f5'     => new sfValidatorBoolean(array('required' => false)),
      'min_g5'     => new sfValidatorBoolean(array('required' => false)),
      'min_a6'     => new sfValidatorBoolean(array('required' => false)),
      'min_b6'     => new sfValidatorBoolean(array('required' => false)),
      'min_c6'     => new sfValidatorBoolean(array('required' => false)),
      'min_a7'     => new sfValidatorBoolean(array('required' => false)),
      'min_b7'     => new sfValidatorBoolean(array('required' => false)),
      'min_a8'     => new sfValidatorBoolean(array('required' => false)),
      'min_b8'     => new sfValidatorBoolean(array('required' => false)),
      'min_a9'     => new sfValidatorBoolean(array('required' => false)),
      'min_b9'     => new sfValidatorBoolean(array('required' => false)),
      'min_c9'     => new sfValidatorBoolean(array('required' => false)),
      'min_d9'     => new sfValidatorBoolean(array('required' => false)),
      'min_e9'     => new sfValidatorBoolean(array('required' => false)),
      'min_a10'    => new sfValidatorBoolean(array('required' => false)),
      'min_a11'    => new sfValidatorBoolean(array('required' => false)),
      'min_a16'    => new sfValidatorBoolean(array('required' => false)),
      'min_a17'    => new sfValidatorBoolean(array('required' => false)),
      'min_b17'    => new sfValidatorBoolean(array('required' => false)),
      'min_a19'    => new sfValidatorBoolean(array('required' => false)),
      'min_a24'    => new sfValidatorBoolean(array('required' => false)),
      'min_a25'    => new sfValidatorBoolean(array('required' => false)),
      'min_b25'    => new sfValidatorBoolean(array('required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seccion11[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion11';
  }

}
