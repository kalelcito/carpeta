<?php

/**
 * seccion5 filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion5FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_programa'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_seccion'     => new sfWidgetFormFilterInput(),
      'directivos'     => new sfWidgetFormFilterInput(),
      'personalno_sin' => new sfWidgetFormFilterInput(),
      'personal_sin'   => new sfWidgetFormFilterInput(),
      't_personal'     => new sfWidgetFormFilterInput(),
      'f_personal'     => new sfWidgetFormFilterInput(),
      'o_grupos'       => new sfWidgetFormFilterInput(),
      'text_otros'     => new sfWidgetFormFilterInput(),
      'creado'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_programa'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Programa'), 'column' => 'id_programa')),
      'id_seccion'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'directivos'     => new sfValidatorPass(array('required' => false)),
      'personalno_sin' => new sfValidatorPass(array('required' => false)),
      'personal_sin'   => new sfValidatorPass(array('required' => false)),
      't_personal'     => new sfValidatorPass(array('required' => false)),
      'f_personal'     => new sfValidatorPass(array('required' => false)),
      'o_grupos'       => new sfValidatorPass(array('required' => false)),
      'text_otros'     => new sfValidatorPass(array('required' => false)),
      'creado'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('seccion5_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion5';
  }

  public function getFields()
  {
    return array(
      'id_ps'          => 'Number',
      'id_programa'    => 'ForeignKey',
      'id_seccion'     => 'Number',
      'directivos'     => 'Text',
      'personalno_sin' => 'Text',
      'personal_sin'   => 'Text',
      't_personal'     => 'Text',
      'f_personal'     => 'Text',
      'o_grupos'       => 'Text',
      'text_otros'     => 'Text',
      'creado'         => 'Date',
    );
  }
}
