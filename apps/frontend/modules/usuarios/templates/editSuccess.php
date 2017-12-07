<div class="content-wrapper">
    <?php include_partial('inicio/navegacion',array('titulo'=>'usuario','subtitulo'=>'Ver usuario')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">usuario</h3>
            </div>
            <?php include_partial('inicio/mensajes'); ?>
            <?php include_partial('form', array('form' => $form,'titulo'=>'Editar Usuario')) ?>
        </div>
    </section>
</div>

