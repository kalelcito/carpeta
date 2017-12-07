<?php

/**
 * comite filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasecomiteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_unidad'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('unidad'), 'add_empty' => true)),
      'nombre_comite'         => new sfWidgetFormFilterInput(),
      'id_usuario_presidente' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
      'creado'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'actualizado'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'calificacion'          => new sfWidgetFormFilterInput(),
      'minimos'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'creado'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'usucom_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'usuario')),
    ));

    $this->setValidators(array(
      'id_unidad'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('unidad'), 'column' => 'id_unidad')),
      'nombre_comite'         => new sfValidatorPass(array('required' => false)),
      'id_usuario_presidente' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuario'), 'column' => 'id_usuario')),
      'creado'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'actualizado'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'calificacion'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'minimos'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'creado'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'usucom_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'usuario', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comite_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addUsucomListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query->leftJoin('r.comite_usuarios comite_usuarios')
          ->andWhereIn('comite_usuarios.id_usuario', $values);
  }

  public function getModelName()
  {
    return 'comite';
  }

  public function getFields()
  {
    return array(
      'id_comite'             => 'Number',
      'id_unidad'             => 'ForeignKey',
      'nombre_comite'         => 'Text',
      'id_usuario_presidente' => 'ForeignKey',
      'creado'                => 'Date',
      'actualizado'           => 'Date',
      'calificacion'          => 'Number',
      'minimos'               => 'Boolean',
      'creado'                => 'Date',
      'usucom_list'           => 'ManyKey',
    );
  }
}
