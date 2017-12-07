<?php

/**
 * unidad form base class.
 *
 * @method unidad getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseunidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_unidad'           => new sfWidgetFormInputHidden(),
      'id_empresa'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('empresa'), 'add_empty' => false)),
      'id_usuario'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'), 'add_empty' => false)),
      'id_consultor'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuarioConsultor'), 'add_empty' => true)),
      'id_gerente'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioGte'), 'add_empty' => true)),
      'id_subdirector'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioSubd'), 'add_empty' => true)),
      'id_director_general' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioDirg'), 'add_empty' => true)),
      'logo'                => new sfWidgetFormTextarea(),
      'id_region'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'add_empty' => true)),
      'nombre'              => new sfWidgetFormInputText(),
      'sucursal'            => new sfWidgetFormInputText(),
      'nombre_contacto'     => new sfWidgetFormInputText(),
      'email'               => new sfWidgetFormInputText(),
      'telefono'            => new sfWidgetFormInputText(),
      'pais'                => new sfWidgetFormInputText(),
      'estado'              => new sfWidgetFormInputText(),
      'ciudad'              => new sfWidgetFormInputText(),
      'municipio'           => new sfWidgetFormInputText(),
      'direccion'           => new sfWidgetFormTextarea(),
      'numero'              => new sfWidgetFormInputText(),
      'delegacion'          => new sfWidgetFormInputText(),
      'cp'                  => new sfWidgetFormInputText(),
      'referencia'          => new sfWidgetFormTextarea(),
      'creado'              => new sfWidgetFormDateTime(),
      'actualizado'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_unidad'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_unidad', 'required' => false)),
      'id_empresa'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('empresa'))),
      'id_usuario'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'))),
      'id_consultor'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuarioConsultor'), 'required' => false)),
      'id_gerente'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioGte'), 'required' => false)),
      'id_subdirector'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioSubd'), 'required' => false)),
      'id_director_general' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioDirg'), 'required' => false)),
      'logo'                => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'id_region'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sucursal'            => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'nombre_contacto'     => new sfValidatorString(array('max_length' => 240, 'required' => false)),
      'email'               => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'telefono'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'pais'                => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'estado'              => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'ciudad'              => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'municipio'           => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'direccion'           => new sfValidatorString(array('required' => false)),
      'numero'              => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'delegacion'          => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'cp'                  => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'referencia'          => new sfValidatorString(array('required' => false)),
      'creado'              => new sfValidatorDateTime(),
      'actualizado'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('unidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'unidad';
  }

}
