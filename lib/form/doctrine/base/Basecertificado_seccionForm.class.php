<?php

/**
 * certificado_seccion form base class.
 *
 * @method certificado_seccion getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Basecertificado_seccionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_seccion'     => new sfWidgetFormInputHidden(),
      'id_certificado' => new sfWidgetFormInputText(),
      'titulo'         => new sfWidgetFormInputText(),
      'descripcion'    => new sfWidgetFormTextarea(),
      'calificacion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_seccion'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_seccion', 'required' => false)),
      'id_certificado' => new sfValidatorInteger(array('required' => false)),
      'titulo'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'descripcion'    => new sfValidatorString(array('required' => false)),
      'calificacion'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('certificado_seccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'certificado_seccion';
  }

}
