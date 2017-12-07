<?php

/**
 * login actions.
 *
 * @package    innnology
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        //$test='26d58f9272642877361bda31de13a83c';
        //echo hash('sha512', $test.trim('hola'.$test));
        $this->acceso = new LoginForm();
        if ($request->isMethod('POST')) {
            $this->acceso->bind($request->getParameter('login'));
            if ($this->acceso->isValid()) {
                $this->datos = $this->acceso->getValues();
                $usuario = Doctrine_Core::getTable('usuario')->findOneByNombre_usuario(trim($this->datos['email']));
                if ($usuario && trim($this->datos['pass']) == $usuario->getPassword()) {
                    if ($usuario->getActivo() == 1) {
                        $this->getUser()->setAuthenticated(true);
                        $this->getUser()->setNombre(trim($usuario->getNombre()) . " " . trim($usuario->getPrimerApellido() . " " . trim($usuario->getSegundoApellido())));
                        $this->getUser()->setEmpresa($usuario->getEmpresa()->getNombreEmpresa());
                        $this->getUser()->setIdempresa($usuario->getIdEmpresa());
                        $this->getUser()->setLogo($usuario->getEmpresa()->getLogo());
                        $this->getUser()->setFoto($usuario->getFoto());
                        $this->getUser()->setPuesto($usuario->getCargo());
                        $this->getUser()->setIdusuario($usuario->getIdUsuario());
                        $this->getUser()->setRol($usuario->getUsuarioGrupo()->getIdGrupo());
                        $this->redirect('inicio/index');
                    } else {
                        $this->getUser()->setFlash('error', 'La cuenta esta desactivada');
                    }
                } else {
                    $this->getUser()->setFlash('error', 'El nombre de usuario o la contraseña son incorrectas');
                }
            }
        }
        $this->setLayout('layout2');
    }

    public function executeRecuperar(sfWebRequest $request)
    {
        $this->acceso = new ResetpForm();
        if ($request->isMethod('POST')) {
            $this->acceso->bind($request->getParameter('resetp'));
            if ($this->acceso->isValid()) {
                $this->datos = $this->acceso->getValues();
                $usuario = Doctrine_Core::getTable('usuario')->findOneByEmail(trim($this->datos['email']));
                if ($usuario) {
                    $salt = md5(uniqid(rand(), true));
                    $usuario->setSalt($salt);
                    $pass = '';
                    for ($i = 0; $i < 10; $i++) {
                        $d = rand(1, 30) % 2;
                        $d ? $pass = $pass . chr(rand(65, 90)) : $pass = $pass . chr(rand(48, 57));
                    }
                    $usuario->setPassw(hash('sha512', $salt . $pass . $salt));
                    $usuario->save();
                    $message = $this->getMailer()->compose();
                    $message->setSubject('Recuperación de cuenta ' . $this->getUser()->dominiomail());
                    $message->setTo($this->datos['email']);
                    $message->setFrom('admin@' . $this->getUser()->dominiomail(), 'Administración sitio web');
                    $html = $this->getPartial('inicio/recuperar', array('pass' => $pass, 'nombre' => $usuario->getNombre() . " " . $usuario->getApellidos()));
                    $message->setBody($html, 'text/html');
                    //$this->getMailer()->send($message);
                    $this->getUser()->setFlash('success', 'Se ha enviado la contraseña a su cuenta de correo electrónico ' . $pass);
                    $this->redirect('login/index');
                }
            } else {
                $this->getUser()->setFlash('error', 'La dirección de correo electrónico es incorrecta');
            }
        }
        $this->setLayout(false);
    }

    public function executeSalir(sfWebRequest $request)
    {
        $this->getUser()->setAuthenticated(false);
        $this->getUser()->getAttributeHolder()->clear();
        $this->redirect('login/index');
    }

    public function executeRegister(sfWebRequest $request)
    {
        $this->setLayout('layout2');
    }
    public function executeEmpresa(sfWebRequest $request)
    {
        $this->form = new empresaForm();
        if ($request->isMethod('post')){
            $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
            if ($this->form->isValid())
            {
                $datos=$this->form->getValues();
                $message = $this->getMailer()->compose();
                $message->setSubject('Registro de Empresa - Carpeta Virtual');
                $message->setTo('cesar@innology.mx');
                $message->setFrom($datos['email'], 'Solicitud de Registro: '.$datos['nombre_empresa']);
                $html = $this->getPartial('login/mailE', array('data' => $datos));
                $message->setBody($html, 'text/html');
                $message->attach(Swift_Attachment::fromPath($datos['logo']->getTempName())->setFilename($datos['logo']->getOriginalName()));
                $this->getMailer()->send($message);
                $this->redirect('login/index');
            }else{
                $this->getUser()->setFlash('warning', 'Algunos campos no son válidos');
            }
        }/*Del if con POST*/
        $this->setLayout('layout2');
    }
    public function executeSucursal(sfWebRequest $request)
    {
        $this->form = new unidadForm();
        if ($request->isMethod('post')){
            $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
            if ($this->form->isValid())
            {
                $datos=$this->form->getValues();
                $message = $this->getMailer()->compose();
                $message->setSubject('Registro de Sucursal - Carpeta Virtual');
                $message->setTo('cesar@innology.mx');
                $message->setFrom($datos['email'], 'Solicitud de Registro: '.$datos['nombre']);
                $qe = Doctrine_Core::getTable('empresa')->findOneByIdEmpresa(trim($datos['id_empresa']));
                $qc = Doctrine_Core::getTable('usuario')->findOneByIdUsuario(trim($datos['id_consultor']));
                $qg = Doctrine_Core::getTable('usuario')->findOneByIdUsuario(trim($datos['id_gerente']));
                $qs = Doctrine_Core::getTable('usuario')->findOneByIdUsuario(trim($datos['id_subdirector']));
                $qd = Doctrine_Core::getTable('usuario')->findOneByIdUsuario(trim($datos['id_director_general']));
                if($qe==null){
                    $empresa="";
                }else{
                    $empresa=$qe->getNombreEmpresa();
                }
                if($qc==null){
                    $consultor="";
                }else{
                    $consultor=$qc->getNombre()." ".$qc->getPrimerApellido()." ".$qc->getSegundoApellido();
                }
                if($qg==null){
                    $gerente="";
                }else{
                    $gerente=$qg->getNombre()." ".$qg->getPrimerApellido()." ".$qg->getSegundoApellido();
                }
                if($qs==null){
                    $subdirector="";
                }else{
                    $subdirector=$qs->getNombre()." ".$qs->getPrimerApellido()." ".$qs->getSegundoApellido();
                }
                if($qd==null){
                    $director="";
                }else{
                    $director=$qd->getNombre()." ".$qd->getPrimerApellido()." ".$qd->getSegundoApellido();
                }
                $html = $this->getPartial('login/mailS', array('data' => $datos,'empresa'=>$empresa,'consultor'=>$consultor,'gerente'=>$gerente,'subdirector'=>$subdirector,'director'=>$director));
                $message->setBody($html, 'text/html');
                $message->attach(Swift_Attachment::fromPath($datos['logo']->getTempName())->setFilename($datos['logo']->getOriginalName()));
                $this->getMailer()->send($message);
                $this->redirect('login/index');
            }else{
                $this->getUser()->setFlash('warning', 'Algunos campos no son válidos');
            }
        }/*Del if con POST*/
        $this->setLayout('layout2');
    }
    public function executeUsuario(sfWebRequest $request)
    {
        $this->form = new usuarioForm();
        if ($request->isMethod('post')){
            $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
            if ($this->form->isValid())
            {
                $datos=$this->form->getValues();
                $message = $this->getMailer()->compose();
                $message->setSubject('Registro de Usuario - Carpeta Virtual');
                $message->setTo('cesar@innology.mx');
                $message->setFrom($datos['email'], 'Solicitud de Registro: '.$datos['nombre_usuario']);
                $qe = Doctrine_Core::getTable('empresa')->findOneByIdEmpresa(trim($datos['id_empresa']));
                $qp = Doctrine_Core::getTable('usuario_grupo')->findOneByIdGrupo(trim($datos['id_grupo']));
                $qs = Doctrine_Core::getTable('unidad')->findOneByIdUnidad(trim($datos['id_unidad']));
                $qc = Doctrine_Core::getTable('comite')->findOneByIdComite(trim($datos['id_comite']));
                if($qe==null){
                    $empresa="";
                }else{
                    $empresa=$qe->getNombreEmpresa();
                }
                if($qp==null){
                    $privilegio="";
                }else{
                    $privilegio=$qp->getNombre();
                }
                if($qs==null){
                    $sucursal="";
                }else{
                    $sucursal=$qs->getNombre();
                }
                if($qc==null){
                    $comite="";
                }else{
                    $comite=$qc->getNombreComite();
                }
                $html = $this->getPartial('login/mailU', array('data' => $datos,'empresa'=>$empresa,'privilegio'=>$privilegio,'sucursal'=>$sucursal,'comite'=>$comite));
                $message->setBody($html, 'text/html');
                $message->attach(Swift_Attachment::fromPath($datos['foto']->getTempName())->setFilename($datos['foto']->getOriginalName()));
                $this->getMailer()->send($message);
                $this->redirect('login/index');
            }else{
                $this->getUser()->setFlash('warning', 'Algunos campos no son válidos');
            }
        }/*Del if con POST*/
        $this->setLayout('layout2');
    }
}
