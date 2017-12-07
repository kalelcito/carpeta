<?php use_helper('Date') ?>
<?php use_helper('Otros'); ?>
<?php include_partial('inicio/navegacion', array('titulo' => 'empresa', 'subtitulo' => 'Ver empresa')) ?>
<?php slot('js') ?>
<!-- Page Specific JS Libraries -->
<script src="<?php echo public_path('assets', array('absolute' => 'true')); ?>/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo public_path('assets', array('absolute' => 'true')); ?>/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
<script src="<?php echo public_path('assets', array('absolute' => 'true')); ?>/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo public_path('assets', array('absolute' => 'true')); ?>/js/pages/datatables.js"></script>
<script>
    $(document).ready(function () {
        $('#datatables-5').dataTable({
            "sPaginationType": "bootstrap",
            "bProcessing": false,
            "bServerSide": true,
            "iDisplayLength": 10,
            "iDisplayStart": 0,
            "sAjaxSource": "<?php echo url_for('empresa/dtlist'); ?>",
            "sServerMethod": "POST",
            "sAjaxDataProp": "aaData",
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
                "sSwfPath": "<?php echo public_path('assets', array('absolute' => 'true')); ?>/libs/jquery-datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });
        //"bSort": true,
    });
</script>
<?php end_slot() ?>
<?php
use_stylesheet('/assets/libs/jquery-datatables/css/dataTables.bootstrap.css');
use_stylesheet('/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css');
?>
<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-header">
                <h2><strong>Lista</strong> empresa</h2>
                <?php /*<div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div> */ ?>
            </div>
            <div class="widget-content">
                <br>
                <div class="table-responsive">
                    <form class='form-horizontal' role='form'>
                        <table id="datatables-5" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Id empresa</th>
                                <th>Nombre empresa</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Nombre contacto</th>
                                <th>Activar sucursales</th>
                                <th>Tipo</th>
                                <th>Pais</th>
                                <th>Estado</th>
                                <th>Ciudad</th>
                                <th>Municipio</th>
                                <th>Numero</th>
                                <th>Direccion</th>
                                <th>Delegacion</th>
                                <th>Cp</th>
                                <th>Referencia</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


