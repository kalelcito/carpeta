<?php

/**
 * comite form base class.
 *
 * @method comite getObject() Returns the current form's model object
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasecomiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_comite'             => new sfWidgetFormInputHidden(),
      'id_unidad'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('unidad'), 'add_empty' => true)),
      'nombre_comite'         => new sfWidgetFormInputText(),
      'id_usuario_presidente' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
      'creado'                => new sfWidgetFormDateTime(),
      'actualizado'           => new sfWidgetFormDateTime(),
      'calificacion'          => new sfWidgetFormInputText(),
      'minimos'               => new sfWidgetFormInputCheckbox(),
      'usucom_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'usuario')),
    ));

    $this->setValidators(array(
      'id_comite'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_comite', 'required' => false)),
      'id_unidad'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('unidad'), 'required' => false)),
      'nombre_comite'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'id_usuario_presidente' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'required' => false)),
      'creado'                => new sfValidatorDateTime(),
      'actualizado'           => new sfValidatorDateTime(),
      'calificacion'          => new sfValidatorNumber(array('required' => false)),
      'minimos'               => new sfValidatorBoolean(array('required' => false)),
      'usucom_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'usuario', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'comite';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['usucom_list']))
    {
      $this->setDefault('usucom_list', $this->object->Usucom->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveUsucomList($con);

    parent::doSave($con);
  }

  public function saveUsucomList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['usucom_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Usucom->getPrimaryKeys();
    $values = $this->getValue('usucom_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Usucom', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Usucom', array_values($link));
    }
  }

}
