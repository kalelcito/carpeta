<div class="content-wrapper">
    [?php include_partial('inicio/navegacion',array('titulo'=>'<?php echo $this->getSingularName() ?>','subtitulo'=>'Ver <?php echo $this->getSingularName() ?>')) ?]
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $this->getSingularName() ?></h3>
            </div>
            [?php include_partial('inicio/mensajes'); ?]
            [?php include_partial('form', array('form' => $form,'titulo'=>'Editar <?php echo sfInflector::humanize($this->getSingularName()) ?>')) ?]
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>

