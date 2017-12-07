<?php

class inicioComponents extends sfComponents
{
    public function executeComite()
    {
        $this->minimo=Doctrine::getTable('seccion11')->findOneByIdComite($this->idc);

        $this->estado = new Seccion11Form($this->minimo);
    }
}