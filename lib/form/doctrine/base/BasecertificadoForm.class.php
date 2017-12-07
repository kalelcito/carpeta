<?php

/**
 * certificado form base class.
 *
 * @method certificado getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasecertificadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_certificado' => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'descripcion'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_certificado' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_certificado', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'descripcion'    => new sfValidatorString(array('max_length' => 250, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('certificado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'certificado';
  }

}
