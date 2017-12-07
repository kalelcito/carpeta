<div class="content-wrapper">
    <?php include_partial('inicio/navegacion',array('titulo'=>'programa','subtitulo'=>'Ver programa')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">programa</h3>
            </div>
            <?php include_partial('inicio/mensajes'); ?>
            <?php include_partial('form', array('form' => $form,'titulo'=>'Nuevo Programa','id_comite'=>$comite,'id_requisito'=>$requisito)) ?>
        </div>
    </section>
</div>

