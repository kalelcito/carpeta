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
    <?php include_partial('inicio/navegacion', array('titulo' => 'programa', 'subtitulo' => 'Ver programa')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">programa</h3>
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
                        <th>Id programa</th>
                        <th>Id requisito</th>
                        <th>Id comite</th>
                        <th>Nombre</th>
                        <th>Coordinador</th>
                        <th>Calificacion</th>
                        <th>Fecha elaboracion</th>
                        <th>Fecha revision</th>
                        <th>Id usuario elaboro</th>
                        <th>Id consultor</th>
                        <th>Fecha compromiso</th>
                        <th>No revision</th>
                        <th>Id usuario reviso</th>
                        <th>Id usuario modifico</th>
                        <th>Fecha modifico</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($programas as $programa): ?>
                        <tr>
                            <td>
                                <a href="<?php echo url_for('programa/show?id_programa=' . $programa->getIdPrograma()) ?>"><?php echo $programa->getIdPrograma() ?></a>
                            </td>
                            <td><?php echo $programa->getIdRequisito() ?></td>
                            <td><?php echo $programa->getIdComite() ?></td>
                            <td><?php echo $programa->getNombre() ?></td>
                            <td><?php echo $programa->getCoordinador() ?></td>
                            <td><?php echo $programa->getCalificacion() ?></td>
                            <td><?php echo $programa->getFechaElaboracion() ?></td>
                            <td><?php echo $programa->getFechaRevision() ?></td>
                            <td><?php echo $programa->getIdUsuarioElaboro() ?></td>
                            <td><?php echo $programa->getIdConsultor() ?></td>
                            <td><?php echo $programa->getFechaCompromiso() ?></td>
                            <td><?php echo $programa->getNoRevision() ?></td>
                            <td><?php echo $programa->getIdUsuarioReviso() ?></td>
                            <td><?php echo $programa->getIdUsuarioModifico() ?></td>
                            <td><?php echo $programa->getFechaModifico() ?></td>
                            <td><?php echo $programa->getCreado() ?></td>
                            <td><?php echo $programa->getActualizado() ?></td>
                            <td>
                                <div class="btn-group btn-group-xs">
                                    <a href="<?php echo url_for('programa/show?id_programa=' . $programa->getIdPrograma()) ?>" data-toggle="tooltip" title="Ver" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="<?php echo url_for('programa/edit?id_programa=' . $programa->getIdPrograma()) ?>" data-toggle="tooltip" title="Editar" class="btn btn-default">
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
                <!-- /.box-body   <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul> -->
            </div>
        </div>
    </section>
</div>


