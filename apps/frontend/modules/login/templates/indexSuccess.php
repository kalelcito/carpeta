<div class="login-box-body">
    <p class="login-box-msg">Control de Acceso</p>
    <?php echo $acceso->renderFormTag(url_for('login/index', true), array('role' => 'form')) ?>
    <?php include_partial('inicio/mensajes'); ?>
    <div class="form-group has-feedback">
        <?php echo $acceso['email']->render(array('placeholder' => 'Nombre de usuario', 'class' => 'form-control')) ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <?php echo $acceso['pass']->render(array('placeholder' => '********', 'class' => 'form-control')) ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> Recordarme
                </label>
            </div>
        </div>
        <div class="col-xs-4">
            <?php echo $acceso->renderHiddenFields(); ?>
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
    </div>
    </form>
    <div class="row">
        <div class="col-xs-12">
            <input class="btn btn-block btn-flat btn-success" type="submit" value="Registrarse" onclick="window.location='<?php echo url_for("login/register",true); ?>'"/>
        </div>
    </div>
    <button type="button" class="btn btn-primary btn-block btn-flat" data-toggle="modal" style="margin-top: 10px;" data-target="#myModal"><strong>Requerimientos Mínimos</strong> <br>para el uso de la Carpeta Virtual</button>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Requerimientos Mínimos para Uso de Carpeta Virtual</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>NAVEGADOR</th>
                            <th>VERSIÓN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Internet Explorer</td>
                            <td>10 o superior</td>
                        </tr>
                        <tr>
                            <td>Google Chrome</td>
                            <td>50 o superior</td>
                        </tr>
                        <tr>
                            <td>Firefox</td>
                            <td>50 o superior</td>
                        </tr>
                        <tr>
                            <td>Safari</td>
                            <td>10 o superior</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>SISTEMA OPERATIVO</th>
                            <th>VERSIÓN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Windows</td>
                            <td>cualquiera</td>
                        </tr>
                        <tr>
                            <td>Linux</td>
                            <td>cualquiera</td>
                        </tr>
                        <tr>
                            <td>Unix</td>
                            <td>cualquiera</td>
                        </tr>
                        <tr>
                            <td>Mas OS</td>
                            <td>cualquiera</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
</div>