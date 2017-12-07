<?php

/**
 * usuario form.
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioForm extends BaseusuarioForm
{
  public function configure()
  {
      if(Privilegios::superadmin(sfContext::getInstance()->getUser()->getRol()) || sfContext::getInstance()->getUser()->getNombre()=='Usuario'){
          $queryprivilegios = Doctrine_Core::getTable('usuario_grupo')
              ->createQuery('c');
          $queryempresa = Doctrine_Core::getTable('empresa')
              ->createQuery('c');
          $queryunidad = Doctrine_Core::getTable('unidad')
              ->createQuery('c');
          $querycomite = Doctrine_Core::getTable('comite')
              ->createQuery('c')->orderby('c.nombre_comite');

      }else{
          if(Privilegios::consultor(sfContext::getInstance()->getUser()->getRol())){
              $queryprivilegios = Doctrine_Core::getTable('usuario_grupo')
                  ->createQuery('c')
                  ->Where('c.id_grupo > ?', 2);

              $queryempresa = Doctrine::getTable('empresa')
                  ->createQuery('a')
                  ->innerJoin('a.unidad u')
                  ->where('u.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario());

              $queryunidad =  $this->unidads = Doctrine::getTable('unidad')
                  ->createQuery('a')
                  ->where('a.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario() );

              $querycomite = Doctrine_Core::getTable('comite')
                  ->createQuery('a')
                  ->innerJoin('a.unidad f')
                  ->where('f.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario())
                  ->orderby('a.nombre_comite ASC');
          }else{
              $queryprivilegios = Doctrine_Core::getTable('usuario_grupo')
                  ->createQuery('c')
                  ->Where('c.id_grupo > ?', 2);
              $queryempresa = Doctrine_Core::getTable('empresa')
                  ->createQuery('c')
                  ->Where('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa());
              $queryunidad = Doctrine_Core::getTable('unidad')
                  ->createQuery('c')
                  ->Where('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa());
              $querycomite = Doctrine_Core::getTable('comite')
                  ->createQuery('a')
                  ->innerJoin('a.unidad f')
                  ->innerJoin('f.usuario u')
                  ->where('f.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa())
                  ->andwhere('u.id_comite = a.id_comite')
                  ->orderby('a.nombre_comite ASC');
          }

      }

      $this->setWidgets(array(
          'id_usuario'       => new sfWidgetFormInputHidden(),
          'id_empresa'       => new sfWidgetFormDoctrineChoice(array('label'=>'Empresa', 'model' => $this->getRelatedModelName('empresa'), 'query'=>$queryempresa, 'add_empty' => true)),
          'id_grupo'         => new sfWidgetFormDoctrineChoice(array('label'=>'Privilegios','model' => $this->getRelatedModelName('usuario_grupo'),'query'=>$queryprivilegios,  'add_empty' => true)),
          'id_unidad'        => new sfWidgetFormDoctrineChoice(array('label'=>'Sucursal','model' => $this->getRelatedModelName('Unidad'), 'query'=>$queryunidad,  'add_empty' => true)),
          'id_comite'        => new sfWidgetFormDoctrineChoice(array('label'=>'Comité','model' => $this->getRelatedModelName('Unidad'), 'query'=>$querycomite,  'add_empty' => true)),
          'foto'          => new sfWidgetFormInputFileEditable(array(
              'label'     => 'Foto',
              'file_src'  => sfContext::getInstance()->getUser()->dominio().'uploads/imagenes/'.$this->getObject()->getFoto(),
              'is_image'  => true,
              'edit_mode' => !$this->isNew(),
              'delete_label' =>'Borrar imagen',
              'template'  => '<div class="col-sm-12 imgpreview">%file%<br />%input%<p>%delete% %delete_label%</p></div>',
          )),
          'nombre'           => new sfWidgetFormInputText(array('label'=>'Nombre(s)')),
          'nombre_usuario'   => new sfWidgetFormInputText(array('label'=>'Nombre de Usuario')),
          'primer_apellido'  => new sfWidgetFormInputText(array('label'=>'Primer Apellido')),
          'segundo_apellido' => new sfWidgetFormInputText(array('label'=>'Segundo Apellido')),
          'email'            => new sfWidgetFormInputText(array('label'=>'Correo Electrónico')),
          'telefono_fijo'    => new sfWidgetFormInputText(array('label'=>'Tel. Fijo')),
          'telefono_celular' => new sfWidgetFormInputText(array('label'=>'Tel. Celular')),
          'email_emergencia' => new sfWidgetFormInputText(array('label'=>'Email Emergencia')),
          'cargo'            => new sfWidgetFormInputText(array('label'=>'Cargo')),
          'password'         => new sfWidgetFormInputText(array('label'=>'Contraseña')),
          'salt'             => new sfWidgetFormInputText(),
          'palabra_clave'    => new sfWidgetFormInputText(array('label'=>'Palabra clave')),
          //'comusu_list'      => new sfWidgetFormDoctrineChoice(array('label'=>'Comites', 'multiple' => true,'query'=>$querycomite, 'expanded'=>false,  'model' => 'comite')),
          'activo'           => new sfWidgetFormInputCheckbox(),
          'tipo'             => new sfWidgetFormInputText(),
          'creado'           => new sfWidgetFormDateTime(),
          'actualizado'      => new sfWidgetFormDateTime(),
      ));

      unset($this['tipo']);

      $this->widgetSchema->setNameFormat('usuario[%s]');


      $this->setValidators(array(
          'id_usuario'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_usuario', 'required' => false)),
          'id_empresa'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('empresa'), 'required' => false)),
          'id_grupo'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuario_grupo'), 'required' => true)),
          'id_unidad'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Unidad'), 'required' => false)),
          'id_comite'        => new sfValidatorInteger(array('required' => false)),
          'foto'           => new sfValidatorFile(array('required' => false, 'mime_types' => array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif'), 'path' => sfConfig::get('sf_upload_dir').'/imagenes'),array(
              'required'   => 'El archivo es obligatorio',
              'max_size'=> 'El archivo excede el tamaño máximo (Máximo %max_size% bytes)',
              'mime_types'=> 'El tipo de archivo no es válido. Los tipos de archivos permitidos son: jpg, png, gif'
          )),
          'foto_delete' => new sfValidatorPass(),
          'nombre'           => new sfValidatorString(array('max_length' => 128, 'required' => true)),
          'nombre_usuario'   => new sfValidatorString(array('max_length' => 64, 'required' => true)),
          'primer_apellido'  => new sfValidatorString(array('max_length' => 64, 'required' => true)),
          'segundo_apellido' => new sfValidatorString(array('max_length' => 64, 'required' => true)),
          'email'            => new sfValidatorString(array('max_length' => 250, 'required' => false)),
          'telefono_fijo'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
          'telefono_celular' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
          'email_emergencia' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
          'cargo'            => new sfValidatorString(array('max_length' => 64, 'required' => false)),
          'password'         => new sfValidatorString(array('max_length' => 64, 'required' => true)),
          'salt'             => new sfValidatorString(array('max_length' => 64, 'required' => false)),
          'palabra_clave'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
          'activo'           => new sfValidatorBoolean(array('required' => false)),
          'tipo'             => new sfValidatorInteger(array('required' => false)),
          'creado'           => new sfValidatorDateTime(array('required' => false)),
          'actualizado'      => new sfValidatorDateTime(array('required' => false)),
          //'comusu_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'comite', 'required' => false)),
      ));

//
      unset($this['creado'],$this['actualizado'],$this['salt'],$this['clave']);

      $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
          new sfValidatorDoctrineUnique(array('model' => 'Usuario', 'column' => array('nombre_usuario')), array('invalid'=> "Este usuario ya está en uso"))
      )));

  }
}
