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
    <?php include_partial('inicio/navegacion', array('titulo' => 'empresa', 'subtitulo' => 'Ver empresa')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Empresas</h3>

                <div class="box-tools">

                </div>
            </div>
            <?php include_partial('inicio/mensajes'); ?>
            <div class="box-body table-responsive">
                <table class="table table-hover" id="example1">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre empresa/corporativo</th>
                        <th>Telefono</th>
                        <th>Contacto</th>
                        <th width="30">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($empresas as $empresa): ?>
                        <tr>
                            <td>
                                <a href="<?php echo url_for('empresa/show?id_empresa=' . $empresa->getIdEmpresa()) ?>"><?php echo $i; ?></a>
                            </td>
                            <td>
                                <a href="<?php echo url_for('empresa/show?id_empresa=' . $empresa->getIdEmpresa()) ?>"><?php echo $empresa->getNombreEmpresa() ?></a>
                            </td>
                            <td><?php echo $empresa->getTelefono() ?></td>
                            <td><?php echo $empresa->getNombreContacto() ?></td>
                            <td>
                                <div class="btn-group btn-group-xs">
                                    <a href="<?php echo url_for('empresa/show?id_empresa=' . $empresa->getIdEmpresa()) ?>" data-toggle="tooltip" title="Ver" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <?php if (Privilegios::editarempresa($sf_user->getRol())){ ?>
                                        <a href="<?php echo url_for('empresa/edit?id_empresa=' . $empresa->getIdEmpresa()) ?>" data-toggle="tooltip" title="Editar" class="btn btn-default">
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



