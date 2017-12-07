<?php

/**
 * programa form.
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class programaForm extends BaseprogramaForm
{
  public function configure()
  {

      $idcomite = sfContext::getInstance()->getRequest()->getParameter('id_comite',0);
      $idreqisito = sfContext::getInstance()->getRequest()->getParameter('id_requisito',0);

      $querycomite = Doctrine_Core::getTable('comite')
          ->createQuery('c')
          ->Where('c.id_comite = ?', $idcomite);
      $queryrequisito = Doctrine_Core::getTable('requisito')
          ->createQuery('c')
          ->Where('c.id_requisito = ?', $idreqisito);

      $this->setWidgets(array(
          'id_programa'         => new sfWidgetFormInputHidden(),
          'id_requisito'        => new sfWidgetFormDoctrineChoice(array('label'=>'Requisito', 'model' => $this->getRelatedModelName('requisito'),'query'=>$queryrequisito, 'add_empty' => false)),
          'id_comite'           => new sfWidgetFormDoctrineChoice(array('label'=>'Comite','model' => $this->getRelatedModelName('comite'), 'query'=>$querycomite,'add_empty' => false)),
          'nombre'              => new sfWidgetFormInputText(array('label'=>'Nombre del programa')),
          'coordinador'         => new sfWidgetFormInputText(array('label'=>'Nombre del coordinador')),
          'existencia'          => new sfWidgetFormInputText(),
          'difusion'            => new sfWidgetFormInputText(),
          'participacion'       => new sfWidgetFormInputText(),
          'mejora'              => new sfWidgetFormInputText(),
          'vinculacion'         => new sfWidgetFormInputText(),
          'calificacion'        => new sfWidgetFormInputText(),
          'fecha_elaboracion'   => new sfWidgetFormDate(),
          'revisor1'            => new sfWidgetFormInputText(),
          'fecha_revision'      => new sfWidgetFormDate(),
          'revisor2'            => new sfWidgetFormInputText(),
          'fecha_revision2'     => new sfWidgetFormDate(),
          'revisor3'            => new sfWidgetFormInputText(),
          'fecha_revision3'     => new sfWidgetFormDate(),
          'revisor4'            => new sfWidgetFormInputText(),
          'fecha_revision4'     => new sfWidgetFormDate(),
          'revisor5'            => new sfWidgetFormInputText(),
          'fecha_revision5'     => new sfWidgetFormDate(),
          'id_usuario_elaboro'  => new sfWidgetFormInputText(),
          'id_consultor'        => new sfWidgetFormInputText(),
          'fecha_compromiso'    => new sfWidgetFormDate(),
          'no_revision'         => new sfWidgetFormInputText(),
          'id_usuario_reviso'   => new sfWidgetFormInputText(),
          'id_usuario_modifico' => new sfWidgetFormInputText(),
          'fecha_modifico'      => new sfWidgetFormDate(),
          'creado'              => new sfWidgetFormDateTime(),
          'actualizado'         => new sfWidgetFormDateTime(),
          'comentario'          => new sfWidgetFormInputText(),
      ));

      $this->setValidators(array(
          'id_programa'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_programa', 'required' => false)),
          'id_requisito'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('requisito'), 'required' => true)),
          'id_comite'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('comite'), 'required' => true)),
          'nombre'              => new sfValidatorString(array('max_length' => 128, 'required' => true)),
          'coordinador'         => new sfValidatorString(array('max_length' => 150, 'required' => true)),
          'existencia'          => new sfValidatorNumber(array('required' => false)),
          'difusion'            => new sfValidatorNumber(array('required' => false)),
          'participacion'       => new sfValidatorNumber(array('required' => false)),
          'mejora'              => new sfValidatorNumber(array('required' => false)),
          'vinculacion'         => new sfValidatorNumber(array('required' => false)),
          'calificacion'        => new sfValidatorNumber(array('required' => false)),
          'fecha_elaboracion'   => new sfValidatorDate(array('required' => false)),
          'revisor1'            => new sfValidatorString(array('max_length' => 128, 'required' => true)),
          'fecha_revision'      => new sfValidatorDate(array('required' => false)),
          'revisor2'            => new sfValidatorString(array('max_length' => 128, 'required' => true)),
          'fecha_revision2'     => new sfValidatorDate(array('required' => false)),
          'revisor3'            => new sfValidatorString(array('max_length' => 128, 'required' => true)),
          'fecha_revision3'     => new sfValidatorDate(array('required' => false)),
          'revisor4'            => new sfValidatorString(array('max_length' => 128, 'required' => true)),
          'fecha_revision4'     => new sfValidatorDate(array('required' => false)),
          'revisor5'            => new sfValidatorString(array('max_length' => 128, 'required' => true)),
          'fecha_revision5'     => new sfValidatorDate(array('required' => false)),
          'id_usuario_elaboro'  => new sfValidatorInteger(array('required' => false)),
          'id_consultor'        => new sfValidatorInteger(array('required' => false)),
          'fecha_compromiso'    => new sfValidatorDate(array('required' => false)),
          'no_revision'         => new sfValidatorInteger(array('required' => false)),
          'id_usuario_reviso'   => new sfValidatorInteger(array('required' => false)),
          'id_usuario_modifico' => new sfValidatorInteger(array('required' => false)),
          'fecha_modifico'      => new sfValidatorDate(array('required' => false)),
          'creado'              => new sfValidatorDateTime(),
          'actualizado'         => new sfValidatorDateTime(),
          'comentario'          => new sfValidatorString(array('required' => true)),
      ));

      $this->widgetSchema->setNameFormat('programa[%s]');


      unset($this['existencia'],$this['difusion'],$this['participacion'],$this['mejora'],$this['vinculacion'],$this['calificacion'],$this['fecha_elaboracion'],$this['revisor1'],$this['fecha_revision'],$this['revisor2'],$this['fecha_revision2'],$this['revisor3'],$this['fecha_revision3'],$this['revisor4'],$this['fecha_revision4'],$this['revisor5'],$this['fecha_revision5'],$this['id_usuario_elaboro'],$this['id_consultor'], $this['no_revision'],$this['id_usuario_reviso'],$this['id_usuario_modifico'],$this['fecha_modifico'],$this['creado'],$this['actualizado'],$this['comentario']);

  }
}
