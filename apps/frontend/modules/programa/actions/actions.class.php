<?php

/**
 * programa actions.
 *
 * @package    carpetavirtual
 * @subpackage programa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class programaActions extends sfActions
{
    public function preExecute()
    {
        $this->getUser()->setSeccion(1);
    }

    public function executeDtlist(sfWebRequest $request)
    {
        sfContext::getInstance()->getConfiguration()->loadHelpers('Url');

        $sino = array(sfConfig::get('app_template_no'), sfConfig::get('app_template_si'));

        $columns = array('id_programa', 'id_requisito', 'id_comite', 'nombre', 'coordinador', 'calificacion', 'fecha_elaboracion', 'fecha_revision', 'id_usuario_elaboro', 'id_consultor', 'fecha_compromiso', 'no_revision', 'id_usuario_reviso', 'id_usuario_modifico', 'fecha_modifico', 'creado', 'actualizado',);
        $table = 'programa';
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
                '<a href="' . url_for('programa/show?id_programa=' . $v->getIdPrograma()) . '">' . $v->getIdPrograma() . '</a>',
                $v->getIdRequisito(),
                $v->getIdComite(),
                $v->getNombre(),
                $v->getCoordinador(),
                $v->getCalificacion(),
                $v->getFechaElaboracion(),
                $v->getFechaRevision(),
                $v->getIdUsuarioElaboro(),
                $v->getIdConsultor(),
                $v->getFechaCompromiso(),
                $v->getNoRevision(),
                $v->getIdUsuarioReviso(),
                $v->getIdUsuarioModifico(),
                $v->getFechaModifico(),
                $v->getCreado(),
                $v->getActualizado(),
                '<div class="btn-group btn-group-xs">
                    <a href="' . url_for('programa/show?id_programa=' . $v->getIdPrograma()) . '" data-toggle="tooltip" title="Ver" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="' . url_for('programa/edit?id_programa=' . $v->getIdPrograma()) . '" data-toggle="tooltip" title="Editar" class="btn btn-default">
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
            $this->programas = Doctrine::getTable('programa')
                ->createQuery('a')
                ->execute();
        }
    }

    public function executeActcoord(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $coordinador = trim($request->getParameter('coordinador', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $coordinador != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getCoordinador()) != $coordinador) {
                    $programa->setCoordinador($coordinador);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeRevision1(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $revision1 = trim($request->getParameter('revision1', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $revision1 != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getRevisor1()) != $revision1) {

                    date_default_timezone_set("America/Mexico_City");
                    $fecha = date('Y-m-d');
                    $programa->setRevisor1($revision1);
                    $programa->setFechaRevision($fecha);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeRevision2(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $revision2 = trim($request->getParameter('revision2', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $revision2 != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getRevisor2()) != $revision2) {

                    date_default_timezone_set("America/Mexico_City");
                    $fecha = date('Y-m-d');
                    $programa->setRevisor2($revision2);
                    $programa->setFechaRevision2($fecha);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeRevision3(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $revision3 = trim($request->getParameter('revision3', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $revision3 != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getRevisor3()) != $revision3) {

                    date_default_timezone_set("America/Mexico_City");
                    $fecha = date('Y-m-d');
                    $programa->setRevisor3($revision3);
                    $programa->setFechaRevision3($fecha);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeRevision4(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $revision4 = trim($request->getParameter('revision4', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $revision4 != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getRevisor4()) != $revision4) {

                    date_default_timezone_set("America/Mexico_City");
                    $fecha = date('Y-m-d');
                    $programa->setRevisor4($revision4);
                    $programa->setFechaRevision4($fecha);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeRevision5(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $revision5 = trim($request->getParameter('revision5', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $revision5 != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getRevisor5()) != $revision5) {

                    date_default_timezone_set("America/Mexico_City");
                    $fecha = date('Y-m-d');
                    $programa->setRevisor5($revision5);
                    $programa->setFechaRevision5($fecha);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeExistencia(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $existencia = trim($request->getParameter('existencia', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $existencia != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getExistencia()) != $existencia) {
                    $prom1=$existencia;
                    $prom2=$programa->getDifusion();
                    $prom3=$programa->getParticipacion();
                    $prom4=$programa->getMejora();
                    $prom5=$programa->getVinculacion();

                    $com=$programa->getIdComite();

                    $cal1 = ($prom1*5)/10;
                    $cal2 = ($prom2*1)/10;
                    $cal3 = ($prom3*1.5)/10;
                    $cal4 = ($prom4*1.5)/10;
                    $cal5 = ($prom5*1)/10;
                    $calt = $cal1+$cal2+$cal3+$cal4+$cal5;

                    $programa->setExistencia($prom1);
                    $programa->setCalificacion($calt);
                    $programa->save();


                    $con = Doctrine_Manager::getInstance()->connection();
                    $st = $con->execute("SELECT AVG(programa.calificacion) AS calificacion FROM programa WHERE programa.id_comite = " . $com);
                    $result = $st->fetchAll();

                    $comite=Doctrine::getTable('comite')->find($com);
                    if($comite){
                        date_default_timezone_set("America/Mexico_City");
                        $fecha = date('Y-m-d H:i:s');

                        $comite->setCalificacion($result[0]["calificacion"]);
                        $comite->setActualizado($fecha);
                        $comite->save();
                    }

                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeDifusion(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $difusion = trim($request->getParameter('difusion', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $difusion != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getDifusion()) != $difusion) {
                    $prom1=$programa->getExistencia();
                    $prom2=$difusion;
                    $prom3=$programa->getParticipacion();
                    $prom4=$programa->getMejora();
                    $prom5=$programa->getVinculacion();

                    $com=$programa->getIdComite();

                    $cal1 = ($prom1*5)/10;
                    $cal2 = ($prom2*1)/10;
                    $cal3 = ($prom3*1.5)/10;
                    $cal4 = ($prom4*1.5)/10;
                    $cal5 = ($prom5*1)/10;
                    $calt = $cal1+$cal2+$cal3+$cal4+$cal5;

                    $programa->setDifusion($prom2);
                    $programa->setCalificacion($calt);
                    $programa->save();

                    $con = Doctrine_Manager::getInstance()->connection();
                    $st = $con->execute("SELECT AVG(programa.calificacion) AS calificacion FROM programa WHERE programa.id_comite = " . $com);
                    $result = $st->fetchAll();


                    $comite=Doctrine::getTable('comite')->find($com);
                    if($comite){
                        date_default_timezone_set("America/Mexico_City");
                        $fecha = date('Y-m-d H:i:s');
                        $comite->setCalificacion($result[0]["calificacion"]);
                        $comite->setActualizado($fecha);
                        $comite->save();
                    }


                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeParticipacion(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $participacion = trim($request->getParameter('participacion', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $participacion != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getParticipacion()) != $participacion) {
                    $prom1=$programa->getExistencia();
                    $prom2=$programa->getDifusion();
                    $prom3=$participacion;
                    $prom4=$programa->getMejora();
                    $prom5=$programa->getVinculacion();

                    $com=$programa->getIdComite();

                    $cal1 = ($prom1*5)/10;
                    $cal2 = ($prom2*1)/10;
                    $cal3 = ($prom3*1.5)/10;
                    $cal4 = ($prom4*1.5)/10;
                    $cal5 = ($prom5*1)/10;
                    $calt = $cal1+$cal2+$cal3+$cal4+$cal5;

                    $programa->setParticipacion($prom3);
                    $programa->setCalificacion($calt);
                    $programa->save();


                    $con = Doctrine_Manager::getInstance()->connection();
                    $st = $con->execute("SELECT AVG(programa.calificacion) AS calificacion FROM programa WHERE programa.id_comite = " . $com);
                    $result = $st->fetchAll();

                    $comite=Doctrine::getTable('comite')->find($com);
                    if($comite){
                        date_default_timezone_set("America/Mexico_City");
                        $fecha = date('Y-m-d H:i:s');

                        $comite->setCalificacion($result[0]["calificacion"]);
                        $comite->setActualizado($fecha);
                        $comite->save();
                    }
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeMejora(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $mejora = trim($request->getParameter('mejora', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $mejora != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getMejora()) != $mejora) {
                    $prom1=$programa->getExistencia();
                    $prom2=$programa->getDifusion();
                    $prom3=$programa->getParticipacion();
                    $prom4=$mejora;
                    $prom5=$programa->getVinculacion();

                    $com=$programa->getIdComite();

                    $cal1 = ($prom1*5)/10;
                    $cal2 = ($prom2*1)/10;
                    $cal3 = ($prom3*1.5)/10;
                    $cal4 = ($prom4*1.5)/10;
                    $cal5 = ($prom5*1)/10;
                    $calt = $cal1+$cal2+$cal3+$cal4+$cal5;

                    $programa->setMejora($prom4);
                    $programa->setCalificacion($calt);
                    $programa->save();



                    $con = Doctrine_Manager::getInstance()->connection();
                    $st = $con->execute("SELECT AVG(programa.calificacion) AS calificacion FROM programa WHERE programa.id_comite = " . $com);
                    $result = $st->fetchAll();

                    $comite=Doctrine::getTable('comite')->find($com);
                    if($comite){
                        date_default_timezone_set("America/Mexico_City");
                        $fecha = date('Y-m-d H:i:s');

                        $comite->setCalificacion($result[0]["calificacion"]);
                        $comite->setActualizado($fecha);
                        $comite->save();
                    }

                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeVinculacion(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $vinculacion = trim($request->getParameter('vinculacion', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $vinculacion != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getVinculacion()) != $vinculacion) {
                    $prom1=$programa->getExistencia();
                    $prom2=$programa->getDifusion();
                    $prom3=$programa->getParticipacion();
                    $prom4=$programa->getMejora();
                    $prom5=$vinculacion;

                    $com=$programa->getIdComite();

                    $cal1 = ($prom1*5)/10;
                    $cal2 = ($prom2*1)/10;
                    $cal3 = ($prom3*1.5)/10;
                    $cal4 = ($prom4*1.5)/10;
                    $cal5 = ($prom5*1)/10;
                    $calt = $cal1+$cal2+$cal3+$cal4+$cal5;

                    $programa->setVinculacion($prom5);
                    $programa->setCalificacion($calt);
                    $programa->save();

                    $con = Doctrine_Manager::getInstance()->connection();
                    $st = $con->execute("SELECT AVG(programa.calificacion) AS calificacion FROM programa WHERE programa.id_comite = " . $com);
                    $result = $st->fetchAll();

                    $comite=Doctrine::getTable('comite')->find($com);
                    if($comite){
                        date_default_timezone_set("America/Mexico_City");
                        $fecha = date('Y-m-d H:i:s');

                        $comite->setCalificacion($result[0]["calificacion"]);
                        $comite->setActualizado($fecha);
                        $comite->save();
                    }

                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeComentario(sfWebRequest $request)
    {
        $res = 0;
        $idprograma = $request->getParameter('idprograma', null);
        $comentario = trim($request->getParameter('comentario', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idprograma != null && $comentario != null) {

            $programa = Doctrine::getTable('programa')->find($idprograma);
            if ($programa) {
                if (trim($programa->getComentario()) != $comentario) {
                    $programa->setComentario($comentario);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeActseccion(sfWebRequest $request)
    {
        $res = 0;
        if ($request->isMethod(sfRequest::POST) && $request->isXmlHttpRequest()) {
            $datos = $request->getParameter('programa_seccion');
            //echo "Seccion: ".$datos['id_ps'];
            //var_dump($request);
            //exit;
            /*$programaseccion = Doctrine::getTable('programa_seccion')->find(array($datos['id_ps']));
            if($programaseccion){
                $programaseccion->setTextContent($datos['text_content']);
                $programaseccion->save();
                $res=1;*/
            /* $programaseccion = Doctrine::getTable('programa_seccion')->find(array($datos['id_ps']));
             $form = new actseccionForm($programaseccion);
             var_dump($form);
             $form->bind($datos);
             //var_dump($this->form);
             //exit;
             var_dump($form->getValues());
             exit;
             if ($form->isValid())
             {*/
            $programaseccion = Doctrine::getTable('programa_seccion')->find(array($datos['id_ps']));
            if ($programaseccion) {
                $programaseccion->setTextContent($datos['text_content']);
                $programaseccion->save();
                $res = 1;
            } else {
                $res = 2;
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeActseccion5(sfWebRequest $request)
    {
        $res = 0;
        if ($request->isMethod(sfRequest::POST) && $request->isXmlHttpRequest()) {
            $datos = $request->getParameter('seccion5');
            $programaseccion = Doctrine::getTable('seccion5')->find(array($datos['id_ps']));
            if ($programaseccion) {
                $programaseccion->setDirectivos($datos['directivos']);
                $programaseccion->setPersonalnoSin($datos['personaln_s']);
                $programaseccion->setPersonalSin($datos['personal_s']);
                $programaseccion->setTPersonal($datos['t_personal']);
                $programaseccion->setFPersonal($datos['f_personal']);
                $programaseccion->setOGrupos($datos['otrosgrupos']);
                $programaseccion->setTextOtros($datos['text_otros']);
                $programaseccion->save();
                $res = 1;
            } else {
                $res = 2;
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeActseccion6(sfWebRequest $request)
    {
        $res = 0;
        if ($request->isMethod(sfRequest::POST) && $request->isXmlHttpRequest()) {
            $datos = $request->getParameter('seccion6');
            $programaseccion = Doctrine::getTable('seccion6')->find(array($datos['id_ps']));
            if ($programaseccion) {
                $programaseccion->setTablero($datos['tablero']);
                $programaseccion->setCircular($datos['circular']);
                $programaseccion->setCorreo($datos['correo']);
                $programaseccion->setInforme($datos['informe']);
                $programaseccion->setInformal($datos['informal']);
                $programaseccion->setOtroMedio($datos['otro_medio']);
                $programaseccion->setTextOtro($datos['text_otro']);
                $programaseccion->save();
                $res = 1;
            } else {
                $res = 2;
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeActseccion8(sfWebRequest $request)
    {
        $res = 0;
        if ($request->isMethod(sfRequest::POST) && $request->isXmlHttpRequest()) {
            $datos = $request->getParameter('seccion8');
            $programaseccion = Doctrine::getTable('seccion8')->find(array($datos['id_ps']));
            if ($programaseccion) {
                $programaseccion->setP_D($datos['p_d']);
                $programaseccion->setP_A($datos['p_a']);
                $programaseccion->setP_C($datos['p_c']);
                $programaseccion->setP_P($datos['p_p']);
                $programaseccion->setP_O($datos['p_o']);
                $programaseccion->setD_D($datos['d_d']);
                $programaseccion->setD_A($datos['d_a']);
                $programaseccion->setD_C($datos['d_c']);
                $programaseccion->setD_P($datos['d_p']);
                $programaseccion->setD_O($datos['d_o']);
                $programaseccion->setE_D($datos['e_d']);
                $programaseccion->setE_A($datos['e_a']);
                $programaseccion->setE_C($datos['e_c']);
                $programaseccion->setE_P($datos['e_p']);
                $programaseccion->setE_O($datos['e_o']);
                $programaseccion->setR_D($datos['r_d']);
                $programaseccion->setR_A($datos['r_a']);
                $programaseccion->setR_C($datos['r_c']);
                $programaseccion->setR_P($datos['r_p']);
                $programaseccion->setR_O($datos['r_o']);

                $programaseccion->setT_P_D($datos['t_p_d']);
                $programaseccion->setT_P_A($datos['t_p_a']);
                $programaseccion->setT_P_C($datos['t_p_c']);
                $programaseccion->setT_P_P($datos['t_p_p']);
                $programaseccion->setT_P_O($datos['t_p_o']);
                $programaseccion->setT_D_D($datos['t_d_d']);
                $programaseccion->setT_D_A($datos['t_d_a']);
                $programaseccion->setT_D_C($datos['t_d_c']);
                $programaseccion->setT_D_P($datos['t_d_p']);
                $programaseccion->setT_D_O($datos['t_d_o']);
                $programaseccion->setT_E_D($datos['t_e_d']);
                $programaseccion->setT_E_A($datos['t_e_a']);
                $programaseccion->setT_E_C($datos['t_e_c']);
                $programaseccion->setT_E_P($datos['t_e_p']);
                $programaseccion->setT_E_O($datos['t_e_o']);
                $programaseccion->setT_R_D($datos['t_r_d']);
                $programaseccion->setT_R_A($datos['t_r_a']);
                $programaseccion->setT_R_C($datos['t_r_c']);
                $programaseccion->setT_R_P($datos['t_r_p']);
                $programaseccion->setT_R_O($datos['t_r_o']);
                $programaseccion->save();
                $res = 1;
            } else {
                $res = 2;
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeActseccion9(sfWebRequest $request)
    {
        $res = 0;
        if ($request->isMethod(sfRequest::POST) && $request->isXmlHttpRequest()) {
            $datos = $request->getParameter('seccion9');
            $programaseccion = Doctrine::getTable('seccion9')->find(array($datos['id_ps']));
            if ($programaseccion) {
                $programaseccion->setAnio1($datos['anio1']);
                $programaseccion->setAnio2($datos['anio2']);
                $programaseccion->setAnio3($datos['anio3']);
                $programaseccion->setAnio4($datos['anio4']);
                $programaseccion->setAnio5($datos['anio5']);
                $programaseccion->setIndicador($datos['indicador']);
                $programaseccion->setIndicador2($datos['indicador2']);
                $programaseccion->setIndicador3($datos['indicador3']);
                $programaseccion->setIndicador4($datos['indicador4']);
                $programaseccion->setIndA1a($datos['ind_a1a']);
                $programaseccion->setIndA1b($datos['ind_a1b']);
                $programaseccion->setIndA1c($datos['ind_a1c']);
                $programaseccion->setIndA1d($datos['ind_a1d']);
                $programaseccion->setIndA2a($datos['ind_a2a']);
                $programaseccion->setIndA2b($datos['ind_a2b']);
                $programaseccion->setIndA2c($datos['ind_a2c']);
                $programaseccion->setIndA2d($datos['ind_a2d']);
                $programaseccion->setIndA3a($datos['ind_a3a']);
                $programaseccion->setIndA3b($datos['ind_a3b']);
                $programaseccion->setIndA3c($datos['ind_a3c']);
                $programaseccion->setIndA3d($datos['ind_a3d']);
                $programaseccion->setIndA4a($datos['ind_a4a']);
                $programaseccion->setIndA4b($datos['ind_a4b']);
                $programaseccion->setIndA4c($datos['ind_a4c']);
                $programaseccion->setIndA4d($datos['ind_a4d']);
                $programaseccion->setIndA5a($datos['ind_a5a']);
                $programaseccion->setIndA5b($datos['ind_a5b']);
                $programaseccion->setIndA5c($datos['ind_a5c']);
                $programaseccion->setIndA5d($datos['ind_a5d']);
                $programaseccion->save();
                $res = 1;
            } else {
                $res = 2;
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeActseccion11(sfWebRequest $request)
    {
        $res = 0;

        if ($request->isMethod(sfRequest::POST) && $request->isXmlHttpRequest()) {
            $res = 1;
            $form = new programa_anexosForm();
            //print_r($request);
            //print_r($request->getParameter($form->getName()));
            // exit;
            foreach ($request->getFiles($form->getName()) as $filename):
                $var =  $filename['type'];
            endforeach;
            $form->bind(array_merge($request->getParameter($form->getName()),array('comentarios'=>$var)), $request->getFiles($form->getName()));
            if ($form->isValid()) {
                $archivo = $form->save();
                $res = 1;
            } else {
                foreach ($form->getGlobalErrors() as $name => $error) {
                    //echo $name.': '.$error ."<br/>";
                }
                //print_r($form->getGlobalErrors());
                foreach ($form->getErrorSchema() as $key => $err) {
                    if ($key) {
                        $errors[$key] = $err->getMessage();
                    }
                }
                //print_r($errors);
                //exit;
                $res = 2;
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeShow(sfWebRequest $request)
    {
        //$this->form=new ProgramausuarioForm();
        $this->programa = Doctrine::getTable('programa')->find(array($request->getParameter('id_programa')));
        $this->formarchivos = new programa_anexosForm();
        $this->forward404Unless($this->programa);


        $this->comite = Doctrine::getTable('comite')->find(array($this->programa->getIdComite()));
    }

    public function executePdf(sfWebRequest $request)
    {
        //$this->form=new ProgramausuarioForm();
        $programa = Doctrine::getTable('programa')->find(array($request->getParameter('id_programa')));
        $this->forward404Unless($programa);
        $html = '<style>
body{
font-size:11pt;
}
    h1 {
        font-size: 16pt;
        font-weight: bold;
    }
    p{
    font-size:11pt;
    font-weight: normal;
    }
    .main{
    font-weight: bold;
    }
    .lowercase {
        text-transform: lowercase;
    }
    .uppercase {
        text-transform: uppercase;
    }
    .capitalize {
        text-transform: capitalize;
    }
    table{
    font-size:11pt;
    border-bottom: 2px solid black;
    }
    td{
    padding: 3px;
    }
    .odd{
    background-color: #aaaaaa;
    }
    .tdtitle{
    font-size: 13pt;
    border-bottom: 2px solid black;
    }
    .bold{
    font-weight: bold;;
    }
    .cuadro{
    border: 1px solid black;
    }
    th{
        background-color: #272727;
        color: white;
    }

</style>';

        $html = $html . '
        <table width="100%">
        <tr class="tdtitle"><td class="main">Comité: </td><td>' . $programa->getComite() . '</td></tr>
        <tr class="odd"><td class="main">Nombre del programa: </td><td>' . $programa->getNombre() . '</td></tr>
        <tr  ><td class="main">Coordinador: </td><td>' . $programa->getCoordinador() . '</td></tr>
        <tr class="odd"><td class="main">Requisito Norma CRESE: </td><td>' . $programa->getRequisito() . '</td></tr>
        <tr  ><td class="main">Fecha de elaboración: </td><td>' . $programa->getFechaElaboracion() . '</td></tr>
        <tr class="odd"><td class="main">Elaboró: </td><td></td></tr>
        </table>
        ';
        $html = $html . '
        <p class="bold">Información de revisión</p>
        <table width="100%">
        <tr ><td class="main">Reviso: </td><td>' . $programa->getComite()->getUnidad()->getUsuarioConsultor() . '</td></tr>
        <tr class="odd"><td class="main">Fecha de revisión: </td><td>' . $programa->getFechaRevision() . '</td></tr>
        <tr  ><td class="main">Número de revisión: </td><td>' . $programa->getNoRevision() . '</td></tr>
        <tr class="odd"><td class="main">Última modificación: </td><td>' . $programa->getactualizado() . '</td></tr>
        </table>
        <p>&nbsp;</p>
        ';
        $pdfpath = sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . 'pdf' . DIRECTORY_SEPARATOR . 'EvidenciaPrograma' . $programa->getIdPrograma() . '.pdf';

        foreach (Datossecciones::todos() as $key => $texto) {
            if ($key != 5 && $key != 6 && $key != 8 && $key != 9 && $key != 11) {
                foreach ($programa->getProgramaSeccion() as $seccion) {
                    if ($seccion->getIdSeccion() == $key) {
                        $html = $html . "<h1>" . Datossecciones::Nombreseccion($seccion->getIdSeccion()) . "<h1>";
                        $html = $html . $seccion->getTextContent();
                    }
                }
            } else {
                if ($key == 5) {
                    foreach ($programa->getSeccion5() as $seccion) {
                        if ($seccion->getIdSeccion() == $key) {
                            $html = $html . "<h1>" . Datossecciones::Nombreseccion($seccion->getIdSeccion()) . "<h1>";
                            $html = $html . '
                                            <table class="cuadro" width="100%">
                                            <tr class="thtitle"><th>#</th><th>Grupo de Interés</th><th>Sí / No</th></tr>
                                            <tr class="odd"><td>1</td><td class="main">Directivos</td><td>' . $seccion->getDirectivos() . '</td></tr>
                                            <tr  ><td>2</td><td class="main">Personal no sindicalizado</td><td>' . $seccion->getPersonalnoSin() . '</td></tr>
                                            <tr class="odd"><td>3</td><td class="main">Personal sindicalizado</td><td>' . $seccion->getPersonalSin() . '</td></tr>
                                            <tr  ><td>4</td><td class="main">Todo el personal</td><td>' . $seccion->getTPersonal() . '</td></tr>
                                            <tr class="odd"><td>5</td><td class="main">Familias del personal</td><td>' . $seccion->getFPersonal() . '</td></tr>
                                            <tr  ><td>6</td><td class="main">Otros grupos de interés <p>' . $seccion->getTextOtros() . '</p></td><td>' . $seccion->getOGrupos() . '</td></tr>
                                            </table>
                                            ';

                        }
                    }

                }
                if ($key == 6) {
                    foreach ($programa->getSeccion6() as $seccion) {
                        if ($seccion->getIdSeccion() == $key) {
                            $html = $html . "<h1>" . Datossecciones::Nombreseccion($seccion->getIdSeccion()) . "<h1>";
                            $html = $html . '
                                            <table class="cuadro" width="100%">
                                            <tr class="thtitle"><th>#</th><th>Medio de Comunicación</th><th>Sí / No</th></tr>
                                            <tr class="odd"><td>1</td><td class="main">Tablero de cominicación</td><td>' . $seccion->getTablero() . '</td></tr>
                                            <tr  ><td>2</td><td class="main">Circular o un comunicado escrito</td><td>' . $seccion->getCircular() . '</td></tr>
                                            <tr class="odd"><td>3</td><td class="main">Medio electrónico de la empresa o correo electrónico</td><td>' . $seccion->getCorreo() . '</td></tr>
                                            <tr  ><td>4</td><td class="main">Informe o memoria anual</td><td>' . $seccion->getInforme() . '</td></tr>
                                            <tr class="odd"><td>5</td><td class="main">De manera informal</td><td>' . $seccion->getInformal() . '</td></tr>
                                            <tr  ><td>6</td><td class="main">Otro medio de comunicación <p>' . $seccion->getTextOtro() . '</p></td><td>' . $seccion->getOtroMedio() . '</td></tr>
                                            </table>
                                            ';
                        }
                    }
                }
                if ($key == 8) {
                    foreach ($programa->getSeccion8() as $seccion) {
                        $sino = array(0 => 'No', 1 => 'Sí');
                        if ($seccion->getIdSeccion() == $key) {
                            $html = $html . "<h1>" . Datossecciones::Nombreseccion($seccion->getIdSeccion()) . "<h1>";
                            $cont = 0;
                            if ($seccion->getP_D() == 1) {
                                $cont++;
                            };
                            if ($seccion->getP_A() == 1) {
                                $cont++;
                            };
                            if ($seccion->getP_C() == 1) {
                                $cont++;
                            };
                            if ($seccion->getP_P() == 1) {
                                $cont++;
                            };
                            if ($seccion->getP_O() == 1) {
                                $cont++;
                            };

                            if ($seccion->getD_D() == 1) {
                                $cont++;
                            };
                            if ($seccion->getD_A() == 1) {
                                $cont++;
                            };
                            if ($seccion->getD_C() == 1) {
                                $cont++;
                            };
                            if ($seccion->getD_P() == 1) {
                                $cont++;
                            };
                            if ($seccion->getD_O() == 1) {
                                $cont++;
                            };

                            if ($seccion->getE_D() == 1) {
                                $cont++;
                            };
                            if ($seccion->getE_A() == 1) {
                                $cont++;
                            };
                            if ($seccion->getE_C() == 1) {
                                $cont++;
                            };
                            if ($seccion->getE_P() == 1) {
                                $cont++;
                            };
                            if ($seccion->getE_O() == 1) {
                                $cont++;
                            };

                            if ($seccion->getR_D() == 1) {
                                $cont++;
                            };
                            if ($seccion->getR_A() == 1) {
                                $cont++;
                            };
                            if ($seccion->getR_C() == 1) {
                                $cont++;
                            };
                            if ($seccion->getR_P() == 1) {
                                $cont++;
                            };
                            if ($seccion->getR_O() == 1) {
                                $cont++;
                            };

                            $html = $html . '<p>Porcentaje de participación: ' . number_format((($cont * 100) / 20), 2) . ' %</p>';
                            $html = $html . '
                                            <table class="cuadro" width="100%">
                                            <tr class="thtitle"><th></th>
                                                <th>Director o gerente general</th>
                                                <th>Área responsable</th>
                                                <th>Comité interno CRESE</th>
                                                <th>Personas en ALCANCE del programa</th>
                                                <th>Otros grupos de interés más alládel ALCANCE</th>
                                            </tr>
                                            <tr><td>Propuesta</td><td>' . $sino[$seccion->getP_D()] . '</td><td>' . $sino[$seccion->getP_A()] . '</td><td>' . $sino[$seccion->getP_C()] . '</td><td>' . $sino[$seccion->getP_P()] . '</td><td>' . $sino[$seccion->getP_O()] . '</td></tr>
                                            <tr class="odd"><td>Diseño</td><td>' . $sino[$seccion->getD_D()] . '</td><td>' . $sino[$seccion->getD_A()] . '</td><td>' . $sino[$seccion->getD_C()] . '</td><td>' . $sino[$seccion->getD_P()] . '</td><td>' . $sino[$seccion->getD_O()] . '</td></tr>
                                            <tr ><td>Ejecución</td><td>' . $sino[$seccion->getE_D()] . '</td><td>' . $sino[$seccion->getE_A()] . '</td><td>' . $sino[$seccion->getE_C()] . '</td><td>' . $sino[$seccion->getE_P()] . '</td><td>' . $sino[$seccion->getE_O()] . '</td></tr>
                                            <tr  class="odd"><td>Revisión/Evaluación</td><td>' . $sino[$seccion->getR_D()] . '</td><td>' . $sino[$seccion->getR_A()] . '</td><td>' . $sino[$seccion->getR_C()] . '</td><td>' . $sino[$seccion->getR_P()] . '</td><td>' . $sino[$seccion->getR_O()] . '</td></tr>
                                            </table>
                                            ';

                            if ($seccion->getP_D() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Director o Gerente General</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?</p><p>' . $seccion->getT_P_D() . '</p>';
                            };

                            if ($seccion->getD_D() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Director o Gerente General</strong> en el <strong>Diseño (definir, el "C&oacute;mo se hace")</strong>?</p><p>' . $seccion->getT_D_D() . '</p>';
                            };
                            if ($seccion->getE_D() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Director o Gerente General</strong> en la <strong>Ejecuci&oacute;n</strong>?</p><p>' . $seccion->getT_E_D() . '</p>';
                            };
                            if ($seccion->getR_D() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Director o Gerente General</strong> en la <strong>Revisi&oacute;n / Evaluaci&oacute;n</strong>?</p><p>' . $seccion->getT_R_D() . '</p>';
                            };

                            if ($seccion->getP_A() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>&Aacute;rea responsable</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?</p><p>' . $seccion->getT_P_A() . '</p>';
                            };
                            if ($seccion->getD_A() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>&Aacute;rea responsable</strong> en el <strong>Diseño (definir, el "C&oacute;mo se hace")</strong>?</p><p>' . $seccion->getT_D_A() . '</p>';
                            };
                            if ($seccion->getE_A() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>&Aacute;rea responsable</strong> en la <strong>Ejecuci&oacute;n</strong>?</p><p>' . $seccion->getT_E_A() . '</p>';
                            };
                            if ($seccion->getR_A() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>&Aacute;rea responsable</strong> en la <strong>Revisi&oacute;n / Evaluaci&oacute;n</strong>?</p><p>' . $seccion->getT_R_A() . '</p>';
                            };

                            if ($seccion->getP_C() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Comité interno CRESE</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?</p><p>' . $seccion->getT_P_C() . '</p>';
                            };
                            if ($seccion->getD_C() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Comité interno CRESE</strong> en el <strong>Diseño (definir, el "C&oacute;mo se hace")</strong>?</p><p>' . $seccion->getT_D_C() . '</p>';
                            };
                            if ($seccion->getE_C() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Comité interno CRESE</strong> en la <strong>Ejecuci&oacute;n</strong>?</p><p>' . $seccion->getT_E_C() . '</p>';
                            };
                            if ($seccion->getR_C() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Comité interno CRESE</strong> en la <strong>Revisi&oacute;n / Evaluaci&oacute;n</strong>?</p><p>' . $seccion->getT_R_C() . '</p>';
                            };

                            if ($seccion->getP_C() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Comité interno CRESE</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?</p><p>' . $seccion->getT_P_C() . '</p>';
                            };
                            if ($seccion->getD_C() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Comité interno CRESE</strong> en el <strong>Diseño (definir, el "C&oacute;mo se hace")</strong>?</p><p>' . $seccion->getT_D_C() . '</p>';
                            };
                            if ($seccion->getE_C() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Comité interno CRESE</strong> en la <strong>Ejecuci&oacute;n</strong>?</p><p>' . $seccion->getT_E_C() . '</p>';
                            };
                            if ($seccion->getR_C() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participa el <strong>Comité interno CRESE</strong> en la <strong>Revisi&oacute;n / Evaluaci&oacute;n</strong>?</p><p>' . $seccion->getT_R_C() . '</p>';
                            };

                            if ($seccion->getP_P() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participan las <strong>Personas en ALCANCE del programa</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?</p><p>' . $seccion->getT_P_P() . '</p>';
                            };
                            if ($seccion->getD_P() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participan las <strong>Personas en ALCANCE del programa</strong> en el <strong>Diseño (definir, el "C&oacute;mo se hace")</strong>?</p><p>' . $seccion->getT_D_P() . '</p>';
                            };
                            if ($seccion->getE_P() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participan las <strong>Personas en ALCANCE del programa</strong> en la <strong>Ejecuci&oacute;n</strong>?</p><p>' . $seccion->getT_E_P() . '</p>';
                            };
                            if ($seccion->getR_P() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participan las <strong>Personas en ALCANCE del programa</strong> en la <strong>Revisi&oacute;n / Evaluaci&oacute;n</strong>?</p><p>' . $seccion->getT_R_P() . '</p>';
                            };

                            if ($seccion->getP_O() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participan <strong>Otros grupos de interés más allá del ALCANCE del programa</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?</p><p>' . $seccion->getT_P_O() . '</p>';
                            };
                            if ($seccion->getD_O() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participan <strong>Otros grupos de interés más allá del ALCANCE del programa</strong> en el <strong>Diseño (definir, el "C&oacute;mo se hace")</strong>?</p><p>' . $seccion->getT_D_O() . '</p>';
                            };
                            if ($seccion->getE_O() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participan <strong>Otros grupos de interés más allá del ALCANCE del programa</strong> en la <strong>Ejecuci&oacute;n</strong>?</p><p>' . $seccion->getT_E_O() . '</p>';
                            };
                            if ($seccion->getR_O() == 1) {
                                $html = $html . '<p>¿C&oacute;mo participan <strong>Otros grupos de interés más allá del ALCANCE del programa</strong> en la <strong>Revisi&oacute;n / Evaluaci&oacute;n</strong>?</p><p>' . $seccion->getT_R_O() . '</p>';
                            };

                        }
                    }
                }
                if ($key == 9) {
                    foreach ($programa->getSeccion9() as $seccion) {
                        if ($seccion->getIdSeccion() == $key) {
                            $html = $html . "<h1>" . Datossecciones::Nombreseccion($seccion->getIdSeccion()) . "<h1>";
                            $html = $html . '
                                            <table class="cuadro" width="100%">
                                            <tr class="thtitle"><th>Métrica / Indicador</th>
                                            <th>Año '.$seccion->getAnio1().'</th><th>Año '.$seccion->getAnio2().'</th><th>Año '.$seccion->getAnio3().'</th><th>Año '.$seccion->getAnio4().'</th><th>Año '.$seccion->getAnio5().'</th>
                                            </tr>';
                            if ($seccion->getIndicador() != '') {
                                $html = $html . '<tr><td>' . $seccion->getIndicador() . '</td><td>' . $seccion->getIndA1a() . '</td><td>' . $seccion->getIndA2a() . '</td><td>' . $seccion->getIndA3a() . '</td><td>' . $seccion->getIndA4a() . '</td><td>' . $seccion->getIndA5a() . '</td></tr>';
                            }
                            if ($seccion->getIndicador2() != '') {
                                $html = $html . '<tr><td>' . $seccion->getIndicador2() . '</td><td>' . $seccion->getIndA1b() . '</td><td>' . $seccion->getIndA2b() . '</td><td>' . $seccion->getIndA3b() . '</td><td>' . $seccion->getIndA4b() . '</td><td>' . $seccion->getIndA5b() . '</td></tr>';
                            }
                            if ($seccion->getIndicador3() != '') {
                                $html = $html . '<tr><td>' . $seccion->getIndicador3() . '</td><td>' . $seccion->getIndA1c() . '</td><td>' . $seccion->getIndA2c() . '</td><td>' . $seccion->getIndA3c() . '</td><td>' . $seccion->getIndA4c() . '</td><td>' . $seccion->getIndA5c() . '</td></tr>';
                            }
                            if ($seccion->getIndicador4() != '') {
                                $html = $html . '<tr><td>' . $seccion->getIndicador4() . '</td><td>' . $seccion->getIndA1d() . '</td><td>' . $seccion->getIndA2d() . '</td><td>' . $seccion->getIndA3d() . '</td><td>' . $seccion->getIndA4d() . '</td><td>' . $seccion->getIndA5d() . '</td></tr>';
                            }
                            $html = $html . '</table>
                                            ';
                        }
                    }
                }

                if ($key == 11) {

                }

            }
        }

        //echo $html;
        //exit;
        $config = sfTCPDFPluginConfigHandler::loadConfig();
        $pdf = new sfTCPDF();
        $pdf->SetFont('FreeSerif', '', 8);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', '13'));
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $pdf->SetHeaderData('logokraft.jpg', 30, '', '');
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $this->html = $html;
        $pdf->writeHTML($this->html);
        $pdf->ln();
        $pdf->lastPage();

// ---------------------------------------------------------
        $archivo = $pdf->Output($pdfpath, 'S');

        //file_put_contents($pdfpath, $archivo);//to save pdf on the s

        $response = $this->getContext()->getResponse();
        $response->setHttpHeader('Pragma', '');
        $response->setHttpHeader('Cache-Control', '');
        $response->setHttpHeader('Content-Type', 'application/pdf');
        $response->setHttpHeader('Content-Disposition', 'attachment; filename="' . 'EvidenciaPrograma' . $programa->getIdPrograma() . '.pdf"');
        $response->setContent($archivo);
        $this->setLayout(false);

        return sfView::NONE;
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new programaForm();
    }

    public function executeNewcomite(sfWebRequest $request)
    {
        $this->comite = $request->getParameter('id_comite', 0);
        $this->requisito = $request->getParameter('id_requisito', 0);
        if ($this->comite != 0 && $this->requisito != 0) {
            $this->form = new programaForm();
            $this->setTemplate('new');
        }
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->comite = $request->getParameter('id_comite', 0);
        $this->requisito = $request->getParameter('id_requisito', 0);
        $this->form = new programaForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($programa = Doctrine::getTable('programa')->find(array($request->getParameter('id_programa'))), sprintf('Object programa does not exist (%s).', $request->getParameter('id_programa')));
        $this->comite = $request->getParameter('id_comite', 0);
        $this->requisito = $request->getParameter('id_requisito', 0);

        $this->form = new programaForm($programa);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($programa = Doctrine::getTable('programa')->find(array($request->getParameter('id_programa'))), sprintf('Object programa does not exist (%s).', $request->getParameter('id_programa')));
        $this->form = new programaForm($programa);
        $this->comite = $request->getParameter('id_comite', 0);
        $this->requisito = $request->getParameter('id_requisito', 0);
        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeArchivo(sfWebRequest $request)
    {
        $archivo = Doctrine::getTable('programa_anexos')->findOneByUrl(array($request->getParameter('archivo')));
        if ($archivo) {
            $programa = $archivo->getIdPrograma();
            unlink(sfConfig::get('sf_upload_dir').'/docs/'.$archivo->getUrl());
            $archivo->delete();
            $this->redirect('programa/show?id_programa=' . $programa);
        } else {
            $this->redirect('comite/index');
        }
        //$this->redirect('programa/index');
    }

    public function executeActarchivo(sfWebRequest $request)
    {
        $res = 0;
        $idanexo = $request->getParameter('idanexo', null);
        $nombre = trim($request->getParameter('nombre', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idanexo != null && $nombre != null) {
            $programa = Doctrine::getTable('programa_anexos')->findOneByIdAnexo($idanexo);
            if ($programa) {
                if (trim($programa->getNombre()) != $nombre) {
                    $programa->setNombre($nombre);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeAnexos(sfWebRequest $request)
    {
        $this->setLayout(false);
        $this->programas = Doctrine::getTable('programa_anexos')
            ->createQuery('a')
            ->where('a.id_programa = ?',$request->getParameter("programa"),0)
            ->execute();

        if($this->programas && count($this->programas)>0){
            $base=sfConfig::get('sf_upload_dir').'/docs/';
            $basezip=sfConfig::get('sf_upload_dir').'/zip/';
            //basename
            //$files = array('readme.txt', 'test.html', 'image.gif');

            $zipname = $this->programas[0]->getIdAnexo().'-anexos.zip';
            $zip = new ZipArchive;

            if ($zip->open($basezip.$zipname, ZipArchive::CREATE)) {
                foreach ($this->programas as $file) {
                    $zip->addFile($base.$file->getUrl(),basename($file->getUrl()));
                }
                $zip->close();

                $this->getResponse()->clearHttpHeaders();
                $this->getResponse()->setHttpHeader('Pragma: public', true);
                $this->getResponse()->setHttpHeader('Cache-Control', '');
                $this->getResponse()->setHttpHeader('Content-Type', 'application/zip');
                $this->getResponse()->setHttpHeader("Content-Description", "File Transfer");
                $this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename="'.$zipname.'"');
                $this->getResponse()->setHttpHeader("Content-Transfer-Encoding"," binary");
                $this->getResponse()->setHttpHeader("Content-Length","".filesize($basezip.$zipname));
                $this->getResponse()->sendHttpHeaders();
                $this->getResponse()->setContent(readfile($basezip.$zipname));






            }else{

            }

        }

        return sfView::NONE;

    }

    public function executeActarchivo1(sfWebRequest $request)
    {
        $res = 0;
        $idanexo = $request->getParameter('idanexo', null);
        $comentarios = trim($request->getParameter('comentarios', null));
        if ($request->isMethod('POST') && $request->isXmlHttpRequest() && $idanexo != null && $comentarios != null) {
            $programa = Doctrine::getTable('programa_anexos')->findOneByIdAnexo($idanexo);
            if ($programa) {
                if (trim($programa->getComentarios()) != $comentarios) {
                    $programa->setComentarios($comentarios);
                    $programa->save();
                    $res = 1;
                } else {
                    $res = 2;
                }
            }
        }
        $output = array(
            "status" => $res
        );
        $this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($programa = Doctrine::getTable('programa')->find(array($request->getParameter('id_programa'))), sprintf('Object programa does not exist (%s).', $request->getParameter('id_programa')));
        $comite = $programa->getIdComite();
        $programa->delete();
        $this->redirect('comite/show?id_comite=' . $comite);
        //$this->redirect('programa/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $programa = $form->save();
            $secciones = Datossecciones::todos();
            $i = 1;
            if($form->isNew()){
                foreach ($secciones as $seccion) {
                    if ($seccion == 'secciontxt') {
                        $s = new Programa_Seccion();
                        $s->setIdPrograma($programa->getIdPrograma());
                        $s->setIdSeccion($i);
                        $s->save();
                    }

                    if ($seccion == 'Seccion5') {
                        $s5 = new seccion5();
                        $s5->setIdPrograma($programa->getIdPrograma());
                        $s5->setIdSeccion(5);
                        $s5->save();
                    }
                    if ($seccion == 'Seccion6') {
                        $s6 = new seccion6();
                        $s6->setIdPrograma($programa->getIdPrograma());
                        $s6->setIdSeccion(6);
                        $s6->save();
                    }
                    if ($seccion == 'Seccion8') {
                        $s8 = new seccion8();
                        $s8->setIdPrograma($programa->getIdPrograma());
                        $s8->setIdSeccion(8);
                        $s8->save();
                    }
                    if ($seccion == 'Seccion9') {
                        $s9 = new seccion9();
                        $s9->setIdPrograma($programa->getIdPrograma());
                        $s9->setIdSeccion(9);
                        $s9->save();
                    }
                    $i++;
                }
            }




            $this->getUser()->setFlash('exito', 'El registro se actualizo correctamente');
            $this->redirect('comite/show?id_comite=' . $programa->getIdComite());
            //$this->redirect('comite/index');
        } else {
            $this->getUser()->setFlash('error', 'Ocurrio un error al procesar la solicitud');
        }

    }
}
