<?php

/**
 * usuarios actions.
 *
 * @package    carpetavirtual
 * @subpackage usuarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuariosActions extends sfActions
{
    public function preExecute()
    {
        $this->getUser()->setSeccion(1);
    }

    public function executeDtlist(sfWebRequest $request)
    {
        sfContext::getInstance()->getConfiguration()->loadHelpers('Url');

        $sino = array(sfConfig::get('app_template_no'), sfConfig::get('app_template_si'));
        
        $columns = array('id_usuario', 'id_empresa', 'id_grupo', 'id_unidad', 'id_comite', 'nombre', 'nombre_usuario', 'primer_apellido', 'segundo_apellido', 'email', 'telefono_fijo', 'telefono_celular', 'email_emergencia', 'cargo', 'password', 'salt', 'palabra_clave', 'creado', 'actualizado',);
        $table = 'usuario';
        $buscar = $request->getParameter('sSearch', "");

        $qt = Doctrine_Query::create()
            ->select('count(' . $columns[0] . ') as total')
            ->from($table);
        $total = $qt->execute();

        $total1 = $total[0]->getTotal();
        $total2 = $total1;

        $q = Doctrine_Query::create()
            ->select(implode(',', $columns))
            ->from($table)
            ->orderBy($columns[intval($request->getParameter('iSortCol_0', 0))] . ' ' . ($request->getParameter('sSortDir_0', 'ASC')))
            ->limit(intval($request->getParameter('iDisplayLength', 10)))
            ->offset(intval($request->getParameter('iDisplayStart', 0)));

        if ($buscar != "") {
            $q->where($columns[1] . ' LIKE ?', '%' . $buscar . '%');

            $qt = Doctrine_Query::create()
                ->select('count(' . $columns[0] . ') as total')
                ->from($table)
                ->where($columns[1] . ' LIKE ?', '%' . $buscar . '%');

            $total = $qt->execute();
            $total2 = $total[0]->getTotal();
        }

        $list = $q->execute();

        $aaData = array();
        $i = 1;
        foreach ($list as $v) {
            $aaData[] = array(
                '<a href="' . url_for('usuarios/show?id_usuario=' . $v->getIdUsuario()) . '">' . $v->getIdUsuario() . '</a>',
                $v->getIdEmpresa(),
                $v->getIdGrupo(),
                $v->getIdUnidad(),
                $v->getIdComite(),
                $v->getNombre(),
                $v->getNombreUsuario(),
                $v->getPrimerApellido(),
                $v->getSegundoApellido(),
                $v->getEmail(),
                $v->getTelefonoFijo(),
                $v->getTelefonoCelular(),
                $v->getEmailEmergencia(),
                $v->getCargo(),
                $v->getPassword(),
                $v->getSalt(),
                $v->getPalabraClave(),
                $v->getCreado(),
                $v->getActualizado(),
                '<div class="btn-group btn-group-xs">
                    <a href="' . url_for('usuarios/show?id_usuario=' . $v->getIdUsuario()) . '" data-toggle="tooltip" title="Ver" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="' . url_for('usuarios/edit?id_usuario=' . $v->getIdUsuario()) . '" data-toggle="tooltip" title="Editar" class="btn btn-default">
                        <i class="fa fa-edit"></i>
                    </a>
                </div>'
            );
            $i++;
        }

        $output = array(
            "sEcho" => intval($request->getParameter('sEcho')),
            "iTotalRecords" => $total1,
            "iTotalDisplayRecords" => $total2,
            "aaData" => $aaData,
        );

        $this->getResponse()->setContent(json_encode($output));

        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeIndex(sfWebRequest $request)
    {
        $this->datatables = 0;
        if ($this->datatables == 1) {
            $this->setTemplate('indexdt');
        } else {
            if (Privilegios::superadmin($this->getUser()->getRol())) {
                $this->usuarios = Doctrine::getTable('usuario')
                    ->createQuery('a')
                    ->orderby('a.nombre ASC')
                    ->execute();
            }
            if (Privilegios::consultor($this->getUser()->getRol())) {
                $this->usuarios = Doctrine::getTable('usuario')
                    ->createQuery('a')
                    ->innerJoin('a.unidad u ON a.id_unidad=u.id_unidad')
                    ->where('u.id_consultor = ?', $this->getUser()->getIdusuario())
                    ->AndWhere('a.activo = ?', 1)
                    ->orderby('a.nombre ASC')
                    ->execute();
            }
            if (Privilegios::gerente($this->getUser()->getRol())) {
                $this->usuarios = Doctrine::getTable('usuario')
                    ->createQuery('a')
                    ->innerJoin('a.unidad u ON a.id_unidad=u.id_unidad')
                    ->where('u.id_gerente = ?', $this->getUser()->getIdusuario())
                    ->AndWhere('a.activo = ?', 1)
                    ->orderby('a.nombre ASC')
                    ->execute();
            }
            if (Privilegios::presidentecomite($this->getUser()->getRol()) || Privilegios::solocomite($this->getUser()->getRol())) {
                $this->usuarios = Doctrine::getTable('usuario')
                    ->createQuery('a')
                    ->innerJoin('a.unidad u ON a.id_unidad=u.id_unidad')
                    ->innerJoin('u.comite c')
                    ->where('c.id_usuario_presidente = ?', $this->getUser()->getIdusuario())
                    ->AndWhere('a.activo = ?', 1)
                    ->orderby('a.nombre ASC')
                    ->execute();
            }
            if (Privilegios::directorgral($this->getUser()->getRol()) || Privilegios::subdirector($this->getUser()->getRol())) {
                $this->usuarios = Doctrine::getTable('usuario')
                    ->createQuery('a')
                    ->innerJoin('a.unidad u ON a.id_unidad=u.id_unidad')
                    ->where('u.id_empresa = ?', $this->getUser()->getIdempresa())
                    ->AndWhere('a.activo = ?', 1)
                    ->orderby('a.nombre ASC')
                    ->execute();
            }
            if (Privilegios::vicepresidente($this->getUser()->getRol())) {
                $this->usuarios = Doctrine::getTable('usuario')
                    ->createQuery('a')
                    ->innerJoin('a.unidad u ON a.id_unidad=u.id_unidad')
                    ->innerJoin('u.comite c')
                    ->where('c.id_comite=a.id_comite')
                    ->Andwhere('a.id_usuario = ?', $this->getUser()->getIdusuario())
                    ->AndWhere('a.activo = ?', 1)
                    ->orderby('a.nombre ASC')
                    ->execute();
            }
        }
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->usuario = Doctrine::getTable('usuario')->find(array($request->getParameter('id_usuario')));
        $this->forward404Unless($this->usuario);
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new usuarioForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new usuarioForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($usuario = Doctrine::getTable('usuario')->find(array($request->getParameter('id_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('id_usuario')));
        $this->form = new usuarioForm($usuario);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($usuario = Doctrine::getTable('usuario')->find(array($request->getParameter('id_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('id_usuario')));
        $this->form = new usuarioForm($usuario);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($usuario = Doctrine::getTable('usuario')->find(array($request->getParameter('id_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('id_usuario')));
        $usuario->delete();

        $this->redirect('usuarios/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $usuario = $form->save();
            $this->getUser()->setFlash('exito', 'El registro se actualizo correctamente');
            //$this->redirect('usuarios/edit?id_usuario='.$usuario->getIdUsuario());
            $this->redirect('usuarios/index');
        } else {
            $this->getUser()->setFlash('error', 'Ocurrio un error al procesar la solicitud');
        }

    }
}
