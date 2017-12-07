<?php

/**
 * empresa form base class.
 *
 * @method empresa getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseempresaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'         => new sfWidgetFormInputHidden(),
      'nombre_empresa'     => new sfWidgetFormInputText(),
      'logo'               => new sfWidgetFormTextarea(),
      'nombre_contacto'    => new sfWidgetFormInputText(),
      'email'              => new sfWidgetFormInputText(),
      'telefono'           => new sfWidgetFormInputText(),
      'activar_sucursales' => new sfWidgetFormInputCheckbox(),
      'tipo'               => new sfWidgetFormInputCheckbox(),
      'pais'               => new sfWidgetFormInputText(),
      'estado'             => new sfWidgetFormInputText(),
      'ciudad'             => new sfWidgetFormInputText(),
      'municipio'          => new sfWidgetFormInputText(),
      'numero'             => new sfWidgetFormInputText(),
      'direccion'          => new sfWidgetFormTextarea(),
      'delegacion'         => new sfWidgetFormInputText(),
      'cp'                 => new sfWidgetFormInputText(),
      'referencia'         => new sfWidgetFormTextarea(),
      'creado'             => new sfWidgetFormDateTime(),
      'actualizado'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_empresa'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'nombre_empresa'     => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'logo'               => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'nombre_contacto'    => new sfValidatorString(array('max_length' => 240, 'required' => false)),
      'email'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'telefono'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'activar_sucursales' => new sfValidatorBoolean(array('required' => false)),
      'tipo'               => new sfValidatorBoolean(array('required' => false)),
      'pais'               => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'estado'             => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'ciudad'             => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'municipio'          => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'numero'             => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'direccion'          => new sfValidatorString(array('required' => false)),
      'delegacion'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'cp'                 => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'referencia'         => new sfValidatorString(array('required' => false)),
      'creado'             => new sfValidatorDateTime(),
      'actualizado'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('empresa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'empresa';
  }

}
