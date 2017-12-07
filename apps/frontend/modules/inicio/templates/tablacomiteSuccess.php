<?php foreach ($comites as $comite) {
    include_component('inicio', 'comite', array('comite'=>$comite, 'requisito'=>$requisito, 'idc'=>$comite->getIdComite())) ;
               } ?>