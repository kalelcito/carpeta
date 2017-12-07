<?php

/**
 * seccion9 filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion9FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_programa'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_seccion'      => new sfWidgetFormFilterInput(),
      'id_usuario_creo' => new sfWidgetFormFilterInput(),
      'anio1'           => new sfWidgetFormFilterInput(),
      'anio2'           => new sfWidgetFormFilterInput(),
      'anio3'           => new sfWidgetFormFilterInput(),
      'anio4'           => new sfWidgetFormFilterInput(),
      'anio5'           => new sfWidgetFormFilterInput(),
      'indicador'       => new sfWidgetFormFilterInput(),
      'ind_a1a'         => new sfWidgetFormFilterInput(),
      'ind_a2a'         => new sfWidgetFormFilterInput(),
      'ind_a3a'         => new sfWidgetFormFilterInput(),
      'ind_a4a'         => new sfWidgetFormFilterInput(),
      'ind_a5a'         => new sfWidgetFormFilterInput(),
      'indicador2'      => new sfWidgetFormFilterInput(),
      'ind_a1b'         => new sfWidgetFormFilterInput(),
      'ind_a2b'         => new sfWidgetFormFilterInput(),
      'ind_a3b'         => new sfWidgetFormFilterInput(),
      'ind_a4b'         => new sfWidgetFormFilterInput(),
      'ind_a5b'         => new sfWidgetFormFilterInput(),
      'indicador3'      => new sfWidgetFormFilterInput(),
      'ind_a1c'         => new sfWidgetFormFilterInput(),
      'ind_a2c'         => new sfWidgetFormFilterInput(),
      'ind_a3c'         => new sfWidgetFormFilterInput(),
      'ind_a4c'         => new sfWidgetFormFilterInput(),
      'ind_a5c'         => new sfWidgetFormFilterInput(),
      'indicador4'      => new sfWidgetFormFilterInput(),
      'ind_a1d'         => new sfWidgetFormFilterInput(),
      'ind_a2d'         => new sfWidgetFormFilterInput(),
      'ind_a3d'         => new sfWidgetFormFilterInput(),
      'ind_a4d'         => new sfWidgetFormFilterInput(),
      'ind_a5d'         => new sfWidgetFormFilterInput(),
      'creado'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_programa'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Programa'), 'column' => 'id_programa')),
      'id_seccion'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_usuario_creo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'anio1'           => new sfValidatorPass(array('required' => false)),
      'anio2'           => new sfValidatorPass(array('required' => false)),
      'anio3'           => new sfValidatorPass(array('required' => false)),
      'anio4'           => new sfValidatorPass(array('required' => false)),
      'anio5'           => new sfValidatorPass(array('required' => false)),
      'indicador'       => new sfValidatorPass(array('required' => false)),
      'ind_a1a'         => new sfValidatorPass(array('required' => false)),
      'ind_a2a'         => new sfValidatorPass(array('required' => false)),
      'ind_a3a'         => new sfValidatorPass(array('required' => false)),
      'ind_a4a'         => new sfValidatorPass(array('required' => false)),
      'ind_a5a'         => new sfValidatorPass(array('required' => false)),
      'indicador2'      => new sfValidatorPass(array('required' => false)),
      'ind_a1b'         => new sfValidatorPass(array('required' => false)),
      'ind_a2b'         => new sfValidatorPass(array('required' => false)),
      'ind_a3b'         => new sfValidatorPass(array('required' => false)),
      'ind_a4b'         => new sfValidatorPass(array('required' => false)),
      'ind_a5b'         => new sfValidatorPass(array('required' => false)),
      'indicador3'      => new sfValidatorPass(array('required' => false)),
      'ind_a1c'         => new sfValidatorPass(array('required' => false)),
      'ind_a2c'         => new sfValidatorPass(array('required' => false)),
      'ind_a3c'         => new sfValidatorPass(array('required' => false)),
      'ind_a4c'         => new sfValidatorPass(array('required' => false)),
      'ind_a5c'         => new sfValidatorPass(array('required' => false)),
      'indicador4'      => new sfValidatorPass(array('required' => false)),
      'ind_a1d'         => new sfValidatorPass(array('required' => false)),
      'ind_a2d'         => new sfValidatorPass(array('required' => false)),
      'ind_a3d'         => new sfValidatorPass(array('required' => false)),
      'ind_a4d'         => new sfValidatorPass(array('required' => false)),
      'ind_a5d'         => new sfValidatorPass(array('required' => false)),
      'creado'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('seccion9_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion9';
  }

  public function getFields()
  {
    return array(
      'id_ps'           => 'Number',
      'id_programa'     => 'ForeignKey',
      'id_seccion'      => 'Number',
      'id_usuario_creo' => 'Number',
      'anio1'           => 'Text',
      'anio2'           => 'Text',
      'anio3'           => 'Text',
      'anio4'           => 'Text',
      'anio5'           => 'Text',
      'indicador'       => 'Text',
      'ind_a1a'         => 'Text',
      'ind_a2a'         => 'Text',
      'ind_a3a'         => 'Text',
      'ind_a4a'         => 'Text',
      'ind_a5a'         => 'Text',
      'indicador2'      => 'Text',
      'ind_a1b'         => 'Text',
      'ind_a2b'         => 'Text',
      'ind_a3b'         => 'Text',
      'ind_a4b'         => 'Text',
      'ind_a5b'         => 'Text',
      'indicador3'      => 'Text',
      'ind_a1c'         => 'Text',
      'ind_a2c'         => 'Text',
      'ind_a3c'         => 'Text',
      'ind_a4c'         => 'Text',
      'ind_a5c'         => 'Text',
      'indicador4'      => 'Text',
      'ind_a1d'         => 'Text',
      'ind_a2d'         => 'Text',
      'ind_a3d'         => 'Text',
      'ind_a4d'         => 'Text',
      'ind_a5d'         => 'Text',
      'creado'          => 'Date',
    );
  }
}
