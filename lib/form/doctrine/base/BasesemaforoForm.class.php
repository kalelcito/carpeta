<?php

/**
 * semaforo form base class.
 *
 * @method semaforo getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasesemaforoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_semaforo'            => new sfWidgetFormInputHidden(),
      'id_unidad_negocio'      => new sfWidgetFormInputText(),
      'id_certificado'         => new sfWidgetFormInputText(),
      'id_certificado_proceso' => new sfWidgetFormInputText(),
      'calificacion'           => new sfWidgetFormInputText(),
      'horas_acordadas'        => new sfWidgetFormInputText(),
      'tiempo_presencial'      => new sfWidgetFormInputText(),
      'tiempo_virtual'         => new sfWidgetFormInputText(),
      'comentarios_gerente'    => new sfWidgetFormTextarea(),
      'comentarios_resultado'  => new sfWidgetFormTextarea(),
      'auditoria_interna'      => new sfWidgetFormDate(),
      'auditoria_proxima'      => new sfWidgetFormDate(),
      'url_semaforo'           => new sfWidgetFormInputText(),
      'creado'                 => new sfWidgetFormDateTime(),
      'actualizado'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_semaforo'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_semaforo', 'required' => false)),
      'id_unidad_negocio'      => new sfValidatorInteger(array('required' => false)),
      'id_certificado'         => new sfValidatorInteger(array('required' => false)),
      'id_certificado_proceso' => new sfValidatorInteger(array('required' => false)),
      'calificacion'           => new sfValidatorNumber(array('required' => false)),
      'horas_acordadas'        => new sfValidatorInteger(array('required' => false)),
      'tiempo_presencial'      => new sfValidatorInteger(array('required' => false)),
      'tiempo_virtual'         => new sfValidatorInteger(array('required' => false)),
      'comentarios_gerente'    => new sfValidatorString(array('required' => false)),
      'comentarios_resultado'  => new sfValidatorString(array('required' => false)),
      'auditoria_interna'      => new sfValidatorDate(array('required' => false)),
      'auditoria_proxima'      => new sfValidatorDate(array('required' => false)),
      'url_semaforo'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'creado'                 => new sfValidatorDateTime(),
      'actualizado'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('semaforo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'semaforo';
  }

}
