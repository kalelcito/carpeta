<?php

/**
 * comite actions.
 *
 * @package    carpetavirtual
 * @subpackage comite
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comiteActions extends sfActions
{
    public function preExecute()
    {
        $this->getUser()->setSeccion(1);
    }

    public function executeDtlist(sfWebRequest $request)
    {
        sfContext::getInstance()->getConfiguration()->loadHelpers('Url');

        $sino = array(sfConfig::get('app_template_no'), sfConfig::get('app_template_si'));
        
        $columns = array('id_comite', 'id_unidad', 'nombre_comite', 'creado', 'id_usuario_presidente',);
        $table = 'comite';
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
                '<a href="' . url_for('comite/show?id_comite=' . $v->getIdComite()) . '">' . $v->getIdComite() . '</a>',
                $v->getIdUnidad(),
                $v->getNombreComite(),
                $v->getCreado(),
                $v->getIdUsuarioPresidente(),
                '<div class="btn-group btn-group-xs">
                    <a href="' . url_for('comite/show?id_comite=' . $v->getIdComite()) . '" data-toggle="tooltip" title="Ver" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="' . url_for('comite/edit?id_comite=' . $v->getIdComite()) . '" data-toggle="tooltip" title="Editar" class="btn btn-default">
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
                $this->comites = Doctrine::getTable('comite')
                    ->createQuery('a')
                    ->orderby('a.nombre_comite ASC')
                    ->execute();
            }
            if (Privilegios::consultor($this->getUser()->getRol())) {
                $this->comites = Doctrine::getTable('comite')
                    ->createQuery('a')
                    ->innerJoin('a.unidad f')
                    ->where('f.id_consultor = ?', $this->getUser()->getIdusuario())
                    ->orderby('a.nombre_comite ASC')
                    ->execute();
            }
            if (Privilegios::gerente($this->getUser()->getRol())) {
                $this->comites = Doctrine::getTable('comite')
                    ->createQuery('a')
                    ->innerJoin('a.unidad f')
                    ->where('f.id_gerente = ?', $this->getUser()->getIdusuario())
                    ->orderby('a.nombre_comite ASC')
                    ->execute();
            }
            if (Privilegios::presidentecomite($this->getUser()->getRol())) {
                $this->comites = Doctrine::getTable('comite')
                    ->createQuery('a')
                    ->innerJoin('a.unidad f')
                    ->where('a.id_usuario_presidente = ?', $this->getUser()->getIdusuario())
                    ->orderby('a.nombre_comite ASC')
                    ->execute();
            }
            if (Privilegios::solocomite($this->getUser()->getRol())) {
                $this->comites = Doctrine::getTable('comite')
                    ->createQuery('a')
                    ->innerJoin('a.Usuariocom u ON a.id_comite=u.id_comite')
                    ->where('u.id_usuario = ?', $this->getUser()->getIdusuario())
                    ->orderby('a.nombre_comite ASC')
                    ->execute();
            }
            if (Privilegios::directorgral($this->getUser()->getRol()) || Privilegios::subdirector($this->getUser()->getRol())) {
                $this->comites = Doctrine::getTable('comite')
                    ->createQuery('a')
                    ->innerJoin('a.unidad f')
                    ->where('f.id_empresa = ?', $this->getUser()->getIdempresa())
                    ->orderby('a.nombre_comite ASC')
                    ->execute();
            }
            if (Privilegios::vicepresidente($this->getUser()->getRol())) {
                $this->comites = Doctrine::getTable('comite')
                    ->createQuery('a')
                    ->innerJoin('a.Usuariocom u ON a.id_comite=u.id_comite')
                    ->where('u.id_usuario = ?', $this->getUser()->getIdusuario())
                    ->orderby('a.nombre_comite ASC')
                    ->execute();
            }
        }
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->arrivo = Doctrine::getTable('seccion11')
            ->createQuery('a')
            ->execute();

        $this->comite = Doctrine::getTable('comite')->find(array($request->getParameter('id_comite')));
        $this->forward404Unless($this->comite);

        $minimos = Doctrine::getTable('seccion11')->findOneByIdComite($this->comite->getIdComite());
        $this->estado = new Seccion11Form($minimos);

        $this->requisito = Doctrine::getTable('Requisito')
            ->createQuery('a')
            ->execute();

        /*$this->estado = new Seccion11Form();*/

    }

    public function executeMinimo(sfWebRequest $request)
    {

        //if ($request->isMethod(sfRequest::POST)){
            $estado =$request->getParameter("seccion11");

            $comite = Doctrine::getTable('seccion11')->find(array($estado["id_ps"]));
            $val=array("true"=>1,"false"=>0);

            $this->form = new seccion11Form($comite);
            $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));

            if ($this->form->isValid()){
               //$resultado=  $this->form->save();
                if(isset($estado["min_a1"])){$comite->setMinA1($val[$estado["min_a1"]]);};
                if(isset($estado["min_b1"])){$comite->setMinB1($val[$estado["min_b1"]]);};
                if(isset($estado["min_c1"])){$comite->setMinC1($val[$estado["min_c1"]]);};
                if(isset($estado["min_d1"])){$comite->setMinD1($val[$estado["min_d1"]]);};
                if(isset($estado["min_e1"])){$comite->setMinE1($val[$estado["min_e1"]]);};
                if(isset($estado["min_a2"])){$comite->setMinA2($val[$estado["min_a2"]]);};

                if(isset($estado["min_a3"])){$comite->setMinA3($val[$estado["min_a3"]]);};
                if(isset($estado["min_a4"])){$comite->setMinA4($val[$estado["min_a4"]]);};
                if(isset($estado["min_a5"])){$comite->setMinA5($val[$estado["min_a5"]]);};
                if(isset($estado["min_b5"])){$comite->setMinB5($val[$estado["min_b5"]]);};
                if(isset($estado["min_c5"])){$comite->setMinC5($val[$estado["min_c5"]]);};
                if(isset($estado["min_d5"])){$comite->setMinD5($val[$estado["min_d5"]]);};

                if(isset($estado["min_e5"])){$comite->setMinE5($val[$estado["min_e5"]]);};
                if(isset($estado["min_f5"])){$comite->setMinF5($val[$estado["min_f5"]]);};
                if(isset($estado["min_g5"])){$comite->setMinG5($val[$estado["min_g5"]]);};
                if(isset($estado["min_a6"])){$comite->setMinA6($val[$estado["min_a6"]]);};
                if(isset($estado["min_b6"])){$comite->setMinB6($val[$estado["min_b6"]]);};
                if(isset($estado["min_c6"])){$comite->setMinC6($val[$estado["min_c6"]]);};

                if(isset($estado["min_a7"])){$comite->setMinA7($val[$estado["min_a7"]]);};
                if(isset($estado["min_b7"])){$comite->setMinB7($val[$estado["min_b7"]]);};
                if(isset($estado["min_a8"])){$comite->setMinA8($val[$estado["min_a8"]]);};
                if(isset($estado["min_b8"])){$comite->setMinB8($val[$estado["min_b8"]]);};
                if(isset($estado["min_a9"])){$comite->setMinA9($val[$estado["min_a9"]]);};
                if(isset($estado["min_b9"])){$comite->setMinB9($val[$estado["min_b9"]]);};

                if(isset($estado["min_c9"])){$comite->setMinC9($val[$estado["min_c9"]]);};
                if(isset($estado["min_d9"])){$comite->setMinD9($val[$estado["min_d9"]]);};
                if(isset($estado["min_e9"])){$comite->setMinE9($val[$estado["min_e9"]]);};
                if(isset($estado["min_a10"])){$comite->setMinA10($val[$estado["min_a10"]]);};
                if(isset($estado["min_a11"])){$comite->setMinA11($val[$estado["min_a11"]]);};

                if(isset($estado["min_a16"])){$comite->setMinA16($val[$estado["min_a16"]]);};
                if(isset($estado["min_a17"])){$comite->setMinA17($val[$estado["min_a17"]]);};
                if(isset($estado["min_b17"])){$comite->setMinB17($val[$estado["min_b17"]]);};
                if(isset($estado["min_a19"])){$comite->setMinA19($val[$estado["min_a19"]]);};
                if(isset($estado["min_a24"])){$comite->setMinA24($val[$estado["min_a24"]]);};
                if(isset($estado["min_a25"])){$comite->setMinA25($val[$estado["min_a25"]]);};
                if(isset($estado["min_b25"])){$comite->setMinB25($val[$estado["min_b25"]]);};
                $comite->save();
            }

            $comite2 = Doctrine::getTable('Comite')->find(array($estado["id_comite"]));
            if ($comite->getMinA1()==1){
                if ($comite->getMinB1()==1){
                    if ($comite->getMinC1()==1){
                        if ($comite->getMinD1()==1){
                            if ($comite->getMinE1()==1){
                                if ($comite->getMinA2()==1){
                                    if ($comite->getMinA3()==1){
                                        if ($comite->getMinA4()==1){
                                            if ($comite->getMinA5()==1){
                                                if ($comite->getMinB5()==1){
                                                    if ($comite->getMinC5()==1){
                                                        if ($comite->getMinD5()==1){
                                                            if ($comite->getMinE5()==1){
                                                                if ($comite->getMinF5()==1){
                                                                    if ($comite->getMinG5()==1){
                                                                        if ($comite->getMinA6()==1){
                                                                            if ($comite->getMinB6()==1){
                                                                                if ($comite->getMinC6()==1){
                                                                                    if ($comite->getMinA7()==1){
                                                                                        if ($comite->getMinB7()==1){
                                                                                            if ($comite->getMinA8()==1){
                                                                                                if ($comite->getMinB8()==1){
                                                                                                    if ($comite->getMinA9()==1){
                                                                                                        if ($comite->getMinB9()==1){
                                                                                                            if ($comite->getMinC9()==1){
                                                                                                                if ($comite->getMinD9()==1){
                                                                                                                    if ($comite->getMinE9()==1){
                                                                                                                        if ($comite->getMinA10()==1){
                                                                                                                            if ($comite->getMinA11()==1){
                                                                                                                                if ($comite->getMinA16()==1){
                                                                                                                                    if ($comite->getMinA17()==1){
                                                                                                                                        if ($comite->getMinB17()==1){
                                                                                                                                            if ($comite->getMinA19()==1){
                                                                                                                                                if ($comite->getMinA24()==1){
                                                                                                                                                    if ($comite->getMinA25()==1){
                                                                                                                                                        if ($comite->getMinB25()==1){
                                                                                                                                                            $comite2->setMinimos(1);
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $comite2->save();
       // }

        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeModalc(sfWebRequest $request)
    {
        $idc=$request->getParameter("idc",0);
        $idr=$request->getParameter("idr",0);

        if($idc!=0 && $idr!=0){
            $comite = Doctrine::getTable('seccion11')->findOneByIdComite($idc);
            $estado = new Seccion11Form($comite);
            if($idr==1){
            $output= "<div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-10\">
                                <p> Como mínimo se requiere(aspectos mínimos auditables no limitativos).</p>
                                <ul style=\"text-align: justify;\">
                                    <li>a) Que esté formado por al menos tres personas incluyendo el Coordinador General.</li>

                                    <li>b) Que sea multidisciplinario y representativo del personal de la empresa u organización.</li>

                                    <li>c) Que se reúna por lo menos una vez cada mes para analizar la forma de mejorar
                                        continuamente la Calidad Humana y Responsabilidad Social de la empresa u organización.</li>

                                    <li>d) Que tenga un plan anual que sirva como guía para sus reuniones mensuales.</li>

                                    <li>e) Que sea haga responsable de atender, programar, implementar y dar seguimiento
                                        a las acciones correctivas y preventivas de las auditorías internas y externas.</li>
                                </ul>
                            </div>
                            <div class=\"col-lg-2\">
                                <form class=\"form-inline\">
                                    <br/>
                                    <div class=\"checkbox_list\" id=\"calificacion\">
                                        <div class=\"checkbox\">
                                            <label>".$estado['min_a1']->render()." a</label>
                                        </div><br/>
                                        <div class=\"checkbox\">
                                            <label>".$estado['min_b1']->render()." b</label>
                                        </div><br/>
                                        <div class=\"checkbox\">
                                            <label>".$estado['min_c1']->render()." c</label>
                                        </div><br/>
                                        <div class=\"checkbox\">
                                            <label>".$estado['min_d1']->render()." d</label>
                                        </div><br/>
                                        <div class=\"checkbox\">
                                            <label>".$estado['min_e1']->render()." e</label>
                                            ".$estado->renderHiddenFields()."
                                        </div>
                                        <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                        <i class=\"fa fa-save\"></i>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                      </div>";
            }else if($idr==2){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que la política exprese la filosofía o forma de pensar de la
                                            empresa u organización con respecto su Calidad Humana y Responsabilidad Social.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a2']->render()." a</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if($idr==3){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se cuente con un manual-guía que haga clara referencia al
                                            lugar donde se encuentran las prácticas que sirvan para dar cumplimiento a los pre-requisitos y requisitos de esta Norma.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a3']->render()." a</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==4){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se elabore y publique un informe anual que contenga la descripción
                                            de las prácticas de Calidad Humana y Responsabilidad Social más relevantes
                                            del último año de la empresa u organización, con indicadores y testimonios.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a4']->render()." a</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==5){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se realice al menos una auditoría interna completa al año,
                                            con sus respectivas acciones correctivas y/o preventivas debidamente
                                            cerradas para garantizar que el Sistema de Gestión está funcionando
                                            adecuadamente.</ol>
                                        <ol>b) Que se realicen las auditorías de seguimiento necesarias por
                                            los mismos auditores para asegurar el cumplimiento de las acciones
                                            correctivas determinadas por el Comité de Calidad Humana y
                                            Responsabilidad Social, derivadas de las auditorías internas.</ol>
                                        <ol>c) Que se determinen acciones preventivas por el comité de Calidad
                                            Humana y Responsabilidad Social derivadas de las auditorías internas
                                            y externas. NORMA CRESE 2014 27</ol>
                                        <ol>d) Que los auditores internos sean personal de la misma empresa
                                            u organización.</ol>
                                        <ol>e) Que los auditores internos sean independientes del Comité Interno,
                                            que es el organismo a través del cual se audita a la empresa u
                                            organización.</ol>
                                        <ol>f) Que la base de la auditoría sea este Manual Guía de Implementación
                                            del Sistema de Gestión de Calidad Humana y Responsabilidad Social
                                            actualizado, sin que este sea limitante.</ol>
                                        <ol>g) Que se asegure que los reportes de auditorías los conozca el
                                            Director General.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a5']->render()." a</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_b5']->render()." b</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_c5']->render()." c</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_d5']->render()." d</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_e5']->render()." e</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_f5']->render()." f</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_g5']->render()." g</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==6){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se cuente con un estudio de gastos e ingresos, que se
                                            renueve al menos una vez al año, del personal de tiempo completo
                                            que menor salario recibe (Principio de Necesidad). Como salvedad,
                                            en caso que no se pueda cumplir con este estudio, se requiere un
                                            análisis de la distancia que existe entre el 5% del personal de
                                            tiempo completo que más ingreso recibe versus el 5% del personal
                                            de tiempo completo que menos ingreso recibe y que esta distancia
                                            no sea mayor a 20 veces. </ol>
                                        <ol>b) Que se cuente algún mecanismo para identificar, reconocer y
                                            promover la dedicación y los resultados del personal en su propio
                                            beneficio y de la empresa u organización (Principio de Contribución
                                            o equidad).</ol>
                                        <ol>c) Cuando aplique, solo para empresas mercantiles, que en el cálculo
                                            del “Balance Trabajo-Capital”, de acuerdo con la fórmula que se
                                            muestra a continuación, se cuente con un mínimo de 50% promediando
                                            los tres últimos años (Principio de balance entre el trabajo y el
                                            capital).</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a6']->render()." a</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_b6']->render()." b</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_c6']->render()." c</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==7){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Existencia de mecanismos para prevenir, controlar y dar seguimiento
                                            a actos de corrupción, extorsión y robo o abuso de confianza en
                                            contra de la empresa u organización, por parte del personal u otros
                                            grupos de interés. </ol>
                                        <ol>b) Que se cuente con una lista de todas las leyes, reglamentos y
                                            normas que apliquen para la actividad de la empresa u organización,
                                            además de mecanismos que garanticen su conocimiento.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a7']->render()." a</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_b7']->render()." b</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==8){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se cuente con un botiquín de primeros auxilios en las instalaciones
                                            de la empresa u organización.</ol>
                                        <ol>b) Evidencia de la existencia de planes y programas de capacitación
                                            y adiestramiento, justificando el conocimiento general del personal
                                            y visitantes en relación con la salud en el trabajo.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a8']->render()." a</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_b8']->render()." b</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==9){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Evidencia de la existencia de Comisión Mixta de Seguridad e Higiene
                                            y Salud en el trabajo o equivalente, recorridos mensuales, identificación
                                            de riesgos, seguimiento a las observaciones realizadas en las actas
                                            que realiza la comisión.</ol>
                                        <ol>b) Evidencia del manejo que se da a los materiales y sustancias
                                            peligrosas (cuando exista).</ol>
                                        <ol>c) Evidencia del seguimiento y control personalizado de accidentes
                                            en la empresa u organización, así como la verificación del comportamiento
                                            del grado de riesgo. </ol>
                                        <ol>d) Evidencia de la existencia de planes y programas de capacitación
                                            y adiestramiento, justificando el conocimiento general del personal
                                            y visitantes en relación con la seguridad.</ol>
                                        <ol>e) Estudios de ruido, iluminación y ventilación (cuando aplique).</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a9']->render()." a</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_b9']->render()." b</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_c9']->render()." c</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_d9']->render()." d</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_e9']->render()." e</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==10){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Evidencia de la existencia de Comisión Mixta de Seguridad e
                                            Higiene y Salud en el trabajo o equivalente, recorridos mensuales,
                                            identificación de riesgos, seguimiento a las observaciones realizadas
                                            en las actas que realiza la comisión.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a10']->render()." a</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==11){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que existan planes y programas de capacitación y adiestramiento,
                                            justificando el conocimiento general de los trabajadores y visitantes
                                            en relación con la seguridad y salud en el trabajo.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a11']->render()." a</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==16){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Una lista de personal separado de la empresa u organización
                                            en el año anterior y explicación detallada del motivo y trato a
                                            su salida.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a16']->render()." a</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==17){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se presente evidencia convincente de no discriminación en
                                            la contratación y despido de personal por razón de su edad, origen,
                                            sexo, condición física o mental.</ol>
                                        <ol>b) Que se cumpla con el 5% de personal de condiciones especiales
                                            en la misma empresa o con el apoyo de otras organizaciones que se
                                            solidaricen y que puedan contratar personal con estas características.<br/>
                                            En este caso se requiere un documento que evidencie el acuerdo de
                                            apoyarse mutuamente y el cálculo tomando en cuenta al personal de
                                            las organizaciones que participan.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a17']->render()." a</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_b17']->render()." b</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==19){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se asegure que existen garantías a los Derechos Humanos y
                                            Laborales del personal de sus proveedores de bienes y servicios.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a19']->render()." a</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==24){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se cuente con una lista de valores y una herramienta que permita detectar las fallas en su práctica.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a24']->render()." a</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }else if ($idr==25){
                $output="<div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-10\">
                                    <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                    <ul style=\"text-align: justify;\">
                                        <ol>a) Que se cuente con un programa que promueva, canalice y de
                                            seguimiento a las ideas o propuestas de todo el personal para hacer
                                            más congruente, ética y humanizantes a la empresa u organización.</ol>
                                        <ol>b) Que exista una práctica que atienda al menos algún aspecto de
                                            los mencionados en la lista anterior.</ol>
                                    </ul>
                                </div>
                                <div class=\"col-lg-2\">
                                    <form class=\"form-inline\">
                                        <br/>
                                        <div class=\"checkbox_list\" id=\"calificacion\">
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_a25']->render()." a</label>
                                            </div><br/>
                                            <div class=\"checkbox\">
                                                <label>".$estado['min_b25']->render()." b</label>
                                                ".$estado->renderHiddenFields()."
                                            </div>
                                            <span class=\"input-group-addon\" id=\"btncalificacion\" style=\"display: none;cursor: pointer;\">
                                            <i class=\"fa fa-save\"></i>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }
            $this->getResponse()->setContent($output);
        }
        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new comiteForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new comiteForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($comite = Doctrine::getTable('comite')->find(array($request->getParameter('id_comite'))), sprintf('Object comite does not exist (%s).', $request->getParameter('id_comite')));
        $this->form = new comiteForm($comite);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($comite = Doctrine::getTable('comite')->find(array($request->getParameter('id_comite'))), sprintf('Object comite does not exist (%s).', $request->getParameter('id_comite')));
        $this->form = new comiteForm($comite);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($comite = Doctrine::getTable('comite')->find(array($request->getParameter('id_comite'))), sprintf('Object comite does not exist (%s).', $request->getParameter('id_comite')));
        $comite->delete();

        $this->redirect('comite/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $comite = $form->save();

        if ($form->isNew()){

            $nombreseccion11=new seccion11();
            $nombreseccion11->setIdComite($comite->getIdComite());
            $nombreseccion11->setIdSeccion(11);
            $nombreseccion11->save();

        }

            $this->getUser()->setFlash('exito', 'El registro se actualizo correctamente');
            //$this->redirect('comite/edit?id_comite='.$comite->getIdComite());
            $this->redirect('comite/index');
        } else {
            $this->getUser()->setFlash('error', 'Ocurrio un error al procesar la solicitud');
        }
    }
}
