<?php

/**
 * semaforo filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasesemaforoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_unidad_negocio'      => new sfWidgetFormFilterInput(),
      'id_certificado'         => new sfWidgetFormFilterInput(),
      'id_certificado_proceso' => new sfWidgetFormFilterInput(),
      'calificacion'           => new sfWidgetFormFilterInput(),
      'horas_acordadas'        => new sfWidgetFormFilterInput(),
      'tiempo_presencial'      => new sfWidgetFormFilterInput(),
      'tiempo_virtual'         => new sfWidgetFormFilterInput(),
      'comentarios_gerente'    => new sfWidgetFormFilterInput(),
      'comentarios_resultado'  => new sfWidgetFormFilterInput(),
      'auditoria_interna'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'auditoria_proxima'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'url_semaforo'           => new sfWidgetFormFilterInput(),
      'creado'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'actualizado'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_unidad_negocio'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_certificado'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_certificado_proceso' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'calificacion'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'horas_acordadas'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tiempo_presencial'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tiempo_virtual'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'comentarios_gerente'    => new sfValidatorPass(array('required' => false)),
      'comentarios_resultado'  => new sfValidatorPass(array('required' => false)),
      'auditoria_interna'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'auditoria_proxima'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'url_semaforo'           => new sfValidatorPass(array('required' => false)),
      'creado'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'actualizado'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('semaforo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'semaforo';
  }

  public function getFields()
  {
    return array(
      'id_semaforo'            => 'Number',
      'id_unidad_negocio'      => 'Number',
      'id_certificado'         => 'Number',
      'id_certificado_proceso' => 'Number',
      'calificacion'           => 'Number',
      'horas_acordadas'        => 'Number',
      'tiempo_presencial'      => 'Number',
      'tiempo_virtual'         => 'Number',
      'comentarios_gerente'    => 'Text',
      'comentarios_resultado'  => 'Text',
      'auditoria_interna'      => 'Date',
      'auditoria_proxima'      => 'Date',
      'url_semaforo'           => 'Text',
      'creado'                 => 'Date',
      'actualizado'            => 'Date',
    );
  }
}
