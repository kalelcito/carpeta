[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]
[?php /* slot('js') ?]
<!-- Page Specific JS Libraries -->
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/bootstrap-inputmask/inputmask.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/summernote/summernote.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/js/pages/forms.js"></script>
[?php end_slot(); */
$smleft=2;
$smright=10;
?]
<?php $form = $this->getFormObject() ?>
<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
    [?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>') ?]
<?php else: ?>
<form class="form-horizontal" action="[?php echo url_for('<?php echo $this->getModuleName() ?>/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?<?php echo $this->getPrimaryKeyUrlParams('$form->getObject()', true) ?> : '')) ?]" method="post" [?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?]>
    <div class="box-body">
        [?php if (!$form->getObject()->isNew()): ?]
        <input type="hidden" name="sf_method" value="put" />
        [?php endif; ?]
        <?php if (isset($this->params['non_verbose_templates']) && $this->params['non_verbose_templates']): ?>
            [?php echo $form ?]
        <?php else: ?>
            [?php echo $form->renderGlobalErrors() ?]
            <?php foreach ($form as $name => $field): if ($field->isHidden()) continue ?>
                <div class="form-group ">
                    [?php echo $form['<?php echo $name ?>']->renderLabel() ?]
                    <div class="col-sm-10">
                        [?php echo $form['<?php echo $name ?>'] ?]
                        <p class="help-block">
                            [?php echo $form['<?php echo $name ?>']->renderHelp() ?]
                            [?php echo $form['<?php echo $name ?>']->renderError() ?]
                        </p>
                    </div>
                </div>

                <tr>
                    <th></th>
                    <td>


                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <?php if (!isset($this->params['non_verbose_templates']) || !$this->params['non_verbose_templates']): ?>
            [?php echo $form->renderHiddenFields(false) ?]
        <?php endif; ?>

        <?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
            &nbsp;<a class="btn btn-default" style="margin:5px;" title="" href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]">Regresar</a>
        <?php else: ?>
            &nbsp;<a class="btn btn-default" style="margin:5px;" title="" href="[?php echo url_for('<?php echo $this->getModuleName() ?>/index') ?]">Regresar</a>
        <?php endif; ?>
        [?php if (!$form->getObject()->isNew()): ?]
        <?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
            &nbsp;[?php echo link_to('<span>Borrar</span>', '<?php echo $this->getUrlForAction('delete') ?>', $form->getObject(), array('method' => 'delete', 'class'=>'btn btn-danger','style'=>'margin: 5px;', 'confirm' => 'Desea borrar el registro?')) ?]
        <?php else: ?>
            &nbsp;[?php echo link_to('<span>Borrar</span>', '<?php echo $this->getModuleName() ?>/delete?<?php echo $this->getPrimaryKeyUrlParams('$form->getObject()', true) ?>, array('method' => 'delete','class'=>'btn btn-danger','style'=>'margin: 5px;', 'confirm' => 'Desea borrar el registro?')) ?]
        <?php endif; ?>
        [?php endif; ?]
        <button type="submit" class="btn btn-success" style="margin:5px;">Guardar</button>
    </div>
    <!-- /.box-footer -->
</form>


<?php endif;?>
