<?php $smleft=2;
$smright=10;
?>

<?php use_javascript('https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js'); ?>
<script>
    $(function () {
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
        CKEDITOR.replace('editor4');
        CKEDITOR.replace('editor5');
        CKEDITOR.replace('editor6');
        CKEDITOR.replace('editor7');
        CKEDITOR.replace('editor8');
        CKEDITOR.replace('editor9');
        CKEDITOR.replace('editor10');
    });
</script>

<div class="content-wrapper">
    <?php include_partial('inicio/navegacion',array('titulo'=>'programa','subtitulo'=>'Ver programa')) ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Programa <?php echo $programa->getNombre() ?></h3>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <strong>Empresa:</strong> <?php echo $programa->getComite()->getUnidad()->getEmpresa(); ?><br/>
                            <strong>Nombre del programa:</strong> <?php echo $programa->getNombre() ?><br/>
                            <strong>Requisito Norma CRESE:</strong> <?php echo $programa->getRequisito() ?><br />
                            <strong>Fecha de elaboración:</strong> <?php echo $programa->getCreado() ?><br />
                            <strong>Fecha de actualización:</strong> <?php echo $programa->getActualizado() ?>
                        </div>
                        <div class="col-md-6">
                            <form class="form-inline">
                                <label for="inputEmail3" class="col-sm-4 control-label" style="padding-left:0px; padding-top: 7px;">Coordinador:</label>
                                <div class="input-group col-sm-8" id="coordinador">
                                    <input type="text" id="newcoordinador" class="form-control"  value="<?php echo $programa->getCoordinador(); ?>">
                                    <span class="input-group-addon" id="btncoordinador" style="display: none;cursor: pointer;">
                                        <i class="fa fa-save"></i>
                                    </span>
                                </div>
                                <br/>
                                <strong>No. de revisión:</strong> <?php echo $programa->getNoRevision();?><br/>
                                <strong>Fecha compromiso:</strong> <?php echo $programa->getFechaCompromiso(); ?><br />
                                <a href="<?php echo url_for('programa/edit?id_programa='.$programa->getIdPrograma()) ?>" class="btn btn-sm btn-success"><b>Editar</b></a>
                            </form>
                        </div>
                        <script>
                            $( "#coordinador" ).change(function() {
                                $("#btncoordinador").show();
                            });
                            $( "#btncoordinador" ).click(function() {
                                $("#btncoordinador").html('<i class="fa fa-save"></i>');
                                $.post("<?php echo url_for('programa/actcoord') ?>", { idprograma: <?php echo $programa->getIdPrograma(); ?>, coordinador: $('#newcoordinador').val()}, 
                                function(data){
                                    data=jQuery.parseJSON(data);
                                    if(data.status==1){
                                        $("#btncoordinador").html('<i class="fa fa-check" style="color: green;"></i>');
                                    }else if(data.status==2){
                                        $("#btncoordinador").hide();
                                    }else{
                                        $("#btncoordinador").html('<i class="fa fa-warning"></i>');
                                    }
                                });
                            });
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
                        <div class="box box-primary direct-chat direct-chat-primary collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title">
                                    <a data-widget="collapse" >
                                        Antecedentes
                                    </a>
                                </h3>
                                <div class="box-tools pull-right">
                                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>
                                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                                        <i class="fa fa-comments"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="direct-chat-messages">
                                    msg
                                </div>
                                <div class="direct-chat-contacts">
                                    contacts
                                </div>
                            </div>
                            <div class="box-footer">
                                <a class="btn btn-primary pull-left"  title="" href="#"><i class="fa fa-trash"></i>&nbsp;&nbsp;<span>Limpiar</span></a>
                                <a class="btn btn-success pull-right"  title="" href="#"><i class="fa fa-save"></i>&nbsp;&nbsp;<span>Guardar</span></a>
                            </div>
                        </div>
                        <div class="box-group" id="accordion">
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Antecedentes
                                        </a>
                                    </h4>
                                    <div class="box-tools pull-right">
                                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
                                    </div>
                                    <div class="box-footer">
                                        <a class="btn btn-primary pull-left"  title="" href="#"><i class="fa fa-trash"></i>&nbsp;&nbsp;<span>Limpiar</span></a>
                                        <a class="btn btn-success pull-right"  title="" href="#"><i class="fa fa-save"></i>&nbsp;&nbsp;<span>Guardar</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Justificación
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor2" name="editor2" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                           Aspecto Legal
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor3" name="editor3" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            Objetivos
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor4" name="editor4" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                            Alcance
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor5" name="editor5" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                            Difusión
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor6" name="editor6" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                            Procedimiento del programa
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor7" name="editor7" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                            Participación
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor8" name="editor8" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree9">
                                            Métricas/Ahorros
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree9" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor9" name="editor9" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree10">
                                            Vinculación con los elementos que conforman la estrategia de la empresa
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree10" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <textarea id="editor10" name="editor10" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
