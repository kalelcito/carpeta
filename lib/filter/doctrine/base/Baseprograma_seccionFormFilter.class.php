<?php

/**
 * programa_seccion filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseprograma_seccionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_programa'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('programa'), 'add_empty' => true)),
      'id_seccion'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_usuario_creo'      => new sfWidgetFormFilterInput(),
      'text_content'         => new sfWidgetFormFilterInput(),
      'comentario_consultor' => new sfWidgetFormFilterInput(),
      'revision'             => new sfWidgetFormFilterInput(),
      'activo'               => new sfWidgetFormFilterInput(),
      'creado'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'actualizado'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_programa'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('programa'), 'column' => 'id_programa')),
      'id_seccion'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_usuario_creo'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'text_content'         => new sfValidatorPass(array('required' => false)),
      'comentario_consultor' => new sfValidatorPass(array('required' => false)),
      'revision'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'activo'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'creado'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'actualizado'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('programa_seccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'programa_seccion';
  }

  public function getFields()
  {
    return array(
      'id_ps'                => 'Number',
      'id_programa'          => 'ForeignKey',
      'id_seccion'           => 'Number',
      'id_usuario_creo'      => 'Number',
      'text_content'         => 'Text',
      'comentario_consultor' => 'Text',
      'revision'             => 'Number',
      'activo'               => 'Number',
      'creado'               => 'Date',
      'actualizado'          => 'Date',
    );
  }
}
