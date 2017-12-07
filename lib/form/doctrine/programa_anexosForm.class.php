<?php

/**
 * programa_anexos form.
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class programa_anexosForm extends Baseprograma_anexosForm
{
  public function configure()
  {
    $this->setWidgets(array(
        'id_anexo'     => new sfWidgetFormInputHidden(),
        'id_programa'  => new sfWidgetFormInputText(),
        'url'          => new sfWidgetFormInputFileEditable(array(
            'label'     => 'Archivo ppt, doc, pdf, xls e imágenes',
            'file_src'  => sfContext::getInstance()->getUser()->dominio().'uploads/docs/'.$this->getObject()->getUrl(),
            'is_image'  => false,
            'edit_mode' => !$this->isNew(),
            'delete_label' =>'Borrar archivo',
            'template'  => '<div class="col-sm-3 imgpreview"><span style="display: none;">%file%</span><br />%input%<p>%delete% %delete_label%</p></div>'
        )),
        'comentarios'  => new sfWidgetFormTextarea(),
        'nombre'  => new sfWidgetFormInputText(),

    ));

    unset($this['tipo_archivo']);

    $this->setValidators(array(
        'id_anexo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_anexo', 'required' => false)),
        //'id_programa'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_programa', 'required' => true)),
        'id_programa'     => new sfValidatorInteger(array('required' => true)),
        'url'          => new sfValidatorFile(array('required' => true,
            'mime_types' => array('application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'application/octet-stream',
                'image/jpeg',
                'image/pjpeg',
                'image/png',
                'image/x-png',
                'image/gif',
                'application/vnd.ms-excel',
                'application/msword',
                'application/zip',
                'text/zip',
                'application/xml',
                'text/xml',
                'application/pdf',
                'application/x-pdf',
                'application/vnd.ms-powerpoint',
                'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
                'application/x-troff-msvideo',
                'video/avi',
                'video/msvideo',
                'video/x-msvideo',
                'audio/mpeg3',
                'audio/x-mpeg-3',
                'video/mpeg',
                'video/x-mpeg',
                'audio/wav',
                'audio/x-wav',
                'audio/aac',
                'audio/midi',
                'audio/mpeg',
                'audio/mp3',
                'audio/x-mp3',
                'audio/x-mpegaudio',
                'audio/x-mpg',
                'audio/x-mpeg',
                'audio/mpg',
                'audio/x-mpeg3',
                'video/3gpp',
                'video/mp4',
                'video/webm',
                "video/x-matroska",
                'audio/x-ms-wma',
                'application/octetstream'
                ),
            'path' => sfConfig::get('sf_upload_dir').'/docs/')
            ,array('required'   => 'El archivo es obligatorio',
            'max_size'=> 'El archivo excede el tamaño máximo (Máximo %max_size% bytes)',
            'mime_types'=> 'El tipo de archivo no es válido. Los tipos de archivos permitidos son: ppt, pdf, doc, docx, xls, xlsx, zip, imágenes, audio y video'
        )),
        'tipo_archivo' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
        'comentarios'  => new sfValidatorString(array('required' => false)),
        'nombre'  => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('programa_anexos[%s]');
  }
}
