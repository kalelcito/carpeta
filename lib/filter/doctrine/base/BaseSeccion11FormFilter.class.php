<?php

/**
 * seccion11 filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseseccion11FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_comite'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comite'), 'add_empty' => true)),
      'id_seccion' => new sfWidgetFormFilterInput(),
      'id_usuario' => new sfWidgetFormFilterInput(),
      'min_a1'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_b1'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_c1'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_d1'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_e1'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a2'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a3'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a4'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a5'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_b5'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_c5'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_d5'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_e5'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_f5'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_g5'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a6'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_b6'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_c6'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a7'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_b7'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a8'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_b8'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a9'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_b9'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_c9'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_d9'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_e9'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a10'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a11'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a16'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a17'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_b17'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a19'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a24'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_a25'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_b25'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_comite'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Comite'), 'column' => 'id_comite')),
      'id_seccion' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_usuario' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'min_a1'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_b1'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_c1'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_d1'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_e1'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a2'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a3'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a4'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a5'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_b5'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_c5'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_d5'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_e5'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_f5'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_g5'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a6'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_b6'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_c6'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a7'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_b7'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a8'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_b8'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a9'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_b9'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_c9'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_d9'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_e9'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a10'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a11'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a16'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a17'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_b17'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a19'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a24'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_a25'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_b25'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('seccion11_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'seccion11';
  }

  public function getFields()
  {
    return array(
      'id_ps'      => 'Number',
      'id_comite'  => 'ForeignKey',
      'id_seccion' => 'Number',
      'id_usuario' => 'Number',
      'min_a1'     => 'Boolean',
      'min_b1'     => 'Boolean',
      'min_c1'     => 'Boolean',
      'min_d1'     => 'Boolean',
      'min_e1'     => 'Boolean',
      'min_a2'     => 'Boolean',
      'min_a3'     => 'Boolean',
      'min_a4'     => 'Boolean',
      'min_a5'     => 'Boolean',
      'min_b5'     => 'Boolean',
      'min_c5'     => 'Boolean',
      'min_d5'     => 'Boolean',
      'min_e5'     => 'Boolean',
      'min_f5'     => 'Boolean',
      'min_g5'     => 'Boolean',
      'min_a6'     => 'Boolean',
      'min_b6'     => 'Boolean',
      'min_c6'     => 'Boolean',
      'min_a7'     => 'Boolean',
      'min_b7'     => 'Boolean',
      'min_a8'     => 'Boolean',
      'min_b8'     => 'Boolean',
      'min_a9'     => 'Boolean',
      'min_b9'     => 'Boolean',
      'min_c9'     => 'Boolean',
      'min_d9'     => 'Boolean',
      'min_e9'     => 'Boolean',
      'min_a10'    => 'Boolean',
      'min_a11'    => 'Boolean',
      'min_a16'    => 'Boolean',
      'min_a17'    => 'Boolean',
      'min_b17'    => 'Boolean',
      'min_a19'    => 'Boolean',
      'min_a24'    => 'Boolean',
      'min_a25'    => 'Boolean',
      'min_b25'    => 'Boolean',
      'fecha'      => 'Date',
    );
  }
}
