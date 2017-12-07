<?php use_helper('Date') ?>
<?php use_helper('Otros'); ?>

<?php use_stylesheet('/plugins/datatables/dataTables.bootstrap.css') ?>
<?php use_javascript('/plugins/datatables/jquery.dataTables.min.js') ?>
<?php use_javascript('/plugins/datatables/dataTables.bootstrap.min.js') ?>
<?php /* slot('js') ?>
<!-- Page Specific JS Libraries -->
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/js/pages/datatables.js"></script>
<?php end_slot() ?>
<?php
use_stylesheet('/assets/libs/jquery-datatables/css/dataTables.bootstrap.css');
use_stylesheet('/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css');
*/
?>
<div class="content-wrapper">
    <?php include_partial('inicio/navegacion', array('titulo' => 'comite', 'subtitulo' => 'Ver comite')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tablero de Control</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">

                    </div>
                </div>
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
                <table class="table table-hover" id="example1">
                    <thead>
                    <tr>
                        <th>Comités</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($comites as $comite): ?>
                        <tr>
                            <td style="height: 41px; padding: 0;" class="col-md-12">
                                <div class="panel panel-default" style="padding: 0; margin-bottom: 0">
                                    <div class="panel-heading" style=" height: 41px" data-toggle="collapse" href="#" onclick="verdatos(<?php echo $comite->getIdComite() ?>);">
                                        <!--<h4 class="panel-title" style="height: 41px">-->
                                            <?php /*echo $comite->getNombreComite() */?>
                                            <span class="col-md-8"><?php echo $comite->getNombreComite() ?></span>
                                            <span class="col-md-2" style="text-align: center"><?php echo $comite->getActualizado() ?></span>
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
                                            <span class="col-md-1" style="text-align: center"><span <?php echo $estilo ?>  style="width: 60px; text-align: center;"><?php echo $calificacion?></span></span>
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
                                            <span class="col-md-1" style="text-align: center"> <?php echo image_tag('../uploads/imagenes/'.$imagen, array('style' => 'width: 30px')); ?></span>
                                            <!--</h4>-->
                                    </div>
                                    <div id="<?php echo $comite->getIdComite(); ?>" class="panel-collapse collapse">
                                        <div class="panel-body" id="panelcomite<?php echo $comite->getIdComite(); ?>">

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
                <?php /*   <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li> */ ?>
                </ul>
            </div>
        </div>
    </section>
</div>

<script>
    $(function () {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "iDisplayLength": 50,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
            }
        });
    });
</script>