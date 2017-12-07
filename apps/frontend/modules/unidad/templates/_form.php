<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php /* slot('js') ?>
<!-- Page Specific JS Libraries -->
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/bootstrap-inputmask/inputmask.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/summernote/summernote.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/js/pages/forms.js"></script>
<?php end_slot(); */
$smleft=2;
$smright=10;
?>
<form class="form-horizontal" action="<?php echo url_for('unidad/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_unidad='.$form->getObject()->getIdUnidad() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <div class="box-body">
        <?php if (!$form->getObject()->isNew()): ?>
            <input type="hidden" name="sf_method" value="put" />
        <?php endif; ?>
        <?php echo $form ?>
    </div>
    <div class="box-footer">
        &nbsp;<a class="btn btn-default" style="margin:5px;" title="" href="<?php echo url_for('unidad/index') ?>">Regresar</a>
        <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('<span>Borrar</span>', 'unidad/delete?id_unidad='.$form->getObject()->getIdUnidad(), array('method' => 'delete','class'=>'btn btn-danger','style'=>'margin: 5px;', 'confirm' => 'Desea borrar el registro?')) ?>
        <?php endif; ?>
        <button type="submit" class="btn btn-success" style="margin:5px;">Guardar</button>
    </div>
</form>


