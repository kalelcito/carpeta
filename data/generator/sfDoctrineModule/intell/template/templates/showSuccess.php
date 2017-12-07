[?php $smleft=2;
$smright=10;
?]

<div class="content-wrapper">
    [?php include_partial('inicio/navegacion',array('titulo'=>'<?php echo $this->getSingularName() ?>','subtitulo'=>'Ver <?php echo $this->getSingularName() ?>')) ?]
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $this->getSingularName() ?></h3>
            </div>
            <form class="form-horizontal" ?>
                <div class="box-body">
                    <?php foreach ($this->getColumns() as $column): ?>
                        <div class="form-group">
                            <label class="col-sm-[?php echo $smleft; ?] control-label"><?php echo sfInflector::humanize(sfInflector::underscore($column->getPhpName())) ?></label>
                            <div class="col-sm-[?php echo $smright; ?]">
                                <p class="form-control-static">[?php echo $<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>() ?]</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
                        <a class="btn btn-success" style="margin: 5px;" title="" href="[?php echo url_for('<?php echo $this->getUrlForAction('edit') ?>', $<?php echo $this->getSingularName() ?>) ?]"><span>Editar</span></a>
                        &nbsp;
                        <a class="btn btn-default" style="margin: 5px;" title="" href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]"><span>Regresar</span></a>
                    <?php else: ?>
                        <a class="btn btn-success" style="margin: 5px;" title="" href="[?php echo url_for('<?php echo $this->getModuleName() ?>/edit?<?php echo $this->getPrimaryKeyUrlParams() ?>) ?]"><span>Editar</span></a>
                        &nbsp;
                        <a class="btn btn-default" style="margin: 5px;" title="" href="[?php echo url_for('<?php echo $this->getModuleName() ?>/index') ?]"><span>Regresar</span></a>
                    <?php endif; ?>
                </div>
                <!-- /.box-footer -->
            </form>


        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
