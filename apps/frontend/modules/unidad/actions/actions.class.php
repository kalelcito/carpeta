<?php

/**
 * unidad actions.
 *
 * @package    carpetavirtual
 * @subpackage unidad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class unidadActions extends sfActions
{
    public function preExecute()
    {
        $this->getUser()->setSeccion(1);
    }

    public function executeDtlist(sfWebRequest $request)
    {
        sfContext::getInstance()->getConfiguration()->loadHelpers('Url');

        $sino = array(sfConfig::get('app_template_no'), sfConfig::get('app_template_si'));
        
        $columns = array('id_unidad', 'id_empresa', 'id_usuario', 'nombre', 'sucursal', 'telefono', 'email', 'nombre_contacto', 'pais', 'estado', 'ciudad', 'municipio', 'direccion', 'numero', 'delegacion', 'cp', 'referencia', 'id_director_general', 'id_subdirector', 'id_gerente', 'id_consultor', 'creado', 'actualizado',);
        $table = 'unidad';
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
                '<a href="' . url_for('unidad/show?id_unidad=' . $v->getIdUnidad()) . '">' . $v->getIdUnidad() . '</a>',
                $v->getIdEmpresa(),
                $v->getIdUsuario(),
                $v->getNombre(),
                $v->getSucursal(),
                $v->getTelefono(),
                $v->getEmail(),
                $v->getNombreContacto(),
                $v->getPais(),
                $v->getEstado(),
                $v->getCiudad(),
                $v->getMunicipio(),
                $v->getDireccion(),
                $v->getNumero(),
                $v->getDelegacion(),
                $v->getCp(),
                $v->getReferencia(),
                $v->getIdDirectorGeneral(),
                $v->getIdSubdirector(),
                $v->getIdGerente(),
                $v->getIdConsultor(),
                $v->getCreado(),
                $v->getActualizado(),
                '<div class="btn-group btn-group-xs">
                    <a href="' . url_for('unidad/show?id_unidad=' . $v->getIdUnidad()) . '" data-toggle="tooltip" title="Ver" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="' . url_for('unidad/edit?id_unidad=' . $v->getIdUnidad()) . '" data-toggle="tooltip" title="Editar" class="btn btn-default">
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
                $this->unidads = Doctrine::getTable('unidad')
                    ->createQuery('a')
                    ->execute();
            } else {
                if (Privilegios::consultor($this->getUser()->getRol())) {
                    $this->unidads = Doctrine::getTable('unidad')
                        ->createQuery('a')
                        ->where('a.id_consultor = ?', $this->getUser()->getIdusuario())
                        ->execute();
                }
                if (Privilegios::gerente($this->getUser()->getRol())) {
                    $this->unidads = Doctrine::getTable('unidad')
                        ->createQuery('a')
                        ->where('a.id_gerente = ?', $this->getUser()->getIdusuario())
                        ->execute();
                }
                if (Privilegios::presidentecomite($this->getUser()->getRol())) {
                    $this->unidads = Doctrine::getTable('unidad')
                        ->createQuery('a')
                        ->innerJoin('a.comite c on a.id_unidad=c.id_unidad')
                        ->innerJoin('c.Usuario u ON u.id_unidad=a.id_unidad')
                        ->where('c.id_usuario_presidente = ?', $this->getUser()->getIdusuario())
                        ->execute();
                }
                if (Privilegios::solocomite($this->getUser()->getRol())) {
                    $this->unidads = Doctrine::getTable('unidad')
                        ->createQuery('a')
                        ->innerJoin('a.usuario u ON u.id_unidad=a.id_unidad')
                        ->where('a.id_usuario = ?', $this->getUser()->getIdusuario())
                        ->execute();
                }
                if (Privilegios::directorgral($this->getUser()->getRol()) || Privilegios::subdirector($this->getUser()->getRol())) {
                    $this->unidads = Doctrine::getTable('unidad')
                        ->createQuery('a')
                        ->where('a.id_empresa = ?', $this->getUser()->getIdempresa())
                        ->execute();
                }
                if (Privilegios::vicepresidente($this->getUser()->getRol())) {
                    $this->unidads = Doctrine::getTable('unidad')
                        ->createQuery('a')
                        ->innerJoin('a.Usuario u ON u.id_unidad=a.id_unidad')
                        ->where('u.id_usuario = ?', $this->getUser()->getIdusuario())
                        ->execute();
                }
            }
        }
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->unidad = Doctrine::getTable('unidad')->find(array($request->getParameter('id_unidad')));
        $this->forward404Unless($this->unidad);
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new unidadForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new unidadForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($unidad = Doctrine::getTable('unidad')->find(array($request->getParameter('id_unidad'))), sprintf('Object unidad does not exist (%s).', $request->getParameter('id_unidad')));
        $this->form = new unidadForm($unidad);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($unidad = Doctrine::getTable('unidad')->find(array($request->getParameter('id_unidad'))), sprintf('Object unidad does not exist (%s).', $request->getParameter('id_unidad')));
        $this->form = new unidadForm($unidad);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($unidad = Doctrine::getTable('unidad')->find(array($request->getParameter('id_unidad'))), sprintf('Object unidad does not exist (%s).', $request->getParameter('id_unidad')));
        $unidad->delete();

        $this->redirect('unidad/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $unidad = $form->save();
            $this->getUser()->setFlash('exito', 'El registro se actualizo correctamente');
            //$this->redirect('unidad/edit?id_unidad='.$unidad->getIdUnidad());
            $this->redirect('unidad/index');
        } else {
            $this->getUser()->setFlash('error', 'Ocurrio un error al procesar la solicitud');
        }

    }
}
