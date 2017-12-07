<?php $smleft=2;
$smright=10;
?>
<?php use_javascript('ckeditor/ckeditor.js'); ?>
<?php use_javascript('/plugins/iCheck/icheck.min.js'); ?>
<?php use_stylesheet('/plugins/iCheck/all.css'); ?>

<script>
    $(function () {
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_square'
        });
        $('.cpart').on('ifChanged', function(event){
            vals8();
        });

        function vals8(){
            var cont=0;
            $(".cpart").each(function() {
                if($(this).is(':checked')){
                    id=$(this).attr("item");
                    if($(this).val()==1){
                        cont++;
                        $("#r_"+id).show();
                    }else{
                        $("#t_"+id).val('');
                        $("#r_"+id).hide();
                    }
                }
            });
            porcentaje = (cont*100)/20;
            $('#porcpart').html(porcentaje.toFixed(2)+ " %");
        };
        vals8();


        $("#frmeditor11").submit(function(){
            var formData = new FormData($(this)[0]);
            $("#btnfilesubmit").hide();
            $('#subiendotxt').show();
            $.ajax({
                url: "<?php echo url_for('programa/actseccion11') ?>",
                type: 'POST',
                data: formData,
                success: function (data) {
                    if(data.idenvio != ''){
                        //console.log(data.status);
                    };
                    location.reload();
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;

        });

        <?php
        $antert=array();
        foreach(Datossecciones::todos() as $key => $texto) {
            if ($key !=5 && $key!=6 && $key!=8 && $key!=9 && $key!=11 ) {
            foreach($programa->getProgramaSeccion() as $seccion){
                if($seccion->getIdSeccion()==$key  && !in_array($key, $antert)) { $antert[]=$key; ?>
                CKEDITOR.replace('editor<?php echo $seccion->getIdSeccion() ?>');
            <?php } }?>
          <?php  }
        }; ?>
    });
</script>
<div class="content-wrapper">
    <?php include_partial('inicio/navegacion',array('titulo'=>'programa','subtitulo'=>'Ver programa')) ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Programa <?php echo $programa->getRequisito() ?></h3>
                    </div>
                    <div class="box-body">
                        <div class="col-md-8">
                            <strong>Empresa:</strong> <?php echo $programa->getComite()->getUnidad()->getEmpresa(); ?><br/>
                            <strong>Comite:</strong> <?php echo $comite->getNombreComite() ?><br/>
                            <strong>Fecha de elaboración:</strong> <?php echo $programa->getCreado() ?><br />
                            <strong>Fecha de actualización:</strong> <?php echo $programa->getActualizado() ?><br />
                            <!--<strong>Nombre del programa:</strong> <?php /*echo $programa->getNombre() */?><br/>
                            <strong>Requisito Norma CRESE:</strong> <?php /*echo $programa->getRequisito() */?><br />-->
                        </div>
                        <div class="col-md-4">
                            <form class="form-inline">
                                <label for="inputEmail3" class="col-sm-4 control-label" style="padding-left:0px; padding-top: 7px;">Coordinador:</label>
                                <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                    <div class="input-group col-sm-8" id="coordinador">
                                        <input type="text" id="newcoordinador" class="form-control"  value="<?php echo $programa->getCoordinador(); ?>">
                                        <span class="input-group-addon" id="btncoordinador" style="display: none;cursor: pointer;">
                                            <i class="fa fa-save"></i>
                                        </span>
                                    </div>
                                <? }else{ ?>
                                    <div class="input-group col-sm-8" id="coordinador">
                                        <input type="text" id="newcoordinador" class="form-control" readonly readonly="readonly"  value="<?php echo $programa->getCoordinador(); ?>">
                                    </div>
                                <?php } ?>
                            </form>
                            <br/>
                            <strong>No. de revisión:</strong> <?php echo $programa->getNoRevision();?><br/>
                            <?php if( Privilegios::consultor($sf_user->getRol())){ ?>
                                <a href="<?php echo "" ?>" class="btn btn-sm btn-success"><b>Actualizar No. Revisión</b></a><br/>
                            <? } ?>
                            <strong>Fecha compromiso:</strong> <?php echo $programa->getFechaCompromiso(); ?><br />
                            <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                <a href="<?php echo url_for('programa/edit?id_comite='.$programa->getIdComite().'&id_requisito='.$programa->getIdRequisito().'&id_programa='.$programa->getIdPrograma()) ?>" class="btn btn-sm btn-success"><b>Editar</b></a>
                            <? } ?><br/>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <strong>Bitácora de Revisiones (campo para ser llenado por el Consultor):</strong>
                                <div class="table-responsive">
                                    <table class="table table-bordered"  >
                                        <tbody>
                                        <tr>
                                            <th style="border: 1px solid #aeaeae;">Nombre</th>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="revision1">
                                                            <input type="text" id="newrevision1" class="form-control" style="border: none;" value="<?php echo $programa->getRevisor1(); ?>">
                                                            <span class="input-group-addon" id="btnrevision1" style="display: none; cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="revision1">
                                                            <input type="text" id="newrevision1" class="form-control" style="border: none; readonly readonly="readonly"  value="<?php echo $programa->getRevisor1(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="revision2">
                                                            <input type="text" id="newrevision2" class="form-control" style="border: none;" value="<?php echo $programa->getRevisor2(); ?>">
                                                            <span class="input-group-addon" id="btnrevision2" style="display: none; cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="revision2">
                                                            <input type="text" id="newrevision2" class="form-control" style="border: none; readonly readonly="readonly"  value="<?php echo $programa->getRevisor2(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="revision3">
                                                            <input type="text" id="newrevision3" class="form-control" style="border: none;" value="<?php echo $programa->getRevisor3(); ?>">
                                                            <span class="input-group-addon" id="btnrevision3" style="display: none; cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="revision3">
                                                            <input type="text" id="newrevision3" class="form-control" style="border: none; readonly readonly="readonly"  value="<?php echo $programa->getRevisor3(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="revision4">
                                                            <input type="text" id="newrevision4" class="form-control" style="border: none;" value="<?php echo $programa->getRevisor4(); ?>">
                                                            <span class="input-group-addon" id="btnrevision4" style="display: none; cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="revision4">
                                                            <input type="text" id="newrevision4" class="form-control" style="border: none; readonly readonly="readonly"  value="<?php echo $programa->getRevisor4(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="revision5">
                                                            <input type="text" id="newrevision5" class="form-control" style="border: none;" value="<?php echo $programa->getRevisor5(); ?>">
                                                            <span class="input-group-addon" id="btnrevision5" style="display: none; cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="revision5">
                                                            <input type="text" id="newrevision5" class="form-control" style="border: none; readonly readonly="readonly"  value="<?php echo $programa->getRevisor5(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr style="border: 1px solid #aeaeae;">
                                            <th style="border: 1px solid #aeaeae;">Fecha</th>
                                            <td style="border: 1px solid #aeaeae;"><?php echo $programa->getFechaRevision(); ?></td>
                                            <td style="border: 1px solid #aeaeae;"><?php echo $programa->getFechaRevision2(); ?></td>
                                            <td style="border: 1px solid #aeaeae;"><?php echo $programa->getFechaRevision3(); ?></td>
                                            <td style="border: 1px solid #aeaeae;"><?php echo $programa->getFechaRevision4(); ?></td>
                                            <td style="border: 1px solid #aeaeae;"><?php echo $programa->getFechaRevision5(); ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <script>
                                    $( "#revision1" ).change(function() {
                                        $("#btnrevision1").show();
                                    });
                                    $( "#btnrevision1" ).click(function() {
                                        $("#btnrevision1").html('<i class="fa fa-save"></i>');
                                        $.post("<?php echo url_for('programa/revision1') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, revision1: $('#newrevision1').val()},
                                            function(data){
                                                data=jQuery.parseJSON(data);
                                                if(data.status==1){
                                                    //$("#btncoordinador").hide();
                                                    $("#btnrevision1").html('<i class="fa fa-check" style="color: green;"></i>');
                                                }else if(data.status==2){
                                                    $("#btnrevision1").hide();
                                                }else{
                                                    $("#btnrevision1").html('<i class="fa fa-warning"></i>');
                                                }
                                                //console.log(data.status);
                                            });
                                    });

                                    $( "#revision2" ).change(function() {
                                        $("#btnrevision2").show();
                                    });
                                    $( "#btnrevision2" ).click(function() {
                                        $("#btnrevision2").html('<i class="fa fa-save"></i>');
                                        $.post("<?php echo url_for('programa/revision2') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, revision2: $('#newrevision2').val()},
                                            function(data){
                                                data=jQuery.parseJSON(data);
                                                if(data.status==1){
                                                    //$("#btncoordinador").hide();
                                                    $("#btnrevision2").html('<i class="fa fa-check" style="color: green;"></i>');
                                                }else if(data.status==2){
                                                    $("#btnrevision2").hide();
                                                }else{
                                                    $("#btnrevision2").html('<i class="fa fa-warning"></i>');
                                                }
                                                //console.log(data.status);
                                            });
                                    });

                                    $( "#revision3" ).change(function() {
                                        $("#btnrevision3").show();
                                    });
                                    $( "#btnrevision3" ).click(function() {
                                        $("#btnrevision3").html('<i class="fa fa-save"></i>');
                                        $.post("<?php echo url_for('programa/revision3') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, revision3: $('#newrevision3').val()},
                                            function(data){
                                                data=jQuery.parseJSON(data);
                                                if(data.status==1){
                                                    //$("#btncoordinador").hide();
                                                    $("#btnrevision3").html('<i class="fa fa-check" style="color: green;"></i>');
                                                }else if(data.status==2){
                                                    $("#btnrevision3").hide();
                                                }else{
                                                    $("#btnrevision3").html('<i class="fa fa-warning"></i>');
                                                }
                                                //console.log(data.status);
                                            });
                                    });

                                    $( "#revision4" ).change(function() {
                                        $("#btnrevision4").show();
                                    });
                                    $( "#btnrevision4" ).click(function() {
                                        $("#btnrevision4").html('<i class="fa fa-save"></i>');
                                        $.post("<?php echo url_for('programa/revision4') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, revision4: $('#newrevision4').val()},
                                            function(data){
                                                data=jQuery.parseJSON(data);
                                                if(data.status==1){
                                                    //$("#btncoordinador").hide();
                                                    $("#btnrevision4").html('<i class="fa fa-check" style="color: green;"></i>');
                                                }else if(data.status==2){
                                                    $("#btnrevision4").hide();
                                                }else{
                                                    $("#btnrevision4").html('<i class="fa fa-warning"></i>');
                                                }
                                                //console.log(data.status);
                                            });
                                    });

                                    $( "#revision5" ).change(function() {
                                        $("#btnrevision5").show();
                                    });
                                    $( "#btnrevision5" ).click(function() {
                                        $("#btnrevision5").html('<i class="fa fa-save"></i>');
                                        $.post("<?php echo url_for('programa/revision5') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, revision5: $('#newrevision5').val()},
                                            function(data){
                                                data=jQuery.parseJSON(data);
                                                if(data.status==1){
                                                    //$("#btncoordinador").hide();
                                                    $("#btnrevision5").html('<i class="fa fa-check" style="color: green;"></i>');
                                                }else if(data.status==2){
                                                    $("#btnrevision5").hide();
                                                }else{
                                                    $("#btnrevision5").html('<i class="fa fa-warning"></i>');
                                                }
                                                //console.log(data.status);
                                            });
                                    });

                                </script>
                            </div>
                            <div class="col-md-6">
                                <strong>Calificación:</strong>
                                <p>Esta calificación la da el consultor como referencia y no es válida para términos de auditoría.</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr >
                                            <th style="border: 1px solid #aeaeae;"><label>Existencia</label></th>
                                            <th style="border: 1px solid #aeaeae;"><label>Difusión</label></th>
                                            <th style="border: 1px solid #aeaeae;"><label>Participación</label></th>
                                            <th style="border: 1px solid #aeaeae;"><label>Mejora Continua</label></th>
                                            <th style="border: 1px solid #aeaeae;"><label>Vinculación con la estrategia de la empresa</label></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="existencia">
                                                            <input type="text" id="newexistencia" class="form-control" style="border: none;"  value="<?php echo $programa->getExistencia(); ?>">
                                                            <span class="input-group-addon" id="btnexistencia" style="display: none;cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="existencia">
                                                            <input type="text" id="newexistencia" class="form-control" style="border: none" readonly readonly="readonly"  value="<?php echo $programa->getExistencia(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="difusion">
                                                            <input type="text" id="newdifusion" class="form-control"  style="border: none" value="<?php echo $programa->getDifusion(); ?>">
                                                            <span class="input-group-addon" id="btndifusion" style="display: none;cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="difusion">
                                                            <input type="text" id="newdifusion" class="form-control" style="border: none" readonly readonly="readonly"  value="<?php echo $programa->getDifusion(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="participacion">
                                                            <input type="text" id="newparticipacion" class="form-control" style="border: none" value="<?php echo $programa->getParticipacion(); ?>">
                                                            <span class="input-group-addon" id="btnparticipacion" style="display: none;cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="participacion">
                                                            <input type="text" id="newparticipacion" class="form-control" style="border: none" readonly readonly="readonly"  value="<?php echo $programa->getParticipacion(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="mejora">
                                                            <input type="text" id="newmejora" class="form-control" style="border: none" value="<?php echo $programa->getMejora(); ?>">
                                                            <span class="input-group-addon" id="btnmejora" style="display: none;cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="mejora">
                                                            <input type="text" id="newmejora" class="form-control" style="border: none" readonly readonly="readonly"  value="<?php echo $programa->getMejora(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td style="border: 1px solid #aeaeae;">
                                                <form class="form-inline">
                                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                                        <div class="input-group" id="vinculacion">
                                                            <input type="text" id="newvinculacion" class="form-control" style="border: none" value="<?php echo $programa->getVinculacion(); ?>">
                                                            <span class="input-group-addon" id="btnvinculacion" style="display: none;cursor: pointer; border: none">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                        </div>
                                                    <? }else{ ?>
                                                        <div class="input-group" id="vinculacion">
                                                            <input type="text" id="newvinculacion" class="form-control" style="border: none" readonly readonly="readonly"  value="<?php echo $programa->getVinculacion(); ?>">
                                                        </div>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <script>
                                            $( "#existencia" ).change(function() {
                                                $("#btnexistencia").show();
                                            });
                                            $( "#btnexistencia" ).click(function() {
                                                $("#btnexistencia").html('<i class="fa fa-save"></i>');
                                                $.post("<?php echo url_for('programa/existencia') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, existencia: $('#newexistencia').val()},
                                                    function(data){
                                                        data=jQuery.parseJSON(data);
                                                        if(data.status==1){
                                                            //$("#btncoordinador").hide();
                                                            $("#btnexistencia").html('<i class="fa fa-check" style="color: green;"></i>');
                                                        }else if(data.status==2){
                                                            $("#btnexistencia").hide();
                                                        }else{
                                                            $("#btnexistencia").html('<i class="fa fa-warning"></i>');
                                                        }
                                                        //console.log(data.status);
                                                    });
                                            });

                                            $( "#difusion" ).change(function() {
                                                $("#btndifusion").show();
                                            });
                                            $( "#btndifusion" ).click(function() {
                                                $("#btndifusion").html('<i class="fa fa-save"></i>');
                                                $.post("<?php echo url_for('programa/difusion') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, difusion: $('#newdifusion').val()},
                                                    function(data){
                                                        data=jQuery.parseJSON(data);
                                                        if(data.status==1){
                                                            //$("#btncoordinador").hide();
                                                            $("#btndifusion").html('<i class="fa fa-check" style="color: green;"></i>');
                                                        }else if(data.status==2){
                                                            $("#btndifusion").hide();
                                                        }else{
                                                            $("#btndifusion").html('<i class="fa fa-warning"></i>');
                                                        }
                                                        //console.log(data.status);
                                                    });
                                            });

                                            $( "#participacion" ).change(function() {
                                                $("#btnparticipacion").show();
                                            });
                                            $( "#btnparticipacion" ).click(function() {
                                                $("#btnparticipacion").html('<i class="fa fa-save"></i>');
                                                $.post("<?php echo url_for('programa/participacion') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, participacion: $('#newparticipacion').val()},
                                                    function(data){
                                                        data=jQuery.parseJSON(data);
                                                        if(data.status==1){
                                                            //$("#btncoordinador").hide();
                                                            $("#btnparticipacion").html('<i class="fa fa-check" style="color: green;"></i>');
                                                        }else if(data.status==2){
                                                            $("#btnparticipacion").hide();
                                                        }else{
                                                            $("#btnparticipacion").html('<i class="fa fa-warning"></i>');
                                                        }
                                                        //console.log(data.status);
                                                    });
                                            });

                                            $( "#mejora" ).change(function() {
                                                $("#btnmejora").show();
                                            });
                                            $( "#btnmejora" ).click(function() {
                                                $("#btnmejora").html('<i class="fa fa-save"></i>');
                                                $.post("<?php echo url_for('programa/mejora') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, mejora: $('#newmejora').val()},
                                                    function(data){
                                                        data=jQuery.parseJSON(data);
                                                        if(data.status==1){
                                                            //$("#btncoordinador").hide();
                                                            $("#btnmejora").html('<i class="fa fa-check" style="color: green;"></i>');
                                                        }else if(data.status==2){
                                                            $("#btnmejora").hide();
                                                        }else{
                                                            $("#btnmejora").html('<i class="fa fa-warning"></i>');
                                                        }
                                                        //console.log(data.status);
                                                    });
                                            });

                                            $( "#vinculacion" ).change(function() {
                                                $("#btnvinculacion").show();
                                            });
                                            $( "#btnvinculacion" ).click(function() {
                                                $("#btnvinculacion").html('<i class="fa fa-save"></i>');
                                                $.post("<?php echo url_for('programa/vinculacion') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, vinculacion: $('#newvinculacion').val()},
                                                    function(data){
                                                        data=jQuery.parseJSON(data);
                                                        if(data.status==1){
                                                            //$("#btncoordinador").hide();
                                                            $("#btnvinculacion").html('<i class="fa fa-check" style="color: green;"></i>');
                                                        }else if(data.status==2){
                                                            $("#btnvinculacion").hide();
                                                        }else{
                                                            $("#btnvinculacion").html('<i class="fa fa-warning"></i>');
                                                        }
                                                        //console.log(data.status);
                                                    });
                                            });

                                        </script>
                                    </table>

                                </div>

                            </div>
                            <div class="col-md-12">
                                <br/>
                                <form class="form-inline">
                                    <label for="inputEmail3" class="col-sm-2 control-label" style="padding-left:0px; padding-top: 7px;">Comentario del Consultor:</label>
                                    <?php if( Privilegios::editarprograma($sf_user->getRol())){ ?>
                                        <div class="input-group col-sm-10" id="comentario">
                                            <!--<input type="text" id="newcomentario" class="form-control"  value="<?php /*echo $programa->getComentario(); */?>">-->
                                            <textarea type="text" id="newcomentario" class="form-control"><?php echo $programa->getComentario(); ?></textarea>
                                            <span class="input-group-addon" id="btncomentario" style="display: none;cursor: pointer;">
                                            <i class="fa fa-save"></i>
                                        </span>
                                        </div>
                                    <? }else{ ?>
                                        <div class="input-group col-sm-2" id="comentario">
                                            <input type="text" id="newcomentario" class="form-control" readonly readonly="readonly"  value="<?php echo $programa->getComentario(); ?>">
                                        </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                        <script>

                            $( "#comentario" ).change(function() {
                                $("#btncomentario").show();
                            });
                            $( "#btncomentario" ).click(function() {
                                $("#btncomentario").html('<i class="fa fa-save"></i>');
                                $.post("<?php echo url_for('programa/comentario') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, comentario: $('#newcomentario').val()},
                                    function(data){
                                        data=jQuery.parseJSON(data);
                                        if(data.status==1){
                                            //$("#btncoordinador").hide();
                                            $("#btncomentario").html('<i class="fa fa-check" style="color: green;"></i>');
                                        }else if(data.status==2){
                                            $("#btncomentario").hide();
                                        }else{
                                            $("#btncomentario").html('<i class="fa fa-warning"></i>');
                                        }
                                        //console.log(data.status);
                                    });
                            });


                            $( "#coordinador" ).change(function() {
                                $("#btncoordinador").show();
                            });
                            $( "#btncoordinador" ).click(function() {
                                $("#btncoordinador").html('<i class="fa fa-save"></i>');
                                $.post("<?php echo url_for('programa/actcoord') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, coordinador: $('#newcoordinador').val()},
                                    function(data){
                                        data=jQuery.parseJSON(data);
                                        if(data.status==1){
                                            //$("#btncoordinador").hide();
                                            $("#btncoordinador").html('<i class="fa fa-check" style="color: green;"></i>');
                                        }else if(data.status==2){
                                            $("#btncoordinador").hide();
                                        }else{
                                            $("#btncoordinador").html('<i class="fa fa-warning"></i>');
                                        }
                                        //console.log(data.status);
                                    });
                            });

                            function limpiar(id){
                                editorid="editor"+id;
                                CKEDITOR.instances[editorid].setData("");
                                CKEDITOR.instances[editorid].updateElement();
                            }

                            function guardar(id,idps){
                                $('.foot'+id).before('<div class="overlay over'+id+'"><i class="fa fa-refresh fa-spin"></i></div>');
                                editorid="editor"+id;
                                CKEDITOR.instances[editorid].updateElement();
                                //console.log($("#frmeditor"+id).serialize());
                                $.ajax({
                                    url: "<?php echo url_for('programa/actseccion') ?>",
                                    type: 'post',
                                    data: $("#frmeditor"+id).serialize(),
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.idenvio != ''){
                                            //$("form[name='frmPublicidad']").toggle("slow");
                                            //$("#MessageSuscripcion").html(data.message);
                                            //console.log(data.status);
                                            $('.over'+id).remove();
                                        }
                                    }
                                });
                                //console.log($("#editor"+id).val());
                            }

                            function guardar5(id,idps){
                                $('.foot'+id).before('<div class="overlay over'+id+'"><i class="fa fa-refresh fa-spin"></i></div>');
                                $.ajax({
                                    url: "<?php echo url_for('programa/actseccion5') ?>",
                                    type: 'post',
                                    data: $("#frmeditor"+id).serialize(),
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.idenvio != ''){
                                            //console.log(data.status);
                                            $('.over'+id).remove();
                                        }
                                    }
                                });
                                //console.log($("#editor"+id).val());
                            }

                            function guardar6(id,idps){
                                $('.foot'+id).before('<div class="overlay over'+id+'"><i class="fa fa-refresh fa-spin"></i></div>');
                                $.ajax({
                                    url: "<?php echo url_for('programa/actseccion6') ?>",
                                    type: 'post',
                                    data: $("#frmeditor"+id).serialize(),
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.idenvio != ''){
                                            //console.log(data.status);
                                            $('.over'+id).remove();
                                        }
                                    }
                                });
                                //console.log($("#editor"+id).val());
                            }

                            function guardar8(id,idps){
                                $('.foot'+id).before('<div class="overlay over'+id+'"><i class="fa fa-refresh fa-spin"></i></div>');
                                $.ajax({
                                    url: "<?php echo url_for('programa/actseccion8') ?>",
                                    type: 'post',
                                    data: $("#frmeditor"+id).serialize(),
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.idenvio != ''){
                                            //console.log(data.status);
                                            $('.over'+id).remove();
                                        }
                                    }
                                });
                                //console.log($("#editor"+id).val());
                            }

                            function guardar9(id,idps){
                                $('.foot'+id).before('<div class="overlay over'+id+'"><i class="fa fa-refresh fa-spin"></i></div>');
                                $.ajax({
                                    url: "<?php echo url_for('programa/actseccion9') ?>",
                                    type: 'post',
                                    data: $("#frmeditor"+id).serialize(),
                                    dataType: 'json',
                                    success: function(data) {
                                        if(data.idenvio != ''){
                                            //console.log(data.status);
                                            $('.over'+id).remove();
                                        }
                                    }
                                });
                                //console.log($("#editor"+id).val());
                            }

                            function guardar11(id,idps){
                                $.ajax({
                                    url: "<?php echo url_for('programa/actseccion11') ?>",
                                    type: 'post',
                                    data: $("#frmeditor"+id).serialize(),
                                    dataType: 'json',
                                    cache: false,
                                    success: function(data) {
                                        if(data.idenvio != ''){
                                           //console.log(data.status);
                                        }
                                    }
                                });
                                //console.log($("#editor"+id).val());
                            }

                            function participacion(){
                                //console.log('key up');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Datos del Programa</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        $datosd=array();
                        $datosd=Datossecciones::todos();
                        $anter=array();
                        foreach($datosd as $key => $texto) {
                            //echo $key." ".$texto."<br/>" ;
                            if ($key !=5 && $key!=6 && $key!=8 && $key!=9 && $key!=11 ) {
                                foreach ($programa->getProgramaSeccion() as $seccion) {
                                    if ($seccion->getIdSeccion() == $key && !in_array($key, $anter)) { $anter[]=$key; ?>
                                        <div class="box box-primary direct-chat direct-chat-primary collapsed-box prseccion<?php echo $seccion->getIdSeccion() ?>">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">
                                                    <a data-widget="collapse" style="cursor:pointer;">
                                                        <?php echo Datossecciones::Nombreseccion($seccion->getIdSeccion()) ?>
                                                    </a>
                                                </h3>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool"
                                                            data-widget="collapse"><i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="direct-chat-messages" style="height: auto;">
                                                    <form action="#" method="post" id="frmeditor<?php echo $seccion->getIdSeccion() ?>" name="frmeditor<?php echo $seccion->getIdSeccion() ?>">
                                                        <textarea class="editor<?php echo $seccion->getIdSeccion() ?>" id="editor<?php echo $seccion->getIdSeccion() ?>" name="programa_seccion[text_content]" rows="10" cols="80"><?php echo $seccion->getTextContent() ?></textarea>
                                                        <input type="hidden" id="idps" name="programa_seccion[id_ps]" value="<?php echo $seccion->getIdPs() ?>">
                                                        <input type="hidden" id="idprograma" name="programa_seccion[id_progama]" value="<?php echo $seccion->getIdPrograma() ?>">
                                                    </form>
                                                </div>
                                                <div class="direct-chat-contacts" style="height: 100%;">
                                                    Mensajes
                                                </div>
                                            </div>
                                            <div class="box-footer foot<?php echo $seccion->getIdSeccion() ?>">
                                                <a class="btn btn-primary pull-left btnlimpiar" onclick="limpiar(<?php echo $seccion->getIdSeccion() ?>);return false;" title="Limpiar" href="javascript:void(null);" seccionid="<?php echo $seccion->getIdSeccion() ?>">
                                                    <i class="fa fa-trash"></i>&nbsp;&nbsp;<span>Limpiar</span></a>
                                                <a class="btn btn-success pull-right" onclick="guardar(<?php echo $seccion->getIdSeccion() ?>,<?php echo $seccion->getIdPs() ?>);return false;" href="javascript:void(null);" title="Guardar" href="#">
                                                    <i class="fa fa-save"></i>&nbsp;&nbsp;<span>Guardar</span></a>
                                            </div>
                                        </div>
                                    <?php }
                                }
                            }else{
                                if($key == 5) {
                                    foreach ($programa->getSeccion5() as $seccion) {
                                        if ($seccion->getIdSeccion() == $key) { ?>
                                            <div class="box box-primary direct-chat direct-chat-primary collapsed-box prseccion<?php echo $seccion->getIdSeccion() ?>">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title">
                                                        <a data-widget="collapse" style="cursor:pointer;">
                                                            <?php echo Datossecciones::Nombreseccion($seccion->getIdSeccion()) ?>
                                                        </a>
                                                    </h3>
                                                    <div class="box-tools pull-right">
                                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="direct-chat-messages" style="height: auto;">
                                                        <form action="#" method="post" id="frmeditor<?php echo $seccion->getIdSeccion() ?>" name="frmeditor<?php echo $seccion->getIdSeccion() ?>">
                                                            <div class="box-body table-responsive no-padding">
                                                                <?php
                                                                $campos=array(
                                                                    1=>array('Directivos',"seccion5[directivos]",'directivos_s','si',null,null,$seccion->getDirectivos(),null),
                                                                    2=>array('Personal no sindicalizado',"seccion5[personaln_s]",'personaln_s_s','si',null,null,$seccion->getPersonalnoSin(),null),
                                                                    3=>array('Personal sindicalizado',"seccion5[personal_s]",'personal_s_s','si',null,null,$seccion->getPersonalSin(),null),
                                                                    4=>array('Todo el personal',"seccion5[t_personal]",'t_personal_s','si',null,null,$seccion->getTPersonal(),null),
                                                                    5=>array('Familias del personal',"seccion5[f_personal]",'f_personal_s','si',null,null,$seccion->getFPersonal(),null),
                                                                    6=>array('Otros grupos de interés',"seccion5[otrosgrupos]",'otrosgrupos_s','si','seccion5[text_otros]','directivosotros',$seccion->getOGrupos(),$seccion->getTextOtros()),
                                                                    );
                                                                ?>
                                                                <table class="table table-hover">
                                                                    <tr>
                                                                        <th width="20"  >No.</th>
                                                                        <th width="300"  ><strong>Grupo de interés</strong></th>
                                                                        <th width="70" align="center"  >Si/No</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    <?php $k=1; foreach($campos as $item){ ?>
                                                                        <tr>
                                                                            <td><?php  echo $k;$k++; ?></td>
                                                                            <td>
                                                                                <?php  echo $item[0]; ?>
                                                                                <?php if($item[4]!=null){ ?><br/>
                                                                                    <textarea name="<?php  echo $item[4]; ?>" id="<?php  echo $item[5]; ?>" cols="450" rows="2" class="form-control"><?php  echo $item[7]; ?></textarea>
                                                                                <?php } ?>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="<?php  echo $item[2]; ?>">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="<?php  echo $item[2]; ?>" <?php if($item[6]=='si'){ echo ' checked checked="checked" ';} ?> type="radio"  class="minimal" value="si" />Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="directivos_s">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="<?php  echo $item[2]; ?>" <?php if($item[6]=='no'){ echo ' checked checked="checked" ';} ?> type="radio"  class="minimal" value="no" />No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td></td>
                                                                        </tr>
                                                                    <? } ?>
                                                                </table>
                                                            </div>
                                                            <input type="hidden" id="idps" name="seccion5[id_ps]"  value="<?php echo $seccion->getIdPs() ?>">
                                                            <input type="hidden" id="idprograma"  name="seccion5[id_progama]" value="<?php echo $seccion->getIdPrograma() ?>">
                                                        </form>
                                                    </div>
                                                    <div class="direct-chat-contacts" style="height: 100%;">
                                                        Mensajes
                                                    </div>
                                                </div>
                                                <div class="box-footer foot<?php echo $seccion->getIdSeccion() ?>">
                                                    <a class="btn btn-success pull-right"  onclick="guardar5(<?php echo $seccion->getIdSeccion() ?>,<?php echo $seccion->getIdPs() ?>);return false;"  href="javascript:void(null);" title="Guardar" href="#"><i class="fa fa-save"></i>&nbsp;&nbsp;<span>Guardar</span></a>
                                                </div>
                                            </div>
                                        <?php } break;
                                    }
                                }
                                if($key == 6) {
                                    foreach ($programa->getSeccion6() as $seccion) {
                                        if ($seccion->getIdSeccion() == $key ) {  ?>
                                            <div class="box box-primary direct-chat direct-chat-primary collapsed-box prseccion<?php echo $seccion->getIdSeccion() ?>">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title">
                                                        <a data-widget="collapse" style="cursor:pointer;">
                                                            <?php echo Datossecciones::Nombreseccion($seccion->getIdSeccion()) ?>
                                                        </a>
                                                    </h3>
                                                    <div class="box-tools pull-right">
                                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="direct-chat-messages" style="height: auto;">
                                                        <form action="#" method="post" id="frmeditor<?php echo $seccion->getIdSeccion() ?>" name="frmeditor<?php echo $seccion->getIdSeccion() ?>">
                                                            <div class="box-body table-responsive no-padding">
                                                                <?php
                                                                $campos=array(
                                                                    1=>array('Tablero de comunicación',"seccion6[tablero]",'directivos_s','si',null,null,$seccion->getTablero(),null),
                                                                    2=>array('Circular o un comunicado escrito',"seccion6[circular]",'personaln_s_s','si',null,null,$seccion->getCircular(),null),
                                                                    3=>array('Medio electrónico de la empresa o correo electrónico',"seccion6[correo]",'personal_s_s','si',null,null,$seccion->getCorreo(),null),
                                                                    4=>array('Informe o memoria anual',"seccion6[informe]",'t_personal_s','si',null,null,$seccion->getInforme(),null),
                                                                    5=>array('De manera informal',"seccion6[informal]",'f_personal_s','si',null,null,$seccion->getInformal(),null),
                                                                    6=>array('Otro medio de comunicación',"seccion6[otro_medio]",'otrosgrupos_s','si','seccion6[text_otro]','directivosotros',$seccion->getOtroMedio(),$seccion->getTextOtro()),
                                                                    );
                                                                ?>
                                                                <table class="table table-hover">
                                                                    <tr>
                                                                        <th width="20"  >No.</th>
                                                                        <th width="300"  ><strong>Medio de Comunicación</strong></th>
                                                                        <th width="70" align="center"  >Si/No</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    <?php $k=1; foreach($campos as $item){ ?>
                                                                        <tr>
                                                                            <td><?php  echo $k; ?></td>
                                                                            <td>
                                                                                <?php  echo $item[0]; ?>
                                                                                <?php if($item[4]!=null){ ?><br/>
                                                                                    <textarea name="<?php  echo $item[4]; ?>" id="<?php  echo $item[5]; ?>" cols="450" rows="2" class="form-control"><?php  echo $item[7]; ?></textarea>
                                                                                <?php } ?>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="<?php  echo $item[2]; ?>">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="<?php  echo $item[2]; ?>" <?php if($item[6]=='si'){ echo ' checked checked="checked" ';} ?> type="radio"  class="minimal" value="si" />Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="directivos_s">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="<?php  echo $item[2]; ?>" <?php if($item[6]=='no'){ echo ' checked checked="checked" ';} ?> type="radio"  class="minimal" value="no" />No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td></td>
                                                                        </tr>
                                                                    <? $k++; } ?>
                                                                </table>
                                                            </div>
                                                            <input type="hidden" id="idps" name="seccion6[id_ps]"  value="<?php echo $seccion->getIdPs() ?>">
                                                            <input type="hidden" id="idprograma"  name="seccion6[id_progama]" value="<?php echo $seccion->getIdPrograma() ?>">
                                                        </form>
                                                    </div>
                                                    <div class="direct-chat-contacts" style="height: 100%;">
                                                        Mensajes
                                                    </div>
                                                </div>
                                                <div class="box-footer foot<?php echo $seccion->getIdSeccion() ?>">
                                                    <a class="btn btn-success pull-right" onclick="guardar6(<?php echo $seccion->getIdSeccion() ?>,<?php echo $seccion->getIdPs() ?>);return false;" href="javascript:void(null);" title="Guardar" href="#">
                                                        <i class="fa fa-save"></i>&nbsp;&nbsp;<span>Guardar</span>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php  } break;
                                    }
                                }
                                if($key == 8) {
                                    foreach ($programa->getSeccion8() as $seccion) {
                                        if ($seccion->getIdSeccion() == $key) {  ?>
                                            <div class="box box-primary direct-chat direct-chat-primary collapsed-box prseccion<?php echo $seccion->getIdSeccion() ?>">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title">
                                                        <a data-widget="collapse" style="cursor:pointer;">
                                                            <?php echo Datossecciones::Nombreseccion($seccion->getIdSeccion()) ?>
                                                        </a>
                                                    </h3>
                                                    <div class="box-tools pull-right">
                                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="direct-chat-messages" style="height: auto;">
                                                        <form action="#" method="post" id="frmeditor<?php echo $seccion->getIdSeccion() ?>" name="frmeditor<?php echo $seccion->getIdSeccion() ?>">
                                                            <div class="box-body table-responsive no-padding">
                                                                <?php
                                                                $campos=array(
                                                                    1=>array('Propuesta (petición, solicitud)',"seccion8[p_d]",'p_d','1',null,null,$seccion->getP_D(),null),
                                                                    2=>array('Diseño (definir, el "Cómo se hace")',"seccion8[p_a]",'p_a','1',null,null,$seccion->getP_A(),null),
                                                                    3=>array('Medio electrónico de la empresa o correo electrónico',"seccion8[p_c]",'p_c','1',null,null,$seccion->getP_C(),null),
                                                                    4=>array('Ejecución',"seccion8[p_p]",'p_p','1',null,null,$seccion->getP_P(),null),
                                                                    5=>array('Revisión / Evaluación',"seccion8[p_o]",'p_o','1',null,null,$seccion->getP_O(),null),
                                                                );

                                                                $campos2=array(
                                                                    1=>array('Propuesta (petición, solicitud)',"seccion8[d_d]",'d_d','1',null,null,$seccion->getD_D(),null),
                                                                    2=>array('Diseño (definir, el "Cómo se hace")',"seccion8[d_a]",'d_a','1',null,null,$seccion->getD_A(),null),
                                                                    3=>array('Medio electrónico de la empresa o correo electrónico',"seccion8[d_c]",'d_c','1',null,null,$seccion->getD_C(),null),
                                                                    4=>array('Ejecución',"seccion8[d_p]",'d_p','1',null,null,$seccion->getD_P(),null),
                                                                    5=>array('Revisión / Evaluación',"seccion8[d_o]",'d_o','1',null,null,$seccion->getD_O(),null),
                                                                );

                                                                $campos3=array(
                                                                1=>array('Propuesta (petición, solicitud)',"seccion8[e_d]",'e_d','1',null,null,$seccion->getE_D(),null),
                                                                2=>array('Diseño (definir, el "Cómo se hace")',"seccion8[e_a]",'e_a','1',null,null,$seccion->getE_A(),null),
                                                                3=>array('Ejecución',"seccion8[e_c]",'e_c','1',null,null,$seccion->getE_C(),null),
                                                                4=>array('Revisión / Evaluación',"seccion8[e_p]",'e_p','1',null,null,$seccion->getE_P(),null),
                                                                5=>array('Revisión / Evaluación',"seccion8[e_o]",'e_o','1',null,null,$seccion->getE_O(),null),
                                                                );

                                                                $campos4=array(
                                                                    1=>array('Propuesta (petición, solicitud)',"seccion8[r_d]",'r_d','1',null,null,$seccion->getR_D(),null),
                                                                    2=>array('Diseño (definir, el "Cómo se hace")',"seccion8[r_a]",'r_a','1',null,null,$seccion->getR_A(),null),
                                                                    3=>array('Ejecución',"seccion8[r_c]",'r_c','1',null,null,$seccion->getR_C(),null),
                                                                    4=>array('Revisión / Evaluación',"seccion8[r_p]",'r_p','1',null,null,$seccion->getR_P(),null),
                                                                    5=>array('Revisión / Evaluación',"seccion8[r_o]",'r_o','1',null,null,$seccion->getR_O(),null),
                                                                );
                                                                ?>
                                                                <p>Porcentaje de participación: <span id="porcpart"></span></p>
                                                                <table class="table table-hover">
                                                                    <tr>
                                                                        <th width="20%"></th>
                                                                        <th width="15%">Director o gerente  general </th>
                                                                        <th width="15%">Área responsable</th>
                                                                        <th width="15%">Comité interno CRESE</th>
                                                                        <th width="15%">Personas en ALCANCE del  programa</th>
                                                                        <th width="20%">Otros grupos de interés más allá del ALCANCE del programa</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <?php foreach($campos as $key=>$item){ ?>
                                                                            <?php if($key==1){ ?><td><?php  echo $item[0]; ?></td><?php } ?>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="<?php  echo $item[2]; ?>">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="i<?php  echo $item[2]; ?>" <?php if($item[6]=='1'){ echo ' checked checked="checked" ';} ?> type="radio"   item="<?php  echo $item[2]; ?>"  class="minimal cpart" value="1" /> Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="directivos_s">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="i<?php  echo $item[2]; ?>" <?php if($item[6]=='0'){ echo ' checked checked="checked" ';} ?> type="radio"   item="<?php  echo $item[2]; ?>" class="minimal cpart" value="0" /> No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        <? } ?>
                                                                    </tr>
                                                                    <tr>
                                                                        <?php foreach($campos2 as $key=>$item){ ?><?php if($key==2){ ?><td><?php  echo $item[0]; ?></td><?php }} ?>
                                                                        <?php foreach($campos2 as $key=>$item){ ?>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="<?php  echo $item[2]; ?>">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="i<?php  echo $item[2]; ?>" <?php if($item[6]=='1'){ echo ' checked checked="checked" ';} ?> type="radio" item="<?php  echo $item[2]; ?>" class="minimal cpart" value="1" /> Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="directivos_s">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="i<?php  echo $item[2]; ?>" <?php if($item[6]=='0'){ echo ' checked checked="checked" ';} ?> type="radio" item="<?php  echo $item[2]; ?>" class="minimal cpart" value="0" /> No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        <? } ?>
                                                                    </tr>
                                                                    <tr>
                                                                        <?php foreach($campos3 as $key=>$item){ ?><?php if($key==3){ ?><td><?php  echo $item[0]; ?></td><?php }} ?>
                                                                        <?php foreach($campos3 as $key=>$item){ ?>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="<?php  echo $item[2]; ?>">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="i<?php  echo $item[2]; ?>" <?php if($item[6]=='1'){ echo ' checked checked="checked" ';} ?> type="radio" item="<?php  echo $item[2]; ?>" class="minimal cpart" value="1" /> Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="directivos_s">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="i<?php  echo $item[2]; ?>" <?php if($item[6]=='0'){ echo ' checked checked="checked" ';} ?> type="radio" item="<?php  echo $item[2]; ?>" class="minimal cpart" value="0" /> No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        <? } ?>
                                                                    </tr>
                                                                    <tr>
                                                                        <?php foreach($campos4 as $key=>$item){ ?><?php if($key==4){ ?><td><?php  echo $item[0]; ?></td><?php }} ?>
                                                                        <?php foreach($campos4 as $key=>$item){ ?>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="<?php  echo $item[2]; ?>">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="i<?php  echo $item[2]; ?>" <?php if($item[6]=='1'){ echo ' checked checked="checked" ';} ?> type="radio" item="<?php  echo $item[2]; ?>" class="minimal cpart" value="1" /> Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="directivos_s">
                                                                                            <input name="<?php  echo $item[1]; ?>" id="i<?php  echo $item[2]; ?>" <?php if($item[6]=='0'){ echo ' checked checked="checked" ';} ?> type="radio" item="<?php  echo $item[2]; ?>" class="minimal cpart" value="0" /> No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        <? } ?>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="row">
                                                                <div id="r_p_d">
                                                                    <div class="col-sm-6">
                                                                        ¿C&oacute;mo participa el <strong>Director o Gerente General</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_p_d" name="seccion8[t_p_d]"  value="<?php echo $seccion->getT_P_D();?>" /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_d_d">
                                                                    <div class="col-sm-6">
                                                                        ¿C&oacute;mo participa el <strong>Director o Gerente General</strong> en el <strong>Diseño (definir, el "C&oacute;mo se hace")</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_d_d" name="seccion8[t_d_d]" value="<?php echo $seccion->getT_D_D();?>"placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_e_d">
                                                                    <div class="col-sm-6">
                                                                        ¿C&oacute;mo participa el <strong>Director o Gerente General</strong> en la <strong>Ejecuci&oacute;n</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_e_d" name="seccion8[t_e_d]" value="<?php echo $seccion->getT_E_D();?>"placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_r_d">
                                                                    <div class="col-sm-6">
                                                                        ¿C&oacute;mo participa el <strong>Director o Gerente General</strong> en la <strong>Revisi&oacute;n / Evaluaci&oacute;n</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_r_d" name="seccion8[t_r_d]" value="<?php echo $seccion->getT_R_D();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_p_a">
                                                                    <div class="col-sm-6">
                                                                        ¿C&oacute;mo participa el <strong>&Aacute;rea responsable</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_p_a" name="seccion8[t_p_a]" value="<?php echo $seccion->getT_P_A();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_d_a">
                                                                    <div class="col-sm-6">
                                                                        ¿C&oacute;mo participa el <strong>&Aacute;rea responsable</strong> en el <strong>Dise&ntilde;o (definir, el "C&oacute;mo se hace")</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_d_a" name="seccion8[t_d_a]" value="<?php echo $seccion->getT_D_A();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_e_a">
                                                                    <div class="col-sm-6">
                                                                        ¿C&oacute;mo participa el <strong>&Aacute;rea responsable</strong> en la <strong>Ejecuci&oacute;n</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_e_a" name="seccion8[t_e_a]" value="<?php echo $seccion->getT_E_A();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_r_a">
                                                                    <div class="col-sm-6">
                                                                        ¿C&oacute;mo participa el <strong>&Aacute;rea responsable</strong> en la <strong>Revisi&oacute;n / Evaluación</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_r_a" name="seccion8[t_r_a]" value="<?php echo $seccion->getT_R_A();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_p_c">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participa el <strong>Comité interno CRESE</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_p_c" name="seccion8[t_p_c]" value="<?php echo $seccion->getT_P_C();?>" placeholder="Por favor no deje este campo vacio..." /> <br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_d_c">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participa el <strong>Comité interno CRESE</strong> en el <strong>Diseño (definir, el "Cómo se hace")</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_d_c" name="seccion8[t_d_c]" value="<?php echo $seccion->getT_D_C();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_e_c">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participa el <strong>Comité interno CRESE</strong> en la <strong>Ejecución</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_e_c" name="seccion8[t_e_c]" value="<?php echo $seccion->getT_E_C();?>" placeholder="Por favor no deje este campo vacio..." /> <br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_r_c">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participa el <strong>Comité interno CRESE</strong> en la <strong>Revisión / Evaluación</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_r_c" name="seccion8[t_r_c]" value="<?php echo $seccion->getT_R_C();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_p_p">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participan las <strong>Personas en ALCANCE del programa</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_p_p" name="seccion8[t_p_p]" value="<?php echo $seccion->getT_P_P();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_d_p">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participan las <strong>Personas en ALCANCE del programa</strong> en el <strong>Diseño (definir, el "Cómo se hace")</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_d_p" name="seccion8[t_d_p]" value="<?php echo $seccion->getT_D_P();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_e_p">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participan las <strong>Personas en ALCANCE del programa</strong> en la <strong>Ejecución</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_e_p" name="seccion8[t_e_p]" value="<?php echo $seccion->getT_E_P();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_r_p">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participan las <strong>Personas en ALCANCE del programa</strong> en la <strong>Revisión / Evaluación</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_r_p" name="seccion8[t_r_p]" value="<?php echo $seccion->getT_R_P();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_p_o">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participan <strong>Otros grupos de interés más allá del ALCANCE del programa</strong> en la <strong>Propuesta (peticion, solicitud)</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_p_o" name="seccion8[t_p_o]" value="<?php echo $seccion->getT_P_O();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_d_o">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participan <strong>Otros grupos de interés más allá del ALCANCE del programa</strong> en el <strong>Diseño (definir, el "Cómo se hace")</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_d_o" name="seccion8[t_d_o]" value="<?php echo $seccion->getT_D_O();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_e_o">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participan <strong>Otros grupos de interés más allá del ALCANCE del programa</strong> en la <strong>Ejecución</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_e_o" name="seccion8[t_e_o]" value="<?php echo $seccion->getT_E_O();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                                <div id="r_r_o">
                                                                    <div class="col-sm-6">
                                                                        ¿Cómo participan <strong>Otros grupos de interés más allá del ALCANCE del programa</strong> en la <strong>Revisión / Evaluación</strong>?
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="t_r_o" name="seccion8[t_r_o]" value="<?php echo $seccion->getT_R_O();?>" placeholder="Por favor no deje este campo vacio..." /><br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" id="idps" name="seccion8[id_ps]"  value="<?php echo $seccion->getIdPs() ?>">
                                                            <input type="hidden" id="idprograma"  name="seccion8[id_progama]" value="<?php echo $seccion->getIdPrograma() ?>">
                                                        </form>
                                                    </div>
                                                    <div class="direct-chat-contacts" style="height: 100%;">
                                                        Mensajes
                                                    </div>
                                                </div>
                                                <div class="box-footer foot<?php echo $seccion->getIdSeccion() ?>">
                                                    <a class="btn btn-success pull-right" onclick="guardar8(<?php echo $seccion->getIdSeccion() ?>,<?php echo $seccion->getIdPs() ?>);return false;" href="javascript:void(null);" title="Guardar" href="#"><i class="fa fa-save"></i>&nbsp;&nbsp;<span>Guardar</span></a>
                                                </div>
                                            </div>
                                        <?php } break;
                                    }
                                }
                                if($key == 9) {
                                    foreach ($programa->getSeccion9() as $seccion) {
                                        if ($seccion->getIdSeccion() == $key) {?>
                                            <div class="box box-primary direct-chat direct-chat-primary collapsed-box prseccion<?php echo $seccion->getIdSeccion() ?>">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title">
                                                        <a data-widget="collapse" style="cursor:pointer;">
                                                            <?php echo Datossecciones::Nombreseccion($seccion->getIdSeccion()) ?>
                                                        </a>
                                                    </h3>
                                                    <div class="box-tools pull-right">
                                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="direct-chat-messages" style="height: auto;">
                                                        <form action="#" method="post" id="frmeditor<?php echo $seccion->getIdSeccion() ?>" name="frmeditor<?php echo $seccion->getIdSeccion() ?>">
                                                            <div class="box-body table-responsive no-padding">
                                                                <?php
                                                                $campos=array(
                                                                    1=>array($seccion->getIndicador() ,'seccion9[indicador] ','seccion9_indicador',$seccion->getIndA1a(),'seccion9[ind_a1a]','seccion9_ind_a1a',$seccion->getIndA2a(),'seccion9[ind_a2a]','seccion9_ind_a2a',$seccion->getIndA3a(),'seccion9[ind_a3a]','seccion9_ind_a3a',$seccion->getIndA4a(),'seccion9[ind_a4a]','seccion9_ind_a4a',$seccion->getIndA5a(),'seccion9[ind_a5a]','seccion9_ind_a5a'),
                                                                    2=>array($seccion->getIndicador2(),'seccion9[indicador2]','seccion9_indicador2',$seccion->getIndA1b(),'seccion9[ind_a1b]','seccion9_ind_a1b',$seccion->getIndA2b(),'seccion9[ind_a2b]','seccion9_ind_a2b',$seccion->getIndA3b(),'seccion9[ind_a3b]','seccion9_ind_a3b',$seccion->getIndA4b(),'seccion9[ind_a4b]','seccion9_ind_a4b',$seccion->getIndA5b(),'seccion9[ind_a5b]','seccion9_ind_a5b'),
                                                                    3=>array($seccion->getIndicador3(),'seccion9[indicador3]','seccion9_indicador3',$seccion->getIndA1c(),'seccion9[ind_a1c]','seccion9_ind_a1c',$seccion->getIndA2c(),'seccion9[ind_a2c]','seccion9_ind_a2c',$seccion->getIndA3c(),'seccion9[ind_a3c]','seccion9_ind_a3c',$seccion->getIndA4c(),'seccion9[ind_a4c]','seccion9_ind_a4c',$seccion->getIndA5c(),'seccion9[ind_a5c]','seccion9_ind_a5c'),
                                                                    4=>array($seccion->getIndicador4(),'seccion9[indicador4]','seccion9_indicador4',$seccion->getIndA1d(),'seccion9[ind_a1d]','seccion9_ind_a1d',$seccion->getIndA2d(),'seccion9[ind_a2d]','seccion9_ind_a2d',$seccion->getIndA3d(),'seccion9[ind_a3d]','seccion9_ind_a3d',$seccion->getIndA4d(),'seccion9[ind_a4d]','seccion9_ind_a4d',$seccion->getIndA5d(),'seccion9[ind_a5d]','seccion9_ind_a5d'),
                                                                );
                                                                $cols=200; ?>
                                                                <table class="table table-hover">
                                                                    <tr>
                                                                        <th width="200">Métrica o indicador</th>
                                                                        <th width="" align="center">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="seccion9[anio1]" id="anio1">
                                                                                    <option <?php if($seccion->getAnio1()=='2014'){ echo 'selected'; } ?> value="2014">2014</option>
                                                                                    <option <?php if($seccion->getAnio1()=='2015'){ echo 'selected'; } ?> value="2015">2015</option>
                                                                                    <option <?php if($seccion->getAnio1()=='2016'){ echo 'selected'; } ?> value="2016">2016</option>
                                                                                    <option <?php if($seccion->getAnio1()=='2017'){ echo 'selected'; } ?> value="2017">2017</option>
                                                                                    <option <?php if($seccion->getAnio1()=='2018'){ echo 'selected'; } ?> value="2018">2018</option>
                                                                                </select>
                                                                            </div>
                                                                        </th>
                                                                        <th width="" align="center">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="seccion9[anio2]" id="anio2">
                                                                                    <option <?php if($seccion->getAnio2()=='2014'){ echo 'selected'; } ?> value="2014">2014</option>
                                                                                    <option <?php if($seccion->getAnio2()=='2015'){ echo 'selected'; } ?> value="2015">2015</option>
                                                                                    <option <?php if($seccion->getAnio2()=='2016'){ echo 'selected'; } ?> value="2016">2016</option>
                                                                                    <option <?php if($seccion->getAnio2()=='2017'){ echo 'selected'; } ?> value="2017">2017</option>
                                                                                    <option <?php if($seccion->getAnio2()=='2018'){ echo 'selected'; } ?> value="2018">2018</option>
                                                                                </select>
                                                                            </div>
                                                                        </th>
                                                                        <th width="" align="center">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="seccion9[anio3]" id="anio3">
                                                                                    <option <?php if($seccion->getAnio3()=='2014'){ echo 'selected'; } ?> value="2014">2014</option>
                                                                                    <option <?php if($seccion->getAnio3()=='2015'){ echo 'selected'; } ?> value="2015">2015</option>
                                                                                    <option <?php if($seccion->getAnio3()=='2016'){ echo 'selected'; } ?> value="2016">2016</option>
                                                                                    <option <?php if($seccion->getAnio3()=='2017'){ echo 'selected'; } ?> value="2017">2017</option>
                                                                                    <option <?php if($seccion->getAnio3()=='2018'){ echo 'selected'; } ?> value="2018">2018</option>
                                                                                </select>
                                                                            </div>
                                                                        </th>
                                                                        <th width="" align="center">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="seccion9[anio4]" id="anio4">
                                                                                    <option <?php if($seccion->getAnio4()=='2014'){ echo 'selected'; } ?> value="2014">2014</option>
                                                                                    <option <?php if($seccion->getAnio4()=='2015'){ echo 'selected'; } ?> value="2015">2015</option>
                                                                                    <option <?php if($seccion->getAnio4()=='2016'){ echo 'selected'; } ?> value="2016">2016</option>
                                                                                    <option <?php if($seccion->getAnio4()=='2017'){ echo 'selected'; } ?> value="2017">2017</option>
                                                                                    <option <?php if($seccion->getAnio4()=='2018'){ echo 'selected'; } ?> value="2018">2018</option>
                                                                                </select>
                                                                            </div>
                                                                        </th>
                                                                        <th width="" align="center">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="seccion9[anio5]" id="anio5">
                                                                                    <option <?php if($seccion->getAnio5()=='2014'){ echo 'selected'; } ?> value="2014">2014</option>
                                                                                    <option <?php if($seccion->getAnio5()=='2015'){ echo 'selected'; } ?> value="2015">2015</option>
                                                                                    <option <?php if($seccion->getAnio5()=='2016'){ echo 'selected'; } ?> value="2016">2016</option>
                                                                                    <option <?php if($seccion->getAnio5()=='2017'){ echo 'selected'; } ?> value="2017">2017</option>
                                                                                    <option <?php if($seccion->getAnio5()=='2018'){ echo 'selected'; } ?> value="2018">2018</option>
                                                                                </select>
                                                                            </div>
                                                                        </th>
                                                                        <th></th>
                                                                    </tr>
                                                                    <?php foreach($campos as $key=>$item){ ?>
                                                                        <tr>
                                                                            <td><textarea name="<?php  echo $item[1]; ?>" id="<?php  echo $item[2]; ?>" cols="<?php echo $cols; ?>" rows="2" class="form-control"><?php  echo $item[0]; ?></textarea></td>
                                                                            <td><textarea name="<?php  echo $item[4]; ?>" id="<?php  echo $item[5]; ?>" cols="<?php echo $cols; ?>" rows="2" class="form-control"><?php  echo $item[3]; ?></textarea></td>
                                                                            <td><textarea name="<?php  echo $item[7]; ?>" id="<?php  echo $item[8]; ?>" cols="<?php echo $cols; ?>" rows="2" class="form-control"><?php  echo $item[6]; ?></textarea></td>
                                                                            <td><textarea name="<?php  echo $item[10]; ?>" id="<?php  echo $item[11]; ?>" cols="<?php echo $cols; ?>" rows="2" class="form-control"><?php  echo $item[9]; ?></textarea></td>
                                                                            <td><textarea name="<?php  echo $item[13]; ?>" id="<?php  echo $item[14]; ?>" cols="<?php echo $cols; ?>" rows="2" class="form-control"><?php  echo $item[12]; ?></textarea></td>
                                                                            <td><textarea name="<?php  echo $item[16]; ?>" id="<?php  echo $item[17]; ?>" cols="<?php echo $cols; ?>" rows="2" class="form-control"><?php  echo $item[15]; ?></textarea></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    <? } ?>
                                                                </table>
                                                            </div>
                                                            <input type="hidden" id="idps" name="seccion9[id_ps]"  value="<?php echo $seccion->getIdPs() ?>">
                                                            <input type="hidden" id="idprograma"  name="seccion9[id_progama]" value="<?php echo $seccion->getIdPrograma() ?>">
                                                        </form>
                                                    </div>
                                                    <div class="direct-chat-contacts" style="height: 100%;">
                                                        Mensajes
                                                    </div>
                                                </div>
                                                <div class="box-footer foot<?php echo $seccion->getIdSeccion() ?>">
                                                    <a class="btn btn-success pull-right" onclick="guardar9(<?php echo $seccion->getIdSeccion() ?>,<?php echo $seccion->getIdPs() ?>);return false;" href="javascript:void(null);" title="Guardar" href="#">
                                                        <i class="fa fa-save"></i>&nbsp;&nbsp;<span>Guardar</span>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php }break;
                                    }
                                }
                                if($key == 11) { ?>
                                    <div class="box box-primary direct-chat direct-chat-primary collapsed-box prseccion<?php echo $key ?>">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">
                                                <a data-widget="collapse" style="cursor:pointer;">
                                                    <?php echo Datossecciones::Nombreseccion($key) ?>
                                                </a>
                                            </h3>
                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="direct-chat-messages" style="height: auto;">
                                                <form action="#" method="post" id="frmeditor1-<?php echo $key; ?>" name="frmeditor1-<?php echo $key; ?>">
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <th width="70">No. Anexo</th>
                                                            <th width="250" align="center">Titulo</th>
                                                            <th width="350" align="center">Comentarios</th>
                                                            <th width="100"></th>
                                                            <th width="70"></th>
                                                        </tr>
                                                        <?php
                                                        $i=1;
                                                        foreach($programa->getProgramaAnexos() as $key2=>$item){?>
                                                            <script>
                                                                $( document ).ready(function() {
                                                                    $( ".btnarchivoedit" ).click(function() {
                                                                        var idarchivo = $(this).attr('b-id');
                                                                        $("#label1"+idarchivo).css({"display":"none"});
                                                                        $(".btnarchivoguardar"+idarchivo).show();
                                                                        $("#inputarchivo"+idarchivo).show();
                                                                        $("#inputarchivo"+idarchivo).focus();
                                                                    });
                                                                    $( ".btnarchivoeditc" ).click(function() {
                                                                        var idarchivo = $(this).attr('b-id');
                                                                        $("#label2"+idarchivo).css({"display":"none"});
                                                                        $(".btnarchivoguardarc"+idarchivo).show();
                                                                        $("#text"+idarchivo).show();
                                                                        $("#text"+idarchivo).focus();
                                                                    });
                                                                });
                                                                function acta(idarchivo){
                                                                    $(".btnarchivoguardar"+idarchivo).html('<i class="fa fa-save"></i>');
                                                                    $.post("<?php echo url_for('programa/actarchivo') ?>", { idanexo: idarchivo, nombre: $('#inputarchivo'+idarchivo).val()},
                                                                    function(data){
                                                                        data=jQuery.parseJSON(data);
                                                                        if(data.status==1){
                                                                            $(".btnarchivoguardar"+idarchivo).html('<i class="fa fa-check" style="color: green;"></i>');
                                                                            $("#inputarchivo"+idarchivo).css({"display":"none"});
                                                                            $("#label1"+idarchivo).html($('#inputarchivo'+idarchivo).val());
                                                                            $("#label1"+idarchivo).show();
                                                                        }else if(data.status==2){
                                                                            $(".btnarchivoguardar"+idarchivo).hide();
                                                                            $("#inputarchivo"+idarchivo).css({"display":"none"});
                                                                            $("#label1"+idarchivo).html($('#inputarchivo'+idarchivo).val());
                                                                            $("#label1"+idarchivo).show();
                                                                        }else{
                                                                            $(".btnarchivoguardar"+idarchivo).html('<i class="fa fa-warning"></i>');
                                                                        }
                                                                    });

                                                                    $(".btnarchivoguardarc"+idarchivo).html('<i class="fa fa-save"></i>');
                                                                    $.post("<?php echo url_for('programa/actarchivo1') ?>", { idanexo: idarchivo, comentarios: $('#text'+idarchivo).val()},
                                                                    function(data){
                                                                        data=jQuery.parseJSON(data);
                                                                        if(data.status==1){
                                                                            $(".btnarchivoguardarc"+idarchivo).html('<i class="fa fa-check" style="color: green;"></i>');
                                                                            $("#text"+idarchivo).css({"display":"none"});
                                                                            $("#label2"+idarchivo).html($('#text'+idarchivo).val());
                                                                            $("#label2"+idarchivo).show();
                                                                        }else if(data.status==2){
                                                                            $(".btnarchivoguardarc"+idarchivo).hide();
                                                                            $("#text"+idarchivo).css({"display":"none"});
                                                                            $("#label2"+idarchivo).html($('#text'+idarchivo).val());
                                                                            $("#label2"+idarchivo).show();
                                                                        }else{
                                                                            $(".btnarchivoguardarc"+idarchivo).html('<i class="fa fa-warning"></i>');
                                                                        }
                                                                    });
                                                                };
                                                            </script>
                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td>
                                                                    <span class="itemarchivo" a-id="<?php echo $item->getIdAnexo(); ?>">
                                                                        <span class="btnarchivoedit" b-id="<?php echo $item->getIdAnexo(); ?>" style="width:40px; cursor:pointer;">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </span>
                                                                        <label id="label1<?php echo $item->getIdAnexo(); ?>" style="font-weight: normal"><?php echo basename($item->getNombre()); ?></label>
                                                                        <input type='text' id='inputarchivo<?php echo $item->getIdAnexo(); ?>' size='50' maxlength='50' value='<?php echo basename($item->getNombre()); ?>' style="display: none;">
                                                                        <span class="btnarchivoguardar<?php echo $item->getIdAnexo(); ?>" onclick="acta(<?php echo $item->getIdAnexo(); ?>);" i-id="<?php echo $item->getIdAnexo(); ?>" style="display:none; width:35px; cursor:pointer; z-index: 1">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span class="itemarchivo" a-id="<?php echo $item->getIdAnexo(); ?>">
                                                                        <span class="btnarchivoeditc" b-id="<?php echo $item->getIdAnexo(); ?>" style="width:40px; cursor:pointer;">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </span>
                                                                        <label id="label2<?php echo $item->getIdAnexo(); ?>" style="font-weight: normal"><?php echo basename($item->getComentarios()); ?></label>
                                                                        <textarea id="text<?php echo $item->getIdAnexo(); ?>" style="display: none;" rows="2" cols="49"><?php echo basename($item->getComentarios()); ?></textarea>
                                                                        <span class="btnarchivoguardarc<?php echo $item->getIdAnexo(); ?>" onclick="acta(<?php echo $item->getIdAnexo(); ?>);" i-id="<?php echo $item->getIdAnexo(); ?>" style="display:none; width:35px; cursor:pointer; z-index: 1">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                                    </span>
                                                                </td>

                                                                <td>
                                                                    <a class="pull-right" target="_blank" href="<?php echo public_path('uploads/docs/'.$item->getUrl());  ?>" title="Descargar" href="#"><i class="fa fa-download"></i>&nbsp;&nbsp;<span>Descargar</span></a>
                                                                </td>
                                                                <td>
                                                                    <?php echo link_to('<i class="fa fa-trash"></i>&nbsp;&nbsp;<span>Borrar</span></a>', 'programa/archivo?archivo='.$item->getUrl(), array('method' => 'delete','class'=>'pull-right', 'confirm' => 'Desea borrar el archivo?')) ?>
                                                                </td>
                                                            </tr>
                                                        <? $i++; } ?>
                                                    </table>
                                                    <input type="hidden" id="idps" name="seccion11[id_ps]"  value="<?php echo $key2; ?>">
                                                    <input type="hidden" id="idprograma"  name="seccion11[id_progama]" value="<?php echo $programa->getIdPrograma() ?>">
                                                </form>
                                            </div>
                                            <div class="direct-chat-contacts" style="height: 100%;">
                                                Mensajes
                                            </div>

                                        </div>
                                        <div class="box-footer foot<?php echo $key; ?>">

                                            <a class="btn btn-success pull-right" style="margin-left:10px;" data-toggle="modal" data-target="#archivos" data-comite="<?php echo $programa->getComite();?>" title="Anexar Archivo" href="#">
                                                <i class="fa fa-plus"></i>&nbsp;&nbsp;<span>Agregar archivo</span>
                                            </a>
                                            <a class="btn btn-success pull-right"  title="Descargar Anexos" href="<?php echo url_for("programa/anexos")."?programa=".$programa->getIdPrograma(); ?>">
                                                <i class="fa fa-cloud"></i>&nbsp;&nbsp;<span>descargar anexos</span>
                                            </a>

                                        </div>

                                        <!--<div class="box-body">
                                            <div class="direct-chat-messages" style="height: auto;">
                                                <form action="#" method="post" id="frmeditor1-" name="">
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <th width="70">Reporte Anexos</th>
                                                            <th width="600"></th>
                                                            <th width="100"></th>
                                                            <th width="70"></th>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>-->
                                    </div>
                                <?php }
                            }
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="archivos" tabindex="-1" role="dialog" aria-labelledby="archivos">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Anexar archivo al comite <?php echo $programa->getComite();?></h4>
            </div>
            <form action="#" method="post" id="frmeditor11" name="frmeditor11" enctype="multipart/form-data">
                <div class="modal-body"  id="rsparchivo">
                    <div class="form-group">
                        <label for="message-text" class="control-label">Solo se pueden subir archivos ppt, pdf, doc,
                            docx, xls, xlsx, zip, imágenes, audio y video. (128MB máx.)</label>
                        <?php echo $formarchivos['url']->render(array('class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Nombre del archivo:</label>
                        <?php echo $formarchivos['nombre']->render(array('class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Comentarios:</label>
                        <?php echo $formarchivos['comentarios']->render(array('class'=>'form-control')); ?>
                        <?php echo $formarchivos['id_programa']->render(array('type'=>'hidden','value'=>$programa->getIdPrograma())); ?>
                        <?php echo $formarchivos->renderHiddenFields() ?>
                    </div>
                    <div class="form-group text-center" id="subiendotxt" >
                        <i class="fa fa-refresh fa-spin" style="font-size: 30px;"></i>&nbsp;&nbsp;<span"> Subiendo archivo</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="btnfilesubmit"><i class="fa fa-save"></i>&nbsp;&nbsp;Enviar</button>
                    <?php /*<a class="btn btn-primary"
                   onclick="guardar11(11,<?php echo $seccion->getIdPs() ?>);return false;" href="javascript:void(null);" title="Guardar" href="#"><i class="fa fa-save"></i>&nbsp;&nbsp;<span>Guardar</span></a>*/ ?>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        $('#archivos').on('show.bs.modal', function (event) {
            $('#subiendotxt').hide();
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('comite') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Anexar archivo al comite ' + recipient)
            //modal.find('.modal-body input').val(recipient)
        })
    });
</script>
