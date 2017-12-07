<?php

/**
 * comite form.
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comiteForm extends BasecomiteForm
{
  public function configure()
  {
      if(Privilegios::superadmin(sfContext::getInstance()->getUser()->getRol())){
          $queryusr = Doctrine_Core::getTable('usuario')
              ->createQuery('c')
          ->Where('c.id_grupo =?',4)->orderby('c.nombre ASC');

          $queryunidad = Doctrine_Core::getTable('unidad')
              ->createQuery('c')->orderby('c.nombre ASC');

      }else{
          if(Privilegios::consultor(sfContext::getInstance()->getUser()->getRol())){
              $queryunidad = Doctrine::getTable('unidad')
                  ->createQuery('a')
                  ->where('a.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario())->orderby('a.nombre ASC');;

              /*$this->comites = Doctrine::getTable('comite')
                  ->createQuery('a')
                  ->innerJoin('a.unidad f')
                  ->where('f.id_consultor = ?', $this->getUser()->getIdusuario())
                  ->execute();
              */

              $queryusr = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')
                  ->andWhere('c.id_grupo =?',4)
                  ->orderby('c.nombre ASC');


          }else{
              $queryusr = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')
                  ->Where('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa())
                  ->andWhere('c.id_grupo =?',4)
                  ->orderby('c.nombre ASC');

              $queryunidad = Doctrine_Core::getTable('unidad')
                  ->createQuery('c')
                  ->Where('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa())->orderby('c.nombre ASC');
          }
      }

      $this->setWidgets(array(
          'id_comite'             => new sfWidgetFormInputHidden(),
          'id_unidad'             => new sfWidgetFormDoctrineChoice(array('label'=>'Sucursal', 'model' => $this->getRelatedModelName('unidad'),  'query'=>$queryunidad,'add_empty' => true)),
          'nombre_comite'         => new sfWidgetFormInputText(array( 'label' =>'Nombre del Comité')),
          'id_usuario_presidente' => new sfWidgetFormDoctrineChoice(array( 'label' =>'Administrador del Comité','model' => $this->getRelatedModelName('Usuario'), 'query'=>$queryusr,'add_empty' => true)),
          'creado'                => new sfWidgetFormDateTime(),
          'actualizado'           => new sfWidgetFormDateTime(),
          'calificacion'          => new sfWidgetFormInputText(),
          'minimos'              => new sfWidgetFormInputCheckbox(),
          //'creado'                => new sfWidgetFormDateTime(),
      ));

      $this->setValidators(array(
          'id_comite'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_comite', 'required' => false)),
          'id_unidad'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('unidad'), 'required' => true)),
          'nombre_comite'         => new sfValidatorString(array('max_length' => 128, 'required' => true)),
          'id_usuario_presidente' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'required' => false)),
          'creado'                => new sfValidatorDateTime(),
          'actualizado'           => new sfValidatorDateTime(),
          'calificacion'          => new sfValidatorNumber(array('required' => false)),
          'minimos'               => new sfValidatorBoolean(array('required' => false)),
          //'creado'                => new sfValidatorDateTime(),
      ));

      $this->widgetSchema->setNameFormat('comite[%s]');
      unset($this['creado'],$this['actualizado'],$this['calificacion'],$this['minimos']);
  }
}
