<?php

/**
 * seccion10 filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion10FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_programa'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_seccion'      => new sfWidgetFormFilterInput(),
      'id_usuario_creo' => new sfWidgetFormFilterInput(),
      'comentario'      => new sfWidgetFormFilterInput(),
      'creado'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_programa'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Programa'), 'column' => 'id_programa')),
      'id_seccion'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_usuario_creo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'comentario'      => new sfValidatorPass(array('required' => false)),
      'creado'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('seccion10_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion10';
  }

  public function getFields()
  {
    return array(
      'id_ps'           => 'Number',
      'id_programa'     => 'ForeignKey',
      'id_seccion'      => 'Number',
      'id_usuario_creo' => 'Number',
      'comentario'      => 'Text',
      'creado'          => 'Date',
    );
  }
}
