<?php

/**
 * usuario filter form base class.
 *
 * @package    carpetavirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseusuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('empresa'), 'add_empty' => true)),
      'id_grupo'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('usuario_grupo'), 'add_empty' => true)),
      'id_unidad'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unidad'), 'add_empty' => true)),
      'id_comite'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comiteusr'), 'add_empty' => true)),
      'foto'             => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(),
      'nombre_usuario'   => new sfWidgetFormFilterInput(),
      'primer_apellido'  => new sfWidgetFormFilterInput(),
      'segundo_apellido' => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(),
      'telefono_fijo'    => new sfWidgetFormFilterInput(),
      'telefono_celular' => new sfWidgetFormFilterInput(),
      'email_emergencia' => new sfWidgetFormFilterInput(),
      'cargo'            => new sfWidgetFormFilterInput(),
      'password'         => new sfWidgetFormFilterInput(),
      'salt'             => new sfWidgetFormFilterInput(),
      'palabra_clave'    => new sfWidgetFormFilterInput(),
      'activo'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo'             => new sfWidgetFormFilterInput(),
      'creado'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'actualizado'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'comusu_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'comite')),
    ));

    $this->setValidators(array(
      'id_empresa'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('empresa'), 'column' => 'id_empresa')),
      'id_grupo'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('usuario_grupo'), 'column' => 'id_grupo')),
      'id_unidad'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unidad'), 'column' => 'id_unidad')),
      'id_comite'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Comiteusr'), 'column' => 'id_comite')),
      'foto'             => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'nombre_usuario'   => new sfValidatorPass(array('required' => false)),
      'primer_apellido'  => new sfValidatorPass(array('required' => false)),
      'segundo_apellido' => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'telefono_fijo'    => new sfValidatorPass(array('required' => false)),
      'telefono_celular' => new sfValidatorPass(array('required' => false)),
      'email_emergencia' => new sfValidatorPass(array('required' => false)),
      'cargo'            => new sfValidatorPass(array('required' => false)),
      'password'         => new sfValidatorPass(array('required' => false)),
      'salt'             => new sfValidatorPass(array('required' => false)),
      'palabra_clave'    => new sfValidatorPass(array('required' => false)),
      'activo'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'creado'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'actualizado'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'comusu_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'comite', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addComusuListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query->leftJoin('r.comite_usuarios comite_usuarios')
          ->andWhereIn('comite_usuarios.id_comite', $values);
  }

  public function getModelName()
  {
    return 'usuario';
  }

  public function getFields()
  {
    return array(
      'id_usuario'       => 'Number',
      'id_empresa'       => 'ForeignKey',
      'id_grupo'         => 'ForeignKey',
      'id_unidad'        => 'ForeignKey',
      'id_comite'        => 'ForeignKey',
      'foto'             => 'Text',
      'nombre'           => 'Text',
      'nombre_usuario'   => 'Text',
      'primer_apellido'  => 'Text',
      'segundo_apellido' => 'Text',
      'email'            => 'Text',
      'telefono_fijo'    => 'Text',
      'telefono_celular' => 'Text',
      'email_emergencia' => 'Text',
      'cargo'            => 'Text',
      'password'         => 'Text',
      'salt'             => 'Text',
      'palabra_clave'    => 'Text',
      'activo'           => 'Boolean',
      'tipo'             => 'Number',
      'creado'           => 'Date',
      'actualizado'      => 'Date',
      'comusu_list'      => 'ManyKey',
    );
  }
}
