<?php $smleft = 2;
$smright = 10;
?>

<script>
$(document).ready(function(){
    $("#calificacion1 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion1 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion1 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;

        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion2 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion2 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion2 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion3 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion3 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion3 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion4 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion4 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion4 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion5 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion5 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion5 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });


    $("#calificacion6 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion6 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion6 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion7 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion7 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion7 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion8 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion8 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion8 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion9 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion9 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion9 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion10 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion10 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion10 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion11 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion11 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion11 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion16 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion16 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion16 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion17 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion17 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion17 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion19 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion19 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion19 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion24 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion24 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion24 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });

    $("#calificacion25 input[type='checkbox']").on('change',function(){

        var value =  $("#calificacion25 input:not([type='checkbox'])").serialize();
        var str1=$("#calificacion25 input[type='checkbox']").map(function(){return this.name+"="+this.checked;}).get().join("&");
        if(str1!="" && value!="") value+="&"+str1;
        else value+=str1;
        $.ajax({
            url: "<?php echo url_for('comite/minimo') ?>",
            type: 'POST',
            data: value,
            cache: false,
            success: function (data) {
                //location.reload();
                //alert("enviado");
            }
        });
        return false;
    });


});
</script>



<div class="content-wrapper">
    <?php include_partial('inicio/navegacion', array('titulo' => 'comite', 'subtitulo' => 'Ver comite')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Requisitos de la Norma CRESE</h3>
                <h4><strong>Comite:</strong> <?php echo $comite->getNombreComite() ?></h4>
                <input type="button" value="Actualizar" onClick="window.location.reload()" style="float: right; background-color: #112de7; border: none; border-radius: 4px; color: #FFFFFF">
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="15%" <?php if (Privilegios::agregarprograma($sf_user->getRol())) { } else { echo ' colspan="2"';} ?> >Requisito (Nombre abreviado)</th>
                        <th width="35%" style="text-align:center;">Minimos</th>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) { ?>
                            <th>&nbsp;</th>
                        <?php } ?>
                        <th colspan="3">
                            <span style="width: 100%;display: block;margin-bottom:5px;float:left;">
                                <span style="width: 65%; text-align: center; float:left; margin-right: 5px;">
                                    Programa
                                </span>
                                <span style="width: 56px; text-align: center; float: left; margin-right: 2%;">
                                    Calificación
                                </span>
                                <span style="width: 56px; text-align: center; float: right; margin-right: 1%;">
                                    Avance
                                </span>
                            </span>
                        </th>
                        <!--<th width="5%" style="text-align:center;">Calificación</th>
                        <th width="10%" style="text-align:center;">Avance</th>-->
                        <!--<th width="5%">&nbsp;</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php $descrip= "Que la Dirección asigne a un Comité Interno la responsabilidad de asesorar en Calidad Humana y Responsabilidad Social a la empresa u organización." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[0]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion1">
                                            <p> Como mínimo se requiere(aspectos mínimos auditables no limitativos).</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a1']->render()?> a) Que esté formado por al menos tres personas incluyendo el Coordinador General.</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b1']->render()?> b) Que sea multidisciplinario y representativo del personal de la empresa u organización.</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_c1']->render()?> c) Que se reúna por lo menos una vez cada mes para analizar la forma de mejorar
                                                                continuamente la Calidad Humana y Responsabilidad Social de la empresa u organización.</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_d1']->render()?> d) Que tenga un plan anual que sirva como guía para sus reuniones mensuales.</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_e1']->render()?> e) Que sea haga responsable de atender, programar, implementar y dar seguimiento
                                                                a las acciones correctivas y preventivas de las auditorías internas y externas.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) { echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[0]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[0]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                        <!--<td>
                            <?php
/*                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[0]->getIdRequisito()) {
                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green'";
                                    }
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;text-align: center;">
                                            <span '.$estilo.'  style="width: 60px; text-align: center;">' . $programa->getCalificacion() . '</span>
                                           </span>';
                                }
                            } */?>
                        </td>
                        <td>
                            <?php
/*                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[0]->getIdRequisito()) {
                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left;">
                                            <span style="width: 40%;float:left;">
                                              <div class="progress progress-xs progress-striped active">
                                               <div class="progress-bar progress-bar-success" style="width: ' . number_format($por * $c, 2) . '%"></div> 
                                              </div>
                                            </span>
                                            <span class="badge bg-green" style="margin-left: 10px; width: 60px; float:right;">' . number_format($por * $c, 2) . '%</span>
                                           </span>';
                                }
                            } */?>
                        </td>-->
                    </tr>
                    <tr>
                        <?php $descrip= "Que se cuente con una Política de Calidad Humana y Responsabilidad Social." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[1]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion2">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a2']->render()?> a) Que la política exprese la filosofía o forma de pensar de la
                                                                empresa u organización con respecto su Calidad Humana y Responsabilidad Social.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[1]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[1]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Manual de Políticas y Prácticas de Calidad Humana y Responsabilidad Social." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[2]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion3">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a3']->render()?> a) Que se cuente con un manual-guía que haga clara referencia al
                                                                lugar donde se encuentran las prácticas que sirvan para dar cumplimiento a los pre-requisitos y requisitos de esta Norma.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[2]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[2]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se elabore un Informe Anual de Calidad Humana y Responsabilidad Social y que se entregue a los diferentes grupos de interés de la empresa u organización." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[3]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion4">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a4']->render()?> a) Que se elabore y publique un informe anual que contenga la descripción
                                                                de las prácticas de Calidad Humana y Responsabilidad Social más relevantes
                                                                del último año de la empresa u organización, con indicadores y testimonios.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) { echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[3]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[3]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa anual de auditorías internas con el fin de garantizar el cumplimiento y continuidad de las prácticas de Calidad Humana y Responsabilidad Social." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[4]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion5">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                            <li>
                                                <div class="checkbox">
                                                    <label><?php echo $estado['min_a5']->render()?> a) Que se realice al menos una auditoría interna completa al año,
                                                        con sus respectivas acciones correctivas y/o preventivas debidamente
                                                        cerradas para garantizar que el Sistema de Gestión está funcionando
                                                        adecuadamente.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label><?php echo $estado['min_b5']->render()?> b) Que se realicen las auditorías de seguimiento necesarias por
                                                        los mismos auditores para asegurar el cumplimiento de las acciones
                                                        correctivas determinadas por el Comité de Calidad Humana y
                                                        Responsabilidad Social, derivadas de las auditorías internas.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label><?php echo $estado['min_c5']->render()?> c) Que se determinen acciones preventivas por el comité de Calidad
                                                        Humana y Responsabilidad Social derivadas de las auditorías internas y externas. NORMA CRESE 2014 27</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label><?php echo $estado['min_d5']->render()?> d) Que los auditores internos sean personal de la misma empresa
                                                        u organización.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label><?php echo $estado['min_e5']->render()?> e) Que los auditores internos sean independientes del Comité Interno,
                                                        que es el organismo a través del cual se audita a la empresa u
                                                        organización.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label><?php echo $estado['min_f5']->render()?> f) Que la base de la auditoría sea este Manual Guía de Implementación
                                                        del Sistema de Gestión de Calidad Humana y Responsabilidad Social
                                                        actualizado, sin que este sea limitante.</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label><?php echo $estado['min_g5']->render()?> g) Que se asegure que los reportes de auditorías los conozca el
                                                        Director General.</label>
                                                    <?php echo $estado->renderHiddenFields()?>
                                                </div>
                                            </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[4]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[4]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un programa de justicia salarial que cumpla con los principios de necesidad, contribución y orden económico." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[5]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion6">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                            <div class="checkbox_list">
                                                <li>
                                                    <div class="checkbox">
                                                        <label><?php echo $estado['min_a6']->render()?> a) Que se cuente con un estudio de gastos e ingresos, que se
                                                            renueve al menos una vez al año, del personal de tiempo completo
                                                            que menor salario recibe (Principio de Necesidad). Como salvedad,
                                                            en caso que no se pueda cumplir con este estudio, se requiere un
                                                            análisis de la distancia que existe entre el 5% del personal de
                                                            tiempo completo que más ingreso recibe versus el 5% del personal
                                                            de tiempo completo que menos ingreso recibe y que esta distancia
                                                            no sea mayor a 20 veces.</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <label><?php echo $estado['min_b6']->render()?> b) Que se cuente algún mecanismo para identificar, reconocer y
                                                            promover la dedicación y los resultados del personal en su propio
                                                            beneficio y de la empresa u organización (Principio de Contribución
                                                            o equidad).</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <label><?php echo $estado['min_c6']->render()?> c) Cuando aplique, solo para empresas mercantiles, que en el cálculo
                                                            del “Balance Trabajo-Capital”, de acuerdo con la fórmula que se
                                                            muestra a continuación, se cuente con un mínimo de 50% promediando
                                                            los tres últimos años (Principio de balance entre el trabajo y el
                                                            capital).</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                </li>
                                            </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[5]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[5]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa para promover la cultura de la legalidad en las empresas y organizaciones, con su personal y grupos de interés, enfocado en un plan de acciones preventivas." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[6]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion7">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list" id="calificacion">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a7']->render()?> a) Existencia de mecanismos para prevenir, controlar y dar seguimiento
                                                                a actos de corrupción, extorsión y robo o abuso de confianza en
                                                                contra de la empresa u organización, por parte del personal u otros
                                                                grupos de interés.</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b7']->render()?> b) Que se cuente con una lista de todas las leyes, reglamentos y
                                                                normas que apliquen para la actividad de la empresa u organización,
                                                                además de mecanismos que garanticen su conocimiento.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[6]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[6]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover la salud del personal y otros grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[7]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion8">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a8']->render()?> a) Que se cuente con un botiquín de primeros auxilios en las instalaciones
                                                                de la empresa u organización.</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b8']->render()?> b) Evidencia de la existencia de planes y programas de capacitación
                                                                y adiestramiento, justificando el conocimiento general del personal
                                                                y visitantes en relación con la salud en el trabajo.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[7]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[7]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover la seguridad del personal y otros grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[8]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion9">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a9']->render()?> a) Evidencia de la existencia de Comisión Mixta de Seguridad e Higiene
                                                                y Salud en el trabajo o equivalente, recorridos mensuales, identificación
                                                                de riesgos, seguimiento a las observaciones realizadas en las actas
                                                                que realiza la comisión.</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b9']->render()?> b) Evidencia del manejo que se da a los materiales y sustancias
                                                                peligrosas (cuando exista).</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_c9']->render()?> c) Evidencia del seguimiento y control personalizado de accidentes
                                                                en la empresa u organización, así como la verificación del comportamiento
                                                                del grado de riesgo.</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_d9']->render()?> d) Evidencia de la existencia de planes y programas de capacitación
                                                                y adiestramiento, justificando el conocimiento general del personal
                                                                y visitantes en relación con la seguridad.</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_e9']->render()?> e) Estudios de ruido, iluminación y ventilación (cuando aplique).</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[8]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[8]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover el orden y limpieza de las instalaciones de la empresa u organización." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[9]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a10']->render()?> a) Evidencia de la existencia de Comisión Mixta de Seguridad e
                                                                Higiene y Salud en el trabajo o equivalente, recorridos mensuales,
                                                                identificación de riesgos, seguimiento a las observaciones realizadas
                                                                en las actas que realiza la comisión.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[9]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[9]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>

                    <tr>
                        <?php $descrip = "Que se cuente con un Programa de capacitación para el personal en áreas propias de su actividad en el trabajo."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[10]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion11">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list" id="calificacion">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a11']->render()?> a) Que existan planes y programas de capacitación y adiestramiento,
                                                                justificando el conocimiento general de los trabajadores y visitantes
                                                                en relación con la seguridad y salud en el trabajo.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[10]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[10]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa de preparación académica para el personal." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[11]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[11]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[11]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover, canalizar y dar seguimiento a las ideas, propuestas o compromisos concretos de todo el personal y otros grupos de interés para hacer más eficiente o productiva a la empresa u organización."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip?>"><?php echo $requisito[12]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[12]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[12]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa que contribuya a mejorar las condiciones de vida de las familias del personal más allá de lo material."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[13]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[13]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[13]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa para estructurar la actividad laboral de modo que se favorezca la integración de las familias, especialmente en el caso de las madres solteras con hijos menores de edad." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[14]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[14]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[14]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa para dar orientación y apoyo a las personas que sean separadas de su trabajo que no hayan actuado con dolo, negligencia o mala fe, para que puedan encontrar otra fuente de ingresos con menor dificultad."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[15]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion16">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list" id="calificacion">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a16']->render()?> a) Una lista de personal separado de la empresa u organización
                                                                en el año anterior y explicación detallada del motivo y trato a
                                                                su salida.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[15]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[15]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista en la empresa u organización un programa de no discriminación para personas de grupos vulnerables por su edad, origen, condición física o mental (por ejemplo, mayores a 60 años, personal indígena, discapacitados o mujeres embarazadas)."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[16]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion17">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a17']->render()?> a) Que se presente evidencia convincente de no discriminación en
                                                                la contratación y despido de personal por razón de su edad, origen,
                                                                sexo, condición física o mental.</label>
                                                        </div
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b17']->render()?> b) Que se cumpla con el 5% de personal de condiciones especiales
                                                                en la misma empresa o con el apoyo de otras organizaciones que se
                                                                solidaricen y que puedan contratar personal con estas características.<br/>
                                                                En este caso se requiere un documento que evidencie el acuerdo de
                                                                apoyarse mutuamente y el cálculo tomando en cuenta al personal de
                                                                las organizaciones que participan.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[16]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[16]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa de contratación y desarrollo de becarios, de preferencia con horarios flexibles, con el fin de que estos tengan la oportunidad de tener un currículum con experiencia." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[17]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[17]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[17]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un programa para desarrollar proveedores locales y proveedores con responsabilidad social." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[18]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion19">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                <li>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a19']->render()?> a) Que se asegure que existen garantías a los Derechos Humanos y
                                                            Laborales del personal de sus proveedores de bienes y servicios.</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[18]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[18]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa para ayudar a las personas y a los grupos o sectores más pobres, pequeños y/o débiles de las comunidades más cercanas a la empresa u organización." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[19]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[19]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[19]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del suelo por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[20]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[20]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[20]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del aire y atmósfera por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[21]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[21]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[21]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del agua por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[22]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">

                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[22]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[22]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un programa que sirva para promover el conocimiento, asimilación y práctica de los valores establecidos por la empresa u organización." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[23]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion24">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style: none">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox" style="margin-top: 10px">
                                                            <label><?php echo $estado['min_a24']->render()?> a) Que se cuente con una lista de valores y una herramienta que permita detectar las fallas en su práctica.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[23]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i>Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[23]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un programa para mejorar las características y el ambiente de trabajo para hacerlo aún más digno o más humanizante." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[24]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion25">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify; list-style: none">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a25']->render()?> a) Que se cuente con un programa que promueva, canalice y de
                                                                seguimiento a las ideas o propuestas de todo el personal para hacer
                                                                más congruente, ética y humanizantes a la empresa u organización.</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b25']->render()?> b) Que exista una práctica que atienda al menos algún aspecto de
                                                                los mencionados en la lista anterior.</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <?php if (Privilegios::agregarprograma($sf_user->getRol())) {echo
                            '<td>
                                <a style="cursor:pointer;" href="' . url_for('programa/newcomite') . '?id_comite=' . $comite->getIdComite() . '&id_requisito=' . $requisito[24]->getIdRequisito() . ' ">
                                    <i class="fa fa-plus"></i> Crear Programa
                                </a>
                            </td>';
                        } ?>
                        <td colspan="3">
                            <?php
                            foreach ($comite->getPrograma() as $programa) {
                                if ($programa->getIdRequisito() == $requisito[24]->getIdRequisito()) {
                                    echo '<span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                            <span style="width: 65%;float:left; margin-right: 5px;">
                                                <a href="' . url_for('programa/show?id_programa=' . $programa->getIdPrograma()) . '">' . ucfirst(strtolower($programa->getNombre())) . '</a>
                                                &nbsp;<a href="' . url_for('programa/pdf?id_programa=' . $programa->getIdPrograma()) . '"><i class="fa fa-cloud-download"></i></a>
                                            </span>';

                                    $res = $programa->getCalificacion();
                                    if ($res<=5.9){
                                        $estilo="class='badge bg-red' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=6 && $res<=7.9){
                                        $estilo="class='badge bg-yellow' style='width: 56px; text-align: center; float: left; margin-right: 2%;'";
                                    }elseif ($res>=8 && $res<=10){
                                        $estilo="class='badge bg-green' style='width: 56px; text-align: center; float: left; margin-right: 2%;' ";
                                    }
                                    echo '<span '.$estilo.'  >' . $programa->getCalificacion() . '</span>';

                                    $n = 6;
                                    $por = 100 / 6;
                                    $c = 0;
                                    foreach ($programa->getProgramaSeccion() as $programa) {
                                        if (trim($programa->getTextContent()) != "") {
                                            $c++;
                                        }
                                    };
                                    if ($c > 6) {
                                        $c = 6;
                                    };
                                    echo '<span class="badge bg-green" style="width: 56px; text-align: center; float: right; margin-right: 1%;">' . number_format($por * $c, 2) . '%</span>
                                          </span>';
                                }
                            } ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="box-footer">
                &nbsp;
                <a class="btn btn-default" style="margin: 5px;" title=""
                   href="<?php echo url_for('comite/index') ?>"><span>Regresar</span></a>
            </div>
            
        </div>
    </section>
</div>
