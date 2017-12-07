<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php
$smleft = 2;
$smright = 10;
?>
<form class="form-horizontal" action="<?php echo url_for('login/empresa') ?>" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <?php echo $form->renderHiddenFields(); ?>

        <div class="form-group">
            <label class="col-sm-3 control-label">Nombre de la Empresa</label>
            <div class="col-sm-9">
                <?php echo $form['nombre_empresa']->render(array("class"=>"form-control","placeholder"=>"Nombre de la Empresa","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Logo de la Empresa</label>
            <div class="col-sm-9">
                <?php echo $form['logo']->render(array("class"=>"form-control")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Nombre de Contacto</label>
            <div class="col-sm-9">
                <?php echo $form['nombre_contacto']->render(array("class"=>"form-control","placeholder"=>"Nombre de Contacto","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <?php echo $form['email']->render(array("class"=>"form-control","placeholder"=>"Email","required"=>"required","type"=>"email")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Telefóno</label>
            <div class="col-sm-9">
                <?php echo $form['telefono']->render(array("class"=>"form-control","placeholder"=>"Telefóno","required"=>"required","type"=>"tel")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">País</label>
            <div class="col-sm-9">
                <?php echo $form['pais']->render(array("class"=>"form-control","placeholder"=>"País","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Estado</label>
            <div class="col-sm-9">
                <?php echo $form['estado']->render(array("class"=>"form-control","placeholder"=>"Estado","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Ciudad</label>
            <div class="col-sm-9">
                <?php echo $form['ciudad']->render(array("class"=>"form-control","placeholder"=>"Ciudad","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Municipio</label>
            <div class="col-sm-9">
                <?php echo $form['municipio']->render(array("class"=>"form-control","placeholder"=>"Municipio","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Número</label>
            <div class="col-sm-9">
                <?php echo $form['numero']->render(array("class"=>"form-control","placeholder"=>"Número","required"=>"required","type"=>"number","min"=>0)) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Dirección</label>
            <div class="col-sm-9">
                <?php echo $form['direccion']->render(array("class"=>"form-control","placeholder"=>"Dirección","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Delegación</label>
            <div class="col-sm-9">
                <?php echo $form['delegacion']->render(array("class"=>"form-control","placeholder"=>"Delegación","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Código Postal</label>
            <div class="col-sm-9">
                <?php echo $form['cp']->render(array("class"=>"form-control","placeholder"=>"Código Postal","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Nombre de Contacto</label>
            <div class="col-sm-9">
                <?php echo $form['referencia']->render(array("class"=>"form-control","placeholder"=>"Nombre de Contacto","required"=>"required")) ?>
            </div>
        </div>
    </div>
    <div class="box-footer">
        &nbsp;<a class="btn btn-default" style="margin:5px;" title="" href="<?php echo url_for('login/register') ?>">Regresar</a>
        <button type="submit" class="btn btn-success" style="margin:5px;">Guardar</button>
    </div>
</form>