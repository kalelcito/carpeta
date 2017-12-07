<?php

/**
 * certificado_seccion filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Basecertificado_seccionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_certificado' => new sfWidgetFormFilterInput(),
      'titulo'         => new sfWidgetFormFilterInput(),
      'descripcion'    => new sfWidgetFormFilterInput(),
      'calificacion'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_certificado' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'titulo'         => new sfValidatorPass(array('required' => false)),
      'descripcion'    => new sfValidatorPass(array('required' => false)),
      'calificacion'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('certificado_seccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'certificado_seccion';
  }

  public function getFields()
  {
    return array(
      'id_seccion'     => 'Number',
      'id_certificado' => 'Number',
      'titulo'         => 'Text',
      'descripcion'    => 'Text',
      'calificacion'   => 'Number',
    );
  }
}
