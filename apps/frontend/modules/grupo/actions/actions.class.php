<?php

/**
 * grupo actions.
 *
 * @package    carpetavirtual
 * @subpackage grupo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class grupoActions extends sfActions
{
    public function preExecute()
    {
        $this->getUser()->setSeccion(1);
    }

    public function executeDtlist(sfWebRequest $request)
    {
        sfContext::getInstance()->getConfiguration()->loadHelpers('Url');

        $sino = array(sfConfig::get('app_template_no'), sfConfig::get('app_template_si'));
        
        $columns = array('id_grupo', 'nombre', 'permisos',);
        $table = 'UsuarioGrupo';
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
                '<a href="' . url_for('grupo/show?id_grupo=' . $v->getIdGrupo()) . '">' . $v->getIdGrupo() . '</a>',
                $v->getNombre(),
                $v->getPermisos(),
                '<div class="btn-group btn-group-xs">
                    <a href="' . url_for('grupo/show?id_grupo=' . $v->getIdGrupo()) . '" data-toggle="tooltip" title="Ver" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="' . url_for('grupo/edit?id_grupo=' . $v->getIdGrupo()) . '" data-toggle="tooltip" title="Editar" class="btn btn-default">
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
            $this->usuario_grupos = Doctrine::getTable('UsuarioGrupo')
                ->createQuery('a')
                ->execute();
        }
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->usuario_grupo = Doctrine::getTable('UsuarioGrupo')->find(array($request->getParameter('id_grupo')));
        $this->forward404Unless($this->usuario_grupo);
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new UsuarioGrupoForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new UsuarioGrupoForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($usuario_grupo = Doctrine::getTable('UsuarioGrupo')->find(array($request->getParameter('id_grupo'))), sprintf('Object usuario_grupo does not exist (%s).', $request->getParameter('id_grupo')));
        $this->form = new UsuarioGrupoForm($usuario_grupo);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($usuario_grupo = Doctrine::getTable('UsuarioGrupo')->find(array($request->getParameter('id_grupo'))), sprintf('Object usuario_grupo does not exist (%s).', $request->getParameter('id_grupo')));
        $this->form = new UsuarioGrupoForm($usuario_grupo);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($usuario_grupo = Doctrine::getTable('UsuarioGrupo')->find(array($request->getParameter('id_grupo'))), sprintf('Object usuario_grupo does not exist (%s).', $request->getParameter('id_grupo')));
        $usuario_grupo->delete();

        $this->redirect('grupo/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $usuario_grupo = $form->save();
            $this->getUser()->setFlash('exito', 'El registro se actualizo correctamente');
            //$this->redirect('grupo/edit?id_grupo='.$usuario_grupo->getIdGrupo());
            $this->redirect('grupo/index');
        } else {
            $this->getUser()->setFlash('error', 'Ocurrio un error al procesar la solicitud');
        }

    }
}
