<?php

/**
 * seccion6 filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion6FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_programa' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_seccion'  => new sfWidgetFormFilterInput(),
      'tablero'     => new sfWidgetFormFilterInput(),
      'circular'    => new sfWidgetFormFilterInput(),
      'correo'      => new sfWidgetFormFilterInput(),
      'informe'     => new sfWidgetFormFilterInput(),
      'informal'    => new sfWidgetFormFilterInput(),
      'otro_medio'  => new sfWidgetFormFilterInput(),
      'text_otro'   => new sfWidgetFormFilterInput(),
      'creado'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_programa' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Programa'), 'column' => 'id_programa')),
      'id_seccion'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tablero'     => new sfValidatorPass(array('required' => false)),
      'circular'    => new sfValidatorPass(array('required' => false)),
      'correo'      => new sfValidatorPass(array('required' => false)),
      'informe'     => new sfValidatorPass(array('required' => false)),
      'informal'    => new sfValidatorPass(array('required' => false)),
      'otro_medio'  => new sfValidatorPass(array('required' => false)),
      'text_otro'   => new sfValidatorPass(array('required' => false)),
      'creado'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('seccion6_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion6';
  }

  public function getFields()
  {
    return array(
      'id_ps'       => 'Number',
      'id_programa' => 'ForeignKey',
      'id_seccion'  => 'Number',
      'tablero'     => 'Text',
      'circular'    => 'Text',
      'correo'      => 'Text',
      'informe'     => 'Text',
      'informal'    => 'Text',
      'otro_medio'  => 'Text',
      'text_otro'   => 'Text',
      'creado'      => 'Date',
    );
  }
}
