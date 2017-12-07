<?php

/**
 * empresa actions.
 *
 * @package    carpetavirtual
 * @subpackage empresa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class empresaActions extends sfActions
{
    public function preExecute()
    {
        $this->getUser()->setSeccion(1);
    }

    public function executeDtlist(sfWebRequest $request)
    {
        sfContext::getInstance()->getConfiguration()->loadHelpers('Url');

        $sino = array(sfConfig::get('app_template_no'), sfConfig::get('app_template_si'));
        
        $columns = array('id_empresa', 'nombre_empresa', 'telefono', 'email', 'nombre_contacto', 'activar_sucursales', 'tipo', 'pais', 'estado', 'ciudad', 'municipio', 'numero', 'direccion', 'delegacion', 'cp', 'referencia',);
        $table = 'empresa';
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
                '<a href="' . url_for('empresa/show?id_empresa=' . $v->getIdEmpresa()) . '">' . $v->getIdEmpresa() . '</a>',
                $v->getNombreEmpresa(),
                $v->getTelefono(),
                $v->getEmail(),
                $v->getNombreContacto(),
                $sino[$v->getActivarSucursales()],
                $sino[$v->getTipo()],
                $v->getPais(),
                $v->getEstado(),
                $v->getCiudad(),
                $v->getMunicipio(),
                $v->getNumero(),
                $v->getDireccion(),
                $v->getDelegacion(),
                $v->getCp(),
                $v->getReferencia(),
                '<div class="btn-group btn-group-xs">
                    <a href="' . url_for('empresa/show?id_empresa=' . $v->getIdEmpresa()) . '" data-toggle="tooltip" title="Ver" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="' . url_for('empresa/edit?id_empresa=' . $v->getIdEmpresa()) . '" data-toggle="tooltip" title="Editar" class="btn btn-default">
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

    public function executeLimpiar(sfWebRequest $request)
    {
        $empresas = Doctrine::getTable('empresa')->createQuery('a')->execute();
        foreach ($empresas as $item) {
            $str = mb_convert_encoding($item->getNombreContacto(), "ISO-8859-1", mb_detect_encoding($item->getNombreContacto(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setNombreContacto($str);
            echo $str . "<br/>";
            $item->save();
        }
        
        $comite = Doctrine::getTable('comite')->createQuery('a')->execute();
        foreach ($comite as $item) {
            $str = mb_convert_encoding($item->getNombreComite(), "ISO-8859-1", mb_detect_encoding($item->getNombreComite(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setNombreComite($str);
            echo $str . "<br/>";
            $item->save();
        }
        
        $programa = Doctrine::getTable('programa')->createQuery('a')->execute();
        foreach ($programa as $item) {
            $str = mb_convert_encoding($item->getNombre(), "ISO-8859-1", mb_detect_encoding($item->getNombre(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getCoordinador(), "ISO-8859-1", mb_detect_encoding($item->getCoordinador(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setNombre($str);
            $item->setCoordinador($str2);
            echo $str . " " . $str2 . "<br/>";
            $item->save();
        }
        
        $anexos = Doctrine::getTable('programa_anexos')->createQuery('a')->execute();
        foreach ($anexos as $item) {
            $str = mb_convert_encoding($item->getUrl(), "ISO-8859-1", mb_detect_encoding($item->getUrl(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setUrl($str);
            echo $str . "<br/>";
            $item->save();
        }
        
        $prseccion = Doctrine::getTable('programa_seccion')->createQuery('a')->execute();
        foreach ($prseccion as $item) {
            $str = mb_convert_encoding($item->getTextContent(), "ISO-8859-1", mb_detect_encoding($item->getTextContent(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setTextContent($str);
            echo $str . "<br/>";
            $item->save();
        }
        
        $requisito = Doctrine::getTable('requisito')->createQuery('a')->execute();
        foreach ($requisito as $item) {
            $str = mb_convert_encoding($item->getTitulo(), "ISO-8859-1", mb_detect_encoding($item->getTitulo(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getDescripcion(), "ISO-8859-1", mb_detect_encoding($item->getDescripcion(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str3 = mb_convert_encoding($item->getGuiaDeApoyo(), "ISO-8859-1", mb_detect_encoding($item->getGuiaDeApoyo(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setTitulo($str);
            $item->setDescripcion($str2);
            $item->setGuiaDeApoyo($str3);
            echo $str . " " . $str2 . " " . $str3 . "<br/>";
            $item->save();
        };
        
        $s5 = Doctrine::getTable('seccion5')->createQuery('a')->execute();
        foreach ($s5 as $item) {
            $str = mb_convert_encoding($item->getTextOtros(), "ISO-8859-1", mb_detect_encoding($item->getTextOtros(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setTextOtros($str);
            echo $str . "<br/>";
            $item->save();
        };
        
        $s6 = Doctrine::getTable('seccion6')->createQuery('a')->execute();
        foreach ($s6 as $item) {
            $str = mb_convert_encoding($item->getTextOtro(), "ISO-8859-1", mb_detect_encoding($item->getTextOtro(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setTextOtro($str);
            echo $str . "<br/>";
            $item->save();
        };

        $s8 = Doctrine::getTable('seccion8')->createQuery('a')->execute();
        foreach ($s8 as $item) {
            $str = mb_convert_encoding($item->getT_P_D(), "ISO-8859-1", mb_detect_encoding($item->getT_P_D(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getT_P_A(), "ISO-8859-1", mb_detect_encoding($item->getT_P_A(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str3 = mb_convert_encoding($item->getT_P_C(), "ISO-8859-1", mb_detect_encoding($item->getT_P_C(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str4 = mb_convert_encoding($item->getT_P_P(), "ISO-8859-1", mb_detect_encoding($item->getT_P_P(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str5 = mb_convert_encoding($item->getT_P_O(), "ISO-8859-1", mb_detect_encoding($item->getT_P_O(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setT_P_D($str);
            $item->setT_P_A($str2);
            $item->setT_P_C($str3);
            $item->setT_P_P($str4);
            $item->setT_P_O($str5);

            $str = mb_convert_encoding($item->getT_D_D(), "ISO-8859-1", mb_detect_encoding($item->getT_D_D(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getT_D_A(), "ISO-8859-1", mb_detect_encoding($item->getT_D_A(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str3 = mb_convert_encoding($item->getT_D_C(), "ISO-8859-1", mb_detect_encoding($item->getT_D_C(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str4 = mb_convert_encoding($item->getT_D_P(), "ISO-8859-1", mb_detect_encoding($item->getT_D_P(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str5 = mb_convert_encoding($item->getT_D_O(), "ISO-8859-1", mb_detect_encoding($item->getT_D_O(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setT_D_D($str);
            $item->setT_D_A($str2);
            $item->setT_D_C($str3);
            $item->setT_D_P($str4);
            $item->setT_D_O($str5);

            $str = mb_convert_encoding($item->getT_E_D(), "ISO-8859-1", mb_detect_encoding($item->getT_E_D(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getT_E_A(), "ISO-8859-1", mb_detect_encoding($item->getT_E_A(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str3 = mb_convert_encoding($item->getT_E_C(), "ISO-8859-1", mb_detect_encoding($item->getT_E_C(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str4 = mb_convert_encoding($item->getT_E_P(), "ISO-8859-1", mb_detect_encoding($item->getT_E_P(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str5 = mb_convert_encoding($item->getT_E_O(), "ISO-8859-1", mb_detect_encoding($item->getT_E_O(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setT_E_D($str);
            $item->setT_E_A($str2);
            $item->setT_E_C($str3);
            $item->setT_E_P($str4);
            $item->setT_E_O($str5);

            $str = mb_convert_encoding($item->getT_R_D(), "ISO-8859-1", mb_detect_encoding($item->getT_R_D(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getT_R_A(), "ISO-8859-1", mb_detect_encoding($item->getT_R_A(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str3 = mb_convert_encoding($item->getT_R_C(), "ISO-8859-1", mb_detect_encoding($item->getT_R_C(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str4 = mb_convert_encoding($item->getT_R_P(), "ISO-8859-1", mb_detect_encoding($item->getT_R_P(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str5 = mb_convert_encoding($item->getT_R_O(), "ISO-8859-1", mb_detect_encoding($item->getT_R_O(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setT_R_D($str);
            $item->setT_R_A($str2);
            $item->setT_R_C($str3);
            $item->setT_R_P($str4);
            $item->setT_R_O($str5);
            $item->save();
        };

        $r9 = Doctrine::getTable('seccion9')->createQuery('a')->execute();
        foreach ($r9 as $item) {
            $str = mb_convert_encoding($item->getIndicador(), "ISO-8859-1", mb_detect_encoding($item->getIndicador(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getIndicador2(), "ISO-8859-1", mb_detect_encoding($item->getIndicador2(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str3 = mb_convert_encoding($item->getIndicador3(), "ISO-8859-1", mb_detect_encoding($item->getIndicador3(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setIndicador($str);
            $item->setIndicador2($str2);
            $item->setIndicador3($str3);
            echo $str . " " . $str2 . " " . $str3 . "<br/>";
            $item->save();
        };
        
        $s10 = Doctrine::getTable('seccion10')->createQuery('a')->execute();
        foreach ($s10 as $item) {
            $str = mb_convert_encoding($item->getComentario(), "ISO-8859-1", mb_detect_encoding($item->getComentario(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setComentario($str);
            echo $str . "<br/>";
            $item->save();
        };
        
        $unidad = Doctrine::getTable('unidad')->createQuery('a')->execute();
        foreach ($unidad as $item) {
            $str = mb_convert_encoding($item->getNombre(), "ISO-8859-1", mb_detect_encoding($item->getNombre(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getNombreContacto(), "ISO-8859-1", mb_detect_encoding($item->getNombreContacto(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setNombre($str);
            $item->setNombreContacto($str2);
            echo $str . " " . $str2 . "<br/>";
            $item->save();
        }

        $usr = Doctrine::getTable('usuario')->createQuery('a')->execute();
        foreach ($usr as $item) {
            $str = mb_convert_encoding($item->getCargo(), "ISO-8859-1", mb_detect_encoding($item->getCargo(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str2 = mb_convert_encoding($item->getPassword(), "ISO-8859-1", mb_detect_encoding($item->getPassword(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $str3 = mb_convert_encoding($item->getSalt(), "ISO-8859-1", mb_detect_encoding($item->getSalt(), "UTF-8, ISO-8859-1, ISO-8859-15", true));
            $item->setCargo($str);
            //$item->setPassword($str2);
            //  $item->setSalt($str3);
            echo $str . " " . $str2 . " " . $str3 . "<br/>";
            $item->save();
        };
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
                $this->empresas = Doctrine::getTable('empresa')
                    ->createQuery('a')
                    ->orderby('a.nombre_empresa ASC')
                    ->execute();
            } else {
                if (Privilegios::consultor($this->getUser()->getRol())) {
                    $this->empresas = Doctrine::getTable('empresa')
                        ->createQuery('a')
                        ->innerJoin('a.unidad u')
                        ->where('u.id_consultor = ?', $this->getUser()->getIdusuario())
                        ->orderby('a.nombre_empresa ASC')
                        //->orwhere('a.id_empresa = ?', $this->getUser()->getIdempresa())
                        ->execute();
                } else {
                    $this->empresas = Doctrine::getTable('empresa')
                        ->createQuery('a')
                        ->where('a.id_empresa = ?', $this->getUser()->getIdempresa())
                        ->orderby('a.nombre_empresa ASC')
                        ->execute();
                }
            }
        }
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->empresa = Doctrine::getTable('empresa')->find(array($request->getParameter('id_empresa')));
        $this->forward404Unless($this->empresa);
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new empresaForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new empresaForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($empresa = Doctrine::getTable('empresa')->find(array($request->getParameter('id_empresa'))), sprintf('Object empresa does not exist (%s).', $request->getParameter('id_empresa')));
        $this->form = new empresaForm($empresa);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($empresa = Doctrine::getTable('empresa')->find(array($request->getParameter('id_empresa'))), sprintf('Object empresa does not exist (%s).', $request->getParameter('id_empresa')));
        $this->form = new empresaForm($empresa);
        $this->processForm($request, $this->form);
        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();
        $this->forward404Unless($empresa = Doctrine::getTable('empresa')->find(array($request->getParameter('id_empresa'))), sprintf('Object empresa does not exist (%s).', $request->getParameter('id_empresa')));
        $empresa->delete();
        $this->redirect('empresa/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $empresa = $form->save();
            $this->getUser()->setFlash('exito', 'El registro se actualizo correctamente');
            //$this->redirect('empresa/edit?id_empresa='.$empresa->getIdEmpresa());
            $this->redirect('empresa/index');
        } else {
            $this->getUser()->setFlash('error', 'Ocurrio un error al procesar la solicitud');
        }

    }
}
