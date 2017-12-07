<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php
$smleft = 2;
$smright = 10;
?>

<form class="form-horizontal" action="<?php echo url_for('login/usuario') ?>" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <?php echo $form->renderHiddenFields(); ?>

        <div class="form-group">
            <label class="col-sm-3 control-label">Empresa</label>
            <div class="col-sm-9">
                <?php echo $form['id_empresa']->render(array("class"=>"form-control","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Privilegios</label>
            <div class="col-sm-9">
                <?php echo $form['id_grupo']->render(array("class"=>"form-control","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Sucursal</label>
            <div class="col-sm-9">
                <?php echo $form['id_unidad']->render(array("class"=>"form-control","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Comité</label>
            <div class="col-sm-9">
                <?php echo $form['id_comite']->render(array("class"=>"form-control","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Foto</label>
            <div class="col-sm-9">
                <?php echo $form['foto']->render(array("class"=>"form-control")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Nombre(s)</label>
            <div class="col-sm-9">
                <?php echo $form['nombre']->render(array("class"=>"form-control","required"=>"required","placeholder"=>"Nombre(s)")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Nombre de Usuario</label>
            <div class="col-sm-9">
                <?php echo $form['nombre_usuario']->render(array("class"=>"form-control","placeholder"=>"Nombre de Usuario","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Primer Apellido</label>
            <div class="col-sm-9">
                <?php echo $form['primer_apellido']->render(array("class"=>"form-control","placeholder"=>"Primer Apellido","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Segundo Apellido</label>
            <div class="col-sm-9">
                <?php echo $form['segundo_apellido']->render(array("class"=>"form-control","placeholder"=>"Segundo Apellido","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Correo Electrónico</label>
            <div class="col-sm-9">
                <?php echo $form['email']->render(array("class"=>"form-control","placeholder"=>"Correo Electrónico","required"=>"required","type"=>"email")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Tel. Fijo</label>
            <div class="col-sm-9">
                <?php echo $form['telefono_fijo']->render(array("class"=>"form-control","placeholder"=>"Teléfono Fijo","type"=>"tel","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Tel. Celular</label>
            <div class="col-sm-9">
                <?php echo $form['telefono_celular']->render(array("class"=>"form-control","placeholder"=>"Teléfono Celular","type"=>"tel")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Email Emergencia</label>
            <div class="col-sm-9">
                <?php echo $form['email_emergencia']->render(array("class"=>"form-control","placeholder"=>"Email Emergencia","required"=>"required","type"=>"email")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Cargo</label>
            <div class="col-sm-9">
                <?php echo $form['cargo']->render(array("class"=>"form-control","placeholder"=>"Cargo","required"=>"required")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Contraseña</label>
            <div class="col-sm-9">
                <?php echo $form['password']->render(array("class"=>"form-control","placeholder"=>"Contraseña","required"=>"required","type"=>"password")) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Palabra Clave</label>
            <div class="col-sm-9">
                <?php echo $form['palabra_clave']->render(array("class"=>"form-control","placeholder"=>"Palabra Clave","required"=>"required")) ?>
            </div>
        </div>

    </div>
    <div class="box-footer">
        &nbsp;<a class="btn btn-default" style="margin:5px;" href="<?php echo url_for('login/register') ?>">Regresar</a>
        <button type="submit" class="btn btn-success" style="margin:5px;">Guardar</button>
    </div>
</form>