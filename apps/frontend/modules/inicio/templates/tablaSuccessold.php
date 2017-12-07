<div class="content-wrapper">
    <?php include_partial('inicio/navegacion'); ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tabla de Control</h3><br/>
            </div>
            <?php include_partial('inicio/mensajes'); ?>
            <script>
                function verdatos(idc) {
                    $.ajax({
                        url: "<?php echo url_for('inicio/tablacomite') ?>?idc="+idc,
                        type: 'POST',
                        data: "",
                        success: function (data) {
                           $("#panelcomite"+idc).html(data);
                            /*$("#"+idc).show();*/
                            $("#"+idc).slideToggle("slow");
                            $(this).toggleClass("active"); return false;
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                    return false;
                }
            </script>
            <div class="box-body table-responsive">
                <div class="panel-group">
                    <table class="table table-striped" style="margin-bottom: 0">
                        <thead>
                        <tr>
                            <th width="55%" style="padding-bottom: 0"><h4>Comites</h4></th>
                            <th width="15%" style="text-align: center; padding-bottom: 0"><h4>Fecha de Modificación</h4></th>
                            <th width="15%" style="text-align: center; padding-bottom: 0"><h4>Calificación</h4></th>
                            <th width="15%" style="text-align: center; padding-bottom: 0"></th>
                        </tr>
                        </thead>
                    </table>
                    <?php foreach ($comites as $comite){?>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="padding: 0;">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#" onclick="verdatos(<?php echo $comite->getIdComite() ?>);">
                                        <table class="table table-striped" style="margin-bottom: 0">
                                            <thead>
                                            <tr>
                                                <td width="55%"><?php echo $comite->getNombreComite() ?></td>
                                                <td width="15%" style="text-align: center"><?php echo $comite->getActualizado() ?></td>
                                                <?php $calificacion= $comite->getCalificacion();
                                                $minimos=$comite->getMinimos();
                                                if ($calificacion<=5.9){
                                                    $estilo="class='badge bg-red'";
                                                }elseif ($calificacion>=6 && $calificacion<=7.9){
                                                    $estilo="class='badge bg-yellow'";
                                                }elseif ($calificacion>=8 && $calificacion<=10){
                                                    $estilo="class='badge bg-green'";
                                                }
                                                ?>
                                                <td width="15%" style="text-align: center"><span <?php echo $estilo ?>  style="width: 60px; text-align: center;"><?php echo $calificacion?></span></td>
                                                <?php
                                                if ($calificacion>=9){
                                                    if($minimos==1){
                                                        $imagen="er22.png";
                                                    }else{
                                                        $imagen="er23.png";
                                                    }
                                                }else{
                                                    $imagen="er23.png";
                                                }
                                                ?>
                                                <td width="15%" style="text-align: center"> <?php echo image_tag('../uploads/imagenes/'.$imagen, array('style' => 'width: 30px')); ?></td>
                                            </tr>
                                            </thead>
                                        </table>
                                    </a>
                                </h4>
                            </div>
                            <div id="<?php echo $comite->getIdComite(); ?>" class="panel-collapse collapse">
                                <div class="panel-body" id="panelcomite<?php echo $comite->getIdComite(); ?>">

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="box-footer">
            </div>
        </div>
    </section>
</div>