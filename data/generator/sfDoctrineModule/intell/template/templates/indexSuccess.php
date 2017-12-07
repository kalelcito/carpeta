[?php use_helper('Date') ?]
[?php use_helper('Otros'); ?]
[?php /* slot('js') ?]
<!-- Page Specific JS Libraries -->
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/js/pages/datatables.js"></script>
[?php end_slot() ?]
[?php
use_stylesheet('/assets/libs/jquery-datatables/css/dataTables.bootstrap.css');
use_stylesheet('/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css');
*/
?]
<div class="content-wrapper">
    [?php include_partial('inicio/navegacion',array('titulo'=>'<?php echo $this->getSingularName() ?>','subtitulo'=>'Ver <?php echo $this->getSingularName() ?>')) ?]
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $this->getSingularName() ?></h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            [?php include_partial('inicio/mensajes'); ?]
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <?php foreach ($this->getColumns() as $column): ?>
                            <th><?php echo sfInflector::humanize(sfInflector::underscore($column->getPhpName())) ?></th>
                        <?php endforeach; ?>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    [?php foreach ($<?php echo $this->getPluralName() ?> as $<?php echo $this->getSingularName() ?>): ?]
                    <tr>
                        <?php foreach ($this->getColumns() as $column): ?>
                            <?php if ($column->isPrimaryKey()): ?>
                                <?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
                                    <td><a href="[?php echo url_for('<?php echo $this->getUrlForAction(isset($this->params['with_show']) && $this->params['with_show'] ? 'show' : 'edit') ?>', $<?php echo $this->getSingularName() ?>) ?]">[?php echo $<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>() ?]</a></td>
                                <?php else: ?>
                                    <td><a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/<?php echo isset($this->params['with_show']) && $this->params['with_show'] ? 'show' : 'edit' ?>?<?php echo $this->getPrimaryKeyUrlParams() ?>) ?]">[?php echo $<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>() ?]</a></td>
                                <?php endif; ?>
                            <?php else: ?>
                                <td>[?php echo $<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>() ?]</td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <td>
                            <div class="btn-group btn-group-xs">
                                <a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/show?<?php echo $this->getPrimaryKeyUrlParams() ?>) ?]" data-toggle="tooltip" title="Ver" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/edit?<?php echo $this->getPrimaryKeyUrlParams() ?>) ?]" data-toggle="tooltip" title="Editar" class="btn btn-default">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    [?php endforeach; ?]

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
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


