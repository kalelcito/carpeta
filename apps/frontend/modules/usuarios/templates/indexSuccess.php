<?php use_helper('Date') ?>
<?php use_helper('Otros'); ?>
<?php use_stylesheet('/plugins/datatables/dataTables.bootstrap.css') ?>
<?php use_javascript('/plugins/datatables/jquery.dataTables.min.js') ?>
<?php use_javascript('/plugins/datatables/dataTables.bootstrap.min.js') ?>
<?php /* slot('js') ?>
 <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
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
    <?php include_partial('inicio/navegacion', array('titulo' => 'usuario', 'subtitulo' => 'Ver usuario')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Usuarios</h3>
                <div class="box-tools">
                    <?php /*<div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>*/ ?>
                </div>
            </div>

            <?php include_partial('inicio/mensajes'); ?>
            <div class="box-body table-responsive">
                <table class="table table-hover" id="example1">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre completo</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Empresa</th>
                        <th>Status</th>
                        <?php /*<th>Creado</th>
                                                    <th>Actualizado</th> */ ?>
                        <th width="30">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td>
                                <a href="<?php echo url_for('usuarios/show?id_usuario=' . $usuario->getIdUsuario()) ?>"><?php echo $i; ?></a>
                            </td>
                            <td><?php echo $usuario->getNombre()." ". $usuario->getPrimerApellido()." ".$usuario->getSegundoApellido()  ?></td>
                            <td>
                                <a href="<?php echo url_for('usuarios/show?id_usuario=' . $usuario->getIdUsuario()) ?>">
                                    <?php echo $usuario->getNombreUsuario() ?>
                                </a>
                            </td>
                            <td><?php echo $usuario->getEmail() ?></td>
                            <td>
                                <a href="<?php echo url_for('empresa/show?id_empresa=' . $usuario->getIdEmpresa()) ?>">
                                    <?php echo $usuario->getEmpresa() ?>
                                </a>
                            </td>
                            <td>
                                <?php echo $usuario->getActivo()?'<i class="fa fa-check" >':'<i class="fa fa-close" >' ?>
                            </td>
                            <td>
                                <div class="btn-group btn-group-xs">
                                    <a href="<?php echo url_for('usuarios/show?id_usuario=' . $usuario->getIdUsuario()) ?>" data-toggle="tooltip" title="Ver" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <?php if( Privilegios::editarusuario($sf_user->getRol())){ ?>
                                        <a href="<?php echo url_for('usuarios/edit?id_usuario=' . $usuario->getIdUsuario()) ?>" data-toggle="tooltip" title="Editar" class="btn btn-default">
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
            <!-- /.box-body
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>-->
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


