<?php

/**
 * programa filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseprogramaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_requisito'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('requisito'), 'add_empty' => true)),
      'id_comite'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('comite'), 'add_empty' => true)),
      'nombre'              => new sfWidgetFormFilterInput(),
      'coordinador'         => new sfWidgetFormFilterInput(),
      'existencia'          => new sfWidgetFormFilterInput(),
      'difusion'            => new sfWidgetFormFilterInput(),
      'participacion'       => new sfWidgetFormFilterInput(),
      'mejora'              => new sfWidgetFormFilterInput(),
      'vinculacion'         => new sfWidgetFormFilterInput(),
      'calificacion'        => new sfWidgetFormFilterInput(),
      'fecha_elaboracion'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'revisor1'            => new sfWidgetFormFilterInput(),
      'fecha_revision'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'revisor2'            => new sfWidgetFormFilterInput(),
      'fecha_revision2'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'revisor3'            => new sfWidgetFormFilterInput(),
      'fecha_revision3'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'revisor4'            => new sfWidgetFormFilterInput(),
      'fecha_revision4'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'revisor5'            => new sfWidgetFormFilterInput(),
      'fecha_revision5'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_usuario_elaboro'  => new sfWidgetFormFilterInput(),
      'id_consultor'        => new sfWidgetFormFilterInput(),
      'fecha_compromiso'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'no_revision'         => new sfWidgetFormFilterInput(),
      'id_usuario_reviso'   => new sfWidgetFormFilterInput(),
      'id_usuario_modifico' => new sfWidgetFormFilterInput(),
      'fecha_modifico'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'creado'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'actualizado'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'comentario'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_requisito'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('requisito'), 'column' => 'id_requisito')),
      'id_comite'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('comite'), 'column' => 'id_comite')),
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'coordinador'         => new sfValidatorPass(array('required' => false)),
      'existencia'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'difusion'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'participacion'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mejora'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vinculacion'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'calificacion'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fecha_elaboracion'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'revisor1'            => new sfValidatorPass(array('required' => false)),
      'fecha_revision'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'revisor2'            => new sfValidatorPass(array('required' => false)),
      'fecha_revision2'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'revisor3'            => new sfValidatorPass(array('required' => false)),
      'fecha_revision3'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'revisor4'            => new sfValidatorPass(array('required' => false)),
      'fecha_revision4'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'revisor5'            => new sfValidatorPass(array('required' => false)),
      'fecha_revision5'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'id_usuario_elaboro'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_consultor'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_compromiso'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'no_revision'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_usuario_reviso'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_usuario_modifico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_modifico'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'creado'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'actualizado'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'comentario'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('programa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'programa';
  }

  public function getFields()
  {
    return array(
      'id_programa'         => 'Number',
      'id_requisito'        => 'ForeignKey',
      'id_comite'           => 'ForeignKey',
      'nombre'              => 'Text',
      'coordinador'         => 'Text',
      'existencia'          => 'Number',
      'difusion'            => 'Number',
      'participacion'       => 'Number',
      'mejora'              => 'Number',
      'vinculacion'         => 'Number',
      'calificacion'        => 'Number',
      'fecha_elaboracion'   => 'Date',
      'revisor1'            => 'Text',
      'fecha_revision'      => 'Date',
      'revisor2'            => 'Text',
      'fecha_revision2'     => 'Date',
      'revisor3'            => 'Text',
      'fecha_revision3'     => 'Date',
      'revisor4'            => 'Text',
      'fecha_revision4'     => 'Date',
      'revisor5'            => 'Text',
      'fecha_revision5'     => 'Date',
      'id_usuario_elaboro'  => 'Number',
      'id_consultor'        => 'Number',
      'fecha_compromiso'    => 'Date',
      'no_revision'         => 'Number',
      'id_usuario_reviso'   => 'Number',
      'id_usuario_modifico' => 'Number',
      'fecha_modifico'      => 'Date',
      'creado'              => 'Date',
      'actualizado'         => 'Date',
      'comentario'          => 'Text',
    );
  }
}
