<?php

/**
 * unidad form.
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class unidadForm extends BaseunidadForm
{
  public function configure()
  {
      if(Privilegios::superadmin(sfContext::getInstance()->getUser()->getRol()) || sfContext::getInstance()->getUser()->getNombre()=='Usuario'){

          $queryusrc = Doctrine_Core::getTable('usuario')
              ->createQuery('c')->where('c.id_grupo = ?', 2)->AndWhere('c.activo = ?',1)->orderby('c.nombre ASC');
          $queryusrg = Doctrine_Core::getTable('usuario')
              ->createQuery('c')->where('c.id_grupo = ?', 3)->AndWhere('c.activo = ?',1)->orderby('c.nombre ASC');
          $queryusrsd = Doctrine_Core::getTable('usuario')
              ->createQuery('c')->where('c.id_grupo = ?', 8)->AndWhere('c.activo = ?',1)->orderby('c.nombre ASC');
          $queryusrdg = Doctrine_Core::getTable('usuario')
              ->createQuery('c')->where('c.id_grupo = ?', 7)->AndWhere('c.activo = ?',1)->orderby('c.nombre ASC');
          $queryempresa = Doctrine_Core::getTable('empresa')
              ->createQuery('c');
      }else{
          if(Privilegios::consultor(sfContext::getInstance()->getUser()->getRol())){
              $queryusrc = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')->innerJoin('c.empresa e')->innerJoin('e.unidad u')->where('c.id_grupo = ?', 2)->AndWhere('c.activo = ?',1)->AndWhere('u.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario())->orderby('c.nombre ASC');
              $queryusrg = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')->innerJoin('c.empresa e')->innerJoin('e.unidad u')->where('c.id_grupo = ?', 2)->AndWhere('c.activo = ?',1)->AndWhere('u.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario())->orderby('c.nombre ASC');
              $queryusrsd = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')->innerJoin('c.empresa e')->innerJoin('e.unidad u')->where('c.id_grupo = ?', 2)->AndWhere('c.activo = ?',1)->AndWhere('u.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario())->orderby('c.nombre ASC');
              $queryusrdg = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')->innerJoin('c.empresa e')->innerJoin('e.unidad u')->where('c.id_grupo = ?', 2)->AndWhere('c.activo = ?',1)->AndWhere('u.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario())->orderby('c.nombre ASC');
              $queryempresa = Doctrine_Core::getTable('empresa')
                  ->createQuery('c')->innerJoin('c.unidad u')->where('c.id_grupo = ?', 2)->AndWhere('u.id_consultor = ?', sfContext::getInstance()->getUser()->getIdusuario())->orderby('c.nombre ASC');


          }else{
              $queryusrc = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')->where('c.id_grupo = ?', 2)->AndWhere('c.activo = ?',1)->AndWhere('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa())->orderby('c.nombre ASC');
              $queryusrg = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')->where('c.id_grupo = ?', 3)->AndWhere('c.activo = ?',1)->AndWhere('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa())->orderby('c.nombre ASC');
              $queryusrsd = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')->where('c.id_grupo = ?', 8)->AndWhere('c.activo = ?',1)->AndWhere('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa())->orderby('c.nombre ASC');
              $queryusrdg = Doctrine_Core::getTable('usuario')
                  ->createQuery('c')->where('c.id_grupo = ?', 7)->AndWhere('c.activo = ?',1)->AndWhere('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa())->orderby('c.nombre ASC');
              $queryempresa = Doctrine_Core::getTable('empresa')
                  ->createQuery('c')
                  ->Where('c.id_empresa = ?', sfContext::getInstance()->getUser()->getIdempresa());
          }
      }

      $this->setWidgets(array(
          'id_unidad'           => new sfWidgetFormInputHidden(),
          'id_empresa'          => new sfWidgetFormDoctrineChoice(array('label'=>'Empresa', 'model' => $this->getRelatedModelName('empresa'), 'query'=>$queryempresa,'add_empty' => true)),
          //'id_usuario'          => new sfWidgetFormDoctrineChoice(array('label'=>'Usuario', 'model' => $this->getRelatedModelName('usuario'),'query'=>$queryusr, 'add_empty' => false)),
          'id_usuario'        => new sfWidgetFormInputHidden(array(),array('value' => sfContext::getInstance()->getUser()->getIdusuario())),
          'id_consultor'        => new sfWidgetFormDoctrineChoice(array('label'=>'Consultor', 'model' => $this->getRelatedModelName('usuarioConsultor'), 'query'=>$queryusrc,'add_empty' => true)),
          'id_gerente'          => new sfWidgetFormDoctrineChoice(array('label'=>'Gerente', 'model' => $this->getRelatedModelName('UsuarioGte'),'query'=>$queryusrg, 'add_empty' => true)),
          'id_subdirector'      => new sfWidgetFormDoctrineChoice(array('label'=>'Subdirector', 'model' => $this->getRelatedModelName('UsuarioSubd'), 'query'=>$queryusrsd,'add_empty' => true)),
          'id_director_general' => new sfWidgetFormDoctrineChoice(array('label'=>'Director General', 'model' => $this->getRelatedModelName('UsuarioDirg'),'query'=>$queryusrdg, 'add_empty' => true)),
          'logo'          => new sfWidgetFormInputFileEditable(array(
              'label'     => 'Imagen',
              'file_src'  => sfContext::getInstance()->getUser()->dominio().'uploads/imagenes/'.$this->getObject()->getLogo(),
              'is_image'  => true,
              'edit_mode' => !$this->isNew(),
              'delete_label' =>'Borrar imagen',
              'template'  => '<div class="col-sm-12 imgpreview">%file%<br />%input%<p>%delete% %delete_label%</p></div>',
          )),
          'id_region'           => new sfWidgetFormDoctrineChoice(array('label'=>'Región', 'model' => $this->getRelatedModelName('Region'), 'add_empty' => true)),
          'nombre'              => new sfWidgetFormInputText(array('label'=>'Nombre de la sucursal')),
          'sucursal'            => new sfWidgetFormInputText(array('label'=>'No. de sucursal')),
          'nombre_contacto'     => new sfWidgetFormInputText(array('label'=>'Contacto Prinicipal')),
          'email'               => new sfWidgetFormInputText(array('label'=>'E-mail contacto principal')),
          'telefono'            => new sfWidgetFormInputText(array('label'=>'Teléfono')),
          'pais'                => new sfWidgetFormInputText(array('label'=>'País')),
          'estado'              => new sfWidgetFormInputText(),
          'ciudad'              => new sfWidgetFormInputText(),
          'municipio'           => new sfWidgetFormInputText(),
          'direccion'           => new sfWidgetFormTextarea(array('label'=>'Dirección')),
          'numero'              => new sfWidgetFormInputText(array('label'=>'Número')),
          'delegacion'          => new sfWidgetFormInputText(array('label'=>'Delegación')),
          'cp'                  => new sfWidgetFormInputText(array('label'=>'Código Postal')),
          'referencia'          => new sfWidgetFormTextarea(array('label'=>'Referencia adicional')),
          'creado'              => new sfWidgetFormDateTime(),
          'actualizado'         => new sfWidgetFormDateTime(),
      ));

      $this->setValidators(array(
          'id_unidad'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_unidad', 'required' => false)),
          'id_empresa'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('empresa'))),
          'id_usuario'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuario'),'required'=>false)),
          'id_consultor'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('usuarioConsultor'), 'required' => false)),
          'id_gerente'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioGte'), 'required' => false)),
          'id_subdirector'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioSubd'), 'required' => false)),
          'id_director_general' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsuarioDirg'), 'required' => false)),
          'logo'           => new sfValidatorFile(array('required' => false, 'mime_types' => array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif'), 'path' => sfConfig::get('sf_upload_dir').'/imagenes'),array(
              'required'   => 'El archivo es obligatorio',
              'max_size'=> 'El archivo excede el tamaño máximo (Máximo %max_size% bytes)',
              'mime_types'=> 'El tipo de archivo no es válido. Los tipos de archivos permitidos son: jpg, png, gif'
          )),
          'logo_delete' => new sfValidatorPass(),
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
      unset($this['creado'],$this['actualizado']);
  }
}
