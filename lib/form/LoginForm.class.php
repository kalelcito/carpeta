<?php

/**
 * Base project form.
 *
 * @package    encuentro
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class LoginForm extends sfFormSymfony
{
    public function configure()
    {
        $this->setWidgets(array(
            'email' => new sfWidgetFormInput(array('label' => 'Nombre de usuario'), array('size' => 40, 'maxsize' => 100)),
            'pass' => new sfWidgetFormInputPassword(array('label' => 'Contraseña', 'always_render_empty' => false), array('size' => 40, 'maxsize' => 45, 'type' => 'password')),
        ));

        $this->widgetSchema->setNameFormat('login[%s]');

        $this->setValidators(array(
            'pass' => new sfValidatorString(array('max_length' => 100, 'required' => true), array(
                'required' => 'Ingresa tu contraseña',
                'invalid' => 'Ingresa tu contraseña'
            )),
            'email' => new sfValidatorString(array('max_length' => 100, 'required' => true), array(
                'required' => 'Ingresa tu nombre de usuario',
                'invalid' => 'El nombre de usuario ingresado no es válido'
            ))
        ));
    }
}