<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php /* slot('js') ?>
<!-- Page Specific JS Libraries -->
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/bootstrap-inputmask/inputmask.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/summernote/summernote.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/js/pages/forms.js"></script>
<?php end_slot(); */
$smleft = 2;
$smright = 10;
?>
<form class="form-horizontal"
      action="<?php echo url_for('programa/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id_comite=' . $id_comite . '&id_requisito=' . $id_requisito . '&id_programa=' . $form->getObject()->getIdPrograma() : '?id_comite=' . $id_comite . '&id_requisito=' . $id_requisito)) ?>"
      method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <div class="box-body">
        <?php if (!$form->getObject()->isNew()): ?>
            <input type="hidden" name="sf_method" value="put"/>
        <?php endif; ?>
        <?php echo $form ?>
    </div>
    <div class="box-footer">
        &nbsp;
        <?php if (!$form->getObject()->isNew()) { ?>
            <a class="btn btn-default" style="margin:5px;" title="" href="<?php echo url_for('programa/show?id_programa=' . $form->getObject()->getIdPrograma()) ?>">Regresar</a>
            &nbsp;<?php echo link_to('<span>Borrar</span>', 'programa/delete?id_programa=' . $form->getObject()->getIdPrograma(), array('method' => 'delete', 'class' => 'btn btn-danger', 'style' => 'margin: 5px;', 'confirm' => 'Desea borrar el registro?')) ?>
        <?php } else { ?>
            <a class="btn btn-default" style="margin:5px;" title="" href="<?php echo url_for('comite/show?id_comite=' . $id_comite) ?>">Regresar</a>
        <?php } ?>
        <button type="submit" class="btn btn-success" style="margin:5px;">Guardar</button>
    </div>
</form>