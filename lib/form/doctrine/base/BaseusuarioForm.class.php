<?php

/**
 * usuario form base class.
 *
 * @method usuario getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseusuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_usuario'       => new sfWidgetFormInputHidden(),
      'id_empresa'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('empresa'), 'add_empty' => true)),
      'id_grupo'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario_grupo'), 'add_empty' => true)),
      'id_unidad'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unidad'), 'add_empty' => true)),
      'id_comite'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comiteusr'), 'add_empty' => true)),
      'foto'             => new sfWidgetFormTextarea(),
      'nombre'           => new sfWidgetFormInputText(),
      'nombre_usuario'   => new sfWidgetFormInputText(),
      'primer_apellido'  => new sfWidgetFormInputText(),
      'segundo_apellido' => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'telefono_fijo'    => new sfWidgetFormInputText(),
      'telefono_celular' => new sfWidgetFormInputText(),
      'email_emergencia' => new sfWidgetFormInputText(),
      'cargo'            => new sfWidgetFormInputText(),
      'password'         => new sfWidgetFormInputText(),
      'salt'             => new sfWidgetFormInputText(),
      'palabra_clave'    => new sfWidgetFormInputText(),
      'activo'           => new sfWidgetFormInputCheckbox(),
      'tipo'             => new sfWidgetFormInputText(),
      'creado'           => new sfWidgetFormDateTime(),
      'actualizado'      => new sfWidgetFormDateTime(),
      'comusu_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'comite')),
    ));

    $this->setValidators(array(
      'id_usuario'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_usuario', 'required' => false)),
      'id_empresa'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('empresa'), 'required' => false)),
      'id_grupo'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuario_grupo'), 'required' => false)),
      'id_unidad'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Unidad'), 'required' => false)),
      'id_comite'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Comiteusr'), 'required' => false)),
      'foto'             => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'nombre_usuario'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'primer_apellido'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'segundo_apellido' => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'email'            => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'telefono_fijo'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'telefono_celular' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'email_emergencia' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'cargo'            => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'password'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'salt'             => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'palabra_clave'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'activo'           => new sfValidatorBoolean(array('required' => false)),
      'tipo'             => new sfValidatorInteger(array('required' => false)),
      'creado'           => new sfValidatorDateTime(),
      'actualizado'      => new sfValidatorDateTime(),
      'comusu_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'comite', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'usuario', 'column' => array('nombre_usuario')))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'usuario';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['comusu_list']))
    {
      $this->setDefault('comusu_list', $this->object->Comusu->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveComusuList($con);

    parent::doSave($con);
  }

  public function saveComusuList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['comusu_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Comusu->getPrimaryKeys();
    $values = $this->getValue('comusu_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Comusu', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Comusu', array_values($link));
    }
  }

}
