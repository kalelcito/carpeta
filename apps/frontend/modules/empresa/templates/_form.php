<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php
$smleft = 2;
$smright = 10;
?>
<form class="form-horizontal"
      action="<?php echo url_for('empresa/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id_empresa=' . $form->getObject()->getIdEmpresa() : '')) ?>"
      method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <div class="box-body">
        <?php if (!$form->getObject()->isNew()): ?>
            <input type="hidden" name="sf_method" value="put"/>
        <?php endif; ?>
        <?php echo $form ?>
    </div>
    <div class="box-footer">
        &nbsp;<a class="btn btn-default" style="margin:5px;" title="" href="<?php echo url_for('empresa/index') ?>">Regresar</a>
        <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('<span>Borrar</span>', 'empresa/delete?id_empresa=' . $form->getObject()->getIdEmpresa(), array('method' => 'delete', 'class' => 'btn btn-danger', 'style' => 'margin: 5px;', 'confirm' => 'Desea borrar el registro?')) ?>
        <?php endif; ?>
        <button type="submit" class="btn btn-success" style="margin:5px;">Guardar</button>
    </div>
</form>