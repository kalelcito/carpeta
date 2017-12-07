<?php use_helper('Date') ?>
<?php use_helper('Otros'); ?>
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
    <?php include_partial('inicio/navegacion', array('titulo' => 'usuario_grupo', 'subtitulo' => 'Ver usuario_grupo')) ?>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">usuario_grupo</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_partial('inicio/mensajes'); ?>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id grupo</th>
                        <th>Nombre</th>
                        <th>Permisos</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($usuario_grupos as $usuario_grupo): ?>
                        <tr>
                            <td>
                                <a href="<?php echo url_for('grupo/show?id_grupo=' . $usuario_grupo->getIdGrupo()) ?>"><?php echo $usuario_grupo->getIdGrupo() ?></a>
                            </td>
                            <td><?php echo $usuario_grupo->getNombre() ?></td>
                            <td><?php echo $usuario_grupo->getPermisos() ?></td>
                            <td>
                                <div class="btn-group btn-group-xs">
                                    <a href="<?php echo url_for('grupo/show?id_grupo=' . $usuario_grupo->getIdGrupo()) ?>" data-toggle="tooltip" title="Ver" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="<?php echo url_for('grupo/edit?id_grupo=' . $usuario_grupo->getIdGrupo()) ?>" data-toggle="tooltip" title="Editar" class="btn btn-default">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>


