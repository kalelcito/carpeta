<?php

/**
 * requisito filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaserequisitoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'   => new sfWidgetFormFilterInput(),
      'guia_de_apoyo' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titulo'        => new sfValidatorPass(array('required' => false)),
      'descripcion'   => new sfValidatorPass(array('required' => false)),
      'guia_de_apoyo' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('requisito_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'requisito';
  }

  public function getFields()
  {
    return array(
      'id_requisito'  => 'Number',
      'titulo'        => 'Text',
      'descripcion'   => 'Text',
      'guia_de_apoyo' => 'Text',
    );
  }
}
