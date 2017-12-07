<?php

/**
 * usuario_grupo filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Baseusuario_grupoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'   => new sfWidgetFormFilterInput(),
      'permisos' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'   => new sfValidatorPass(array('required' => false)),
      'permisos' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_grupo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'usuario_grupo';
  }

  public function getFields()
  {
    return array(
      'id_grupo' => 'Number',
      'nombre'   => 'Text',
      'permisos' => 'Text',
    );
  }
}
