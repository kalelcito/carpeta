<?php

/**
 * empresa form.
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class empresaForm extends BaseempresaForm
{
  public function configure()
  {
      $this->setWidgets(array(
          'id_empresa'         => new sfWidgetFormInputHidden(),
          'nombre_empresa'     => new sfWidgetFormInputText(),
          'logo'          => new sfWidgetFormInputFileEditable(array(
              'label'     => 'Imagen',
              'file_src'  => sfContext::getInstance()->getUser()->dominio().'uploads/imagenes/'.$this->getObject()->getLogo(),
              'is_image'  => true,
              'edit_mode' => !$this->isNew(),
              'delete_label' =>'Borrar imagen',
              'template'  => '<div class="col-sm-12 imgpreview">%file%<br />%input%<p>%delete% %delete_label%</p></div>',
          )),
          'nombre_contacto'    => new sfWidgetFormInputText(),
          'email'              => new sfWidgetFormInputText(),
          'telefono'           => new sfWidgetFormInputText(array('label'=>'Teléfono')),
          'activar_sucursales' => new sfWidgetFormInputCheckbox(),
          'tipo'               => new sfWidgetFormInputCheckbox(array('label'=>'Empresa activa')),
          'pais'               => new sfWidgetFormInputText(array('label'=>'País')),
          'estado'             => new sfWidgetFormInputText(),
          'ciudad'             => new sfWidgetFormInputText(),
          'municipio'          => new sfWidgetFormInputText(),
          'numero'             => new sfWidgetFormInputText(array('label'=>'Número')),
          'direccion'          => new sfWidgetFormTextarea(array('label'=>'Dirección')),
          'delegacion'         => new sfWidgetFormInputText(array('label'=>'Delegación')),
          'cp'                 => new sfWidgetFormInputText(array('label'=>'Código Postal')),
          'referencia'         => new sfWidgetFormTextarea(),
          'creado'             => new sfWidgetFormDateTime(),
          'actualizado'        => new sfWidgetFormDateTime(),
      ));
      $this->widgetSchema->setHelp('nombre_empresa', 'Nombre de la empresa');

      $this->setValidators(array(
          'id_empresa'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
          'nombre_empresa'     => new sfValidatorString(array('max_length' => 250, 'required' => false)),
          'logo'           => new sfValidatorFile(array('required' => false, 'mime_types' => array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif'), 'path' => sfConfig::get('sf_upload_dir').'/imagenes'),array(
              'required'   => 'El archivo es obligatorio',
              'max_size'=> 'El archivo excede el tamaño máximo (Máximo %max_size% bytes)',
              'mime_types'=> 'El tipo de archivo no es válido. Los tipos de archivos permitidos son: jpg, png, gif'
          )),
          'logo_delete' => new sfValidatorPass(),

          'nombre_contacto'    => new sfValidatorString(array('max_length' => 240, 'required' => false)),
          'email'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
          'telefono'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
          'activar_sucursales' => new sfValidatorBoolean(array('required' => false)),
          'tipo'               => new sfValidatorBoolean(array('required' => false)),
          'pais'               => new sfValidatorString(array('max_length' => 64, 'required' => false)),
          'estado'             => new sfValidatorString(array('max_length' => 64, 'required' => false)),
          'ciudad'             => new sfValidatorString(array('max_length' => 128, 'required' => false)),
          'municipio'          => new sfValidatorString(array('max_length' => 128, 'required' => false)),
          'numero'             => new sfValidatorString(array('max_length' => 11, 'required' => false)),
          'direccion'          => new sfValidatorString(array('required' => false)),
          'delegacion'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
          'cp'                 => new sfValidatorString(array('max_length' => 11, 'required' => false)),
          'referencia'         => new sfValidatorString(array('required' => false)),
          'creado'             => new sfValidatorDateTime(),
          'actualizado'        => new sfValidatorDateTime(),
      ));

      $this->widgetSchema->setNameFormat('empresa[%s]');
      unset($this['creado'],$this['actualizado']);
  }
}
