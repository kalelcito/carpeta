<div class="content-wrapper">
    <?php include_partial('inicio/navegacion',array('titulo'=>'empresa','subtitulo'=>'Ver empresa')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">empresa</h3>
            </div>
            <?php include_partial('inicio/mensajes'); ?>
            <?php include_partial('form', array('form' => $form,'titulo'=>'Nuevo Empresa')) ?>
        </div>
    </section>
</div>

