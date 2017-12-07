<?php

/**
 * programa form.
 *
 * @package    carpetavirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class programausuarioForm extends BaseprogramaForm
{
  public function configure()
  {
      unset($this['calificacion'],$this['fecha_elaboracion'],$this['fecha_revision'],$this['id_usuario_elaboro'],$this['id_consultor'], $this['no_revision'],$this['id_usuario_reviso'],$this['id_usuario_modifico'],$this['fecha_modifico'],$this['creado'],$this['actualizado']);

  }
}
