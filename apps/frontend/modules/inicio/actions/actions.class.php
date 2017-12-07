<?php

/**
 * inicio actions.
 *
 * @package    carpetavirtual
 * @subpackage inicio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        // $this->forward('default', 'module');
    }

    public function executeStatus(sfWebRequest $request)
    {
        // $this->forward('default', 'module');
        $comites = Doctrine::getTable('comite')
            ->createQuery('a')
            ->orderby('a.nombre_comite ASC')
            ->execute();
        $i = 1;
        $html = "<table><tr><td>No.</td><td>Comite</td><td>Programa</td><td>Avance</td></tr>";
        foreach ($comites as $comite) {
            $html .= "<tr><td>" . $i . "</td><td>" . $comite->getNombreComite() . "</td><td>" . $comite->getActualizado() . "</td><td>" . number_format($comite->getCalificacion(), 2) . "</td></tr>";
            $i++;
            /*foreach ($comite->getPrograma() as $programao) {
                $n = 6;
                $por = 100 / 6;
                $c = 0;
                foreach ($programao->getProgramaSeccion() as $programa) {
                    if (trim($programa->getTextContent()) != "") {
                        $c++;
                    }
                };
                if ($c > 6) {
                    $c = 6;
                };
                $html .= "<tr><td>" . $i . "</td><td>" . $comite->getNombreComite() . "</td><td>" . $programao->getNombre() . "</td><td>" . number_format($por * $c, 2) . "</td></tr>";
                $i++;
            }*/
        }
        $html .= "</table>";
        //$this->getResponse()->setContent(json_encode($output));
        $this->setLayout(false);
        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->setHttpHeader('Pragma: public', true);
        $this->getResponse()->setHttpHeader('Cache-Control', '');
        $this->getResponse()->setHttpHeader('Content-Type', 'application/vnd.ms-excel');
        $this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename="statusCV.xls"');
        $this->getResponse()->sendHttpHeaders();
        $this->getResponse()->setContent(utf8_decode($html));

        return sfView::NONE;
    }

    public function executeTabla(sfWebRequest $request)
    {
        $this->comites = Doctrine::getTable('comite')
            ->createQuery('a')
            ->orderby('a.nombre_comite ASC')
            ->execute();

        $this->requisito = Doctrine::getTable('Requisito')
            ->createQuery('a')
            ->execute();

        $this->minimo=Doctrine::getTable('seccion11')
            ->createQuery('b')
            ->execute();

    }

    public function executeTablacomite(sfWebRequest $request)
    {
        $this->idcomite=$request->getParameter("idc",0);

        $this->comites = Doctrine::getTable('Comite')
            ->createQuery('a')
            ->where('a.id_comite = ?',$this->idcomite )
            ->orderby('a.nombre_comite ASC')
            ->execute();

        $this->requisito = Doctrine::getTable('Requisito')
            ->createQuery('a')
            ->execute();

        $this->minimo=Doctrine::getTable('seccion11')
            ->createQuery('b')
            ->where('b.id_comite = ?',$this->idcomite)
            ->execute();

        $this->setLayout(false);

    }

}
