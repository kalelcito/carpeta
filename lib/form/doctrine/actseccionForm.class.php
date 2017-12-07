<?php

/**
 * programa_seccion form.
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class actseccionForm extends Baseprograma_seccionForm
{
  public function configure()
  {
      $this->DisableLocalCSRFProtection();

      $this->setWidgets(array(
          'id_ps'                => new sfWidgetFormInputHidden(),
          'id_programa'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('programa'), 'add_empty' => false)),
          'id_seccion'           => new sfWidgetFormInputText(),
          'id_usuario_creo'      => new sfWidgetFormInputText(),
          'text_content'         => new sfWidgetFormTextarea(),
          'comentario_consultor' => new sfWidgetFormTextarea(),
          'revision'             => new sfWidgetFormInputText(),
          'activo'               => new sfWidgetFormInputText(),
          'creado'               => new sfWidgetFormDateTime(),
          'actualizado'          => new sfWidgetFormDateTime(),
      ));

      $this->setValidators(array(
          'id_ps'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_ps', 'required' => false)),
          'id_programa'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('programa'))),
          'id_seccion'           => new sfValidatorInteger(),
          'id_usuario_creo'      => new sfValidatorInteger(array('required' => false)),
          'text_content'         => new sfValidatorString(array('required' => false)),
          'comentario_consultor' => new sfValidatorString(array('required' => false)),
          'revision'             => new sfValidatorInteger(array('required' => false)),
          'activo'               => new sfValidatorInteger(array('required' => false)),
          'creado'               => new sfValidatorDateTime(),
          'actualizado'          => new sfValidatorDateTime(),
      ));

      $this->widgetSchema->setNameFormat('programa_seccion[%s]');

      unset($this['id_seccion'],$this['id_usuario_creo'],$this['comentario_consultor'],$this['revision'], $this['no_revision'],$this['activo'],$this['creado'],$this['actualizado']);

  }
}
