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
                <h3 class="box-title">Comités</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">

                    </div>
                </div>
            </div>
            <?php include_partial('inicio/mensajes'); ?>
            <div class="box-body table-responsive">
                <table class="table table-hover" id="example1">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Unidad de negocios/sucursal</th>
                        <th>Empresa</th>
                        <th>Administrador</th>
                        <th width="30">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($comites as $comite): ?>
                        <tr>
                            <td>
                                <a href="<?php echo url_for('comite/show?id_comite=' . $comite->getIdComite()) ?>"><?php echo $i; ?></a>
                            </td>
                            <td><?php echo $comite->getUnidad() ?></td>
                            <td><?php echo $comite->getUnidad()->getEmpresa() ?></td>
                            <td><?php echo $comite->getUsuario() ?></td>
                            <td>
                                <div class="btn-group btn-group-xs">
                                    <a href="<?php echo url_for('comite/show?id_comite=' . $comite->getIdComite()) ?>" data-toggle="tooltip" title="Ver" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <?php if (Privilegios::editarcomite($sf_user->getRol())) { ?>
                                        <a href="<?php echo url_for('comite/edit?id_comite=' . $comite->getIdComite()) ?>" data-toggle="tooltip" title="Editar" class="btn btn-default">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    <?php } ?>
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