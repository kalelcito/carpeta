<?php

/**
 * seccion8 filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion8FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_seccion'      => new sfWidgetFormFilterInput(),
      'id_programa'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Programa'), 'add_empty' => true)),
      'id_usuario_creo' => new sfWidgetFormFilterInput(),
      'p_d'             => new sfWidgetFormFilterInput(),
      't_p_d'           => new sfWidgetFormFilterInput(),
      'p_a'             => new sfWidgetFormFilterInput(),
      't_p_a'           => new sfWidgetFormFilterInput(),
      'p_c'             => new sfWidgetFormFilterInput(),
      't_p_c'           => new sfWidgetFormFilterInput(),
      'p_p'             => new sfWidgetFormFilterInput(),
      't_p_p'           => new sfWidgetFormFilterInput(),
      'p_o'             => new sfWidgetFormFilterInput(),
      't_p_o'           => new sfWidgetFormFilterInput(),
      'd_d'             => new sfWidgetFormFilterInput(),
      't_d_d'           => new sfWidgetFormFilterInput(),
      'd_a'             => new sfWidgetFormFilterInput(),
      't_d_a'           => new sfWidgetFormFilterInput(),
      'd_c'             => new sfWidgetFormFilterInput(),
      't_d_c'           => new sfWidgetFormFilterInput(),
      'd_p'             => new sfWidgetFormFilterInput(),
      't_d_p'           => new sfWidgetFormFilterInput(),
      'd_o'             => new sfWidgetFormFilterInput(),
      't_d_o'           => new sfWidgetFormFilterInput(),
      'e_d'             => new sfWidgetFormFilterInput(),
      't_e_d'           => new sfWidgetFormFilterInput(),
      'e_a'             => new sfWidgetFormFilterInput(),
      't_e_a'           => new sfWidgetFormFilterInput(),
      'e_c'             => new sfWidgetFormFilterInput(),
      't_e_c'           => new sfWidgetFormFilterInput(),
      'e_p'             => new sfWidgetFormFilterInput(),
      't_e_p'           => new sfWidgetFormFilterInput(),
      'e_o'             => new sfWidgetFormFilterInput(),
      't_e_o'           => new sfWidgetFormFilterInput(),
      'r_d'             => new sfWidgetFormFilterInput(),
      't_r_d'           => new sfWidgetFormFilterInput(),
      'r_a'             => new sfWidgetFormFilterInput(),
      't_r_a'           => new sfWidgetFormFilterInput(),
      'r_c'             => new sfWidgetFormFilterInput(),
      't_r_c'           => new sfWidgetFormFilterInput(),
      'r_p'             => new sfWidgetFormFilterInput(),
      't_r_p'           => new sfWidgetFormFilterInput(),
      'r_o'             => new sfWidgetFormFilterInput(),
      't_r_o'           => new sfWidgetFormFilterInput(),
      'fecha_creado'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'porcentaje'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_seccion'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_programa'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Programa'), 'column' => 'id_programa')),
      'id_usuario_creo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'p_d'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_p_d'           => new sfValidatorPass(array('required' => false)),
      'p_a'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_p_a'           => new sfValidatorPass(array('required' => false)),
      'p_c'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_p_c'           => new sfValidatorPass(array('required' => false)),
      'p_p'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_p_p'           => new sfValidatorPass(array('required' => false)),
      'p_o'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_p_o'           => new sfValidatorPass(array('required' => false)),
      'd_d'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_d_d'           => new sfValidatorPass(array('required' => false)),
      'd_a'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_d_a'           => new sfValidatorPass(array('required' => false)),
      'd_c'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_d_c'           => new sfValidatorPass(array('required' => false)),
      'd_p'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_d_p'           => new sfValidatorPass(array('required' => false)),
      'd_o'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_d_o'           => new sfValidatorPass(array('required' => false)),
      'e_d'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_e_d'           => new sfValidatorPass(array('required' => false)),
      'e_a'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_e_a'           => new sfValidatorPass(array('required' => false)),
      'e_c'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_e_c'           => new sfValidatorPass(array('required' => false)),
      'e_p'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_e_p'           => new sfValidatorPass(array('required' => false)),
      'e_o'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_e_o'           => new sfValidatorPass(array('required' => false)),
      'r_d'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_r_d'           => new sfValidatorPass(array('required' => false)),
      'r_a'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_r_a'           => new sfValidatorPass(array('required' => false)),
      'r_c'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_r_c'           => new sfValidatorPass(array('required' => false)),
      'r_p'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_r_p'           => new sfValidatorPass(array('required' => false)),
      'r_o'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      't_r_o'           => new sfValidatorPass(array('required' => false)),
      'fecha_creado'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'porcentaje'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('seccion8_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion8';
  }

  public function getFields()
  {
    return array(
      'id_ps'           => 'Number',
      'id_seccion'      => 'Number',
      'id_programa'     => 'ForeignKey',
      'id_usuario_creo' => 'Number',
      'p_d'             => 'Number',
      't_p_d'           => 'Text',
      'p_a'             => 'Number',
      't_p_a'           => 'Text',
      'p_c'             => 'Number',
      't_p_c'           => 'Text',
      'p_p'             => 'Number',
      't_p_p'           => 'Text',
      'p_o'             => 'Number',
      't_p_o'           => 'Text',
      'd_d'             => 'Number',
      't_d_d'           => 'Text',
      'd_a'             => 'Number',
      't_d_a'           => 'Text',
      'd_c'             => 'Number',
      't_d_c'           => 'Text',
      'd_p'             => 'Number',
      't_d_p'           => 'Text',
      'd_o'             => 'Number',
      't_d_o'           => 'Text',
      'e_d'             => 'Number',
      't_e_d'           => 'Text',
      'e_a'             => 'Number',
      't_e_a'           => 'Text',
      'e_c'             => 'Number',
      't_e_c'           => 'Text',
      'e_p'             => 'Number',
      't_e_p'           => 'Text',
      'e_o'             => 'Number',
      't_e_o'           => 'Text',
      'r_d'             => 'Number',
      't_r_d'           => 'Text',
      'r_a'             => 'Number',
      't_r_a'           => 'Text',
      'r_c'             => 'Number',
      't_r_c'           => 'Text',
      'r_p'             => 'Number',
      't_r_p'           => 'Text',
      'r_o'             => 'Number',
      't_r_o'           => 'Text',
      'fecha_creado'    => 'Date',
      'porcentaje'      => 'Number',
    );
  }
}
