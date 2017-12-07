<div class="login-box-body">
    <h2 style="text-align: center;">Registro</h2>
    <p class="login-box-msg">Selecciona una Opción</p>
    <div class="row">
        <div class="col-xs-12">
            <input class="btn btn-block btn-flat btn-success" type="submit" value="Empresa" onclick="window.location='<?php echo url_for("login/empresa",true); ?>'"/>
            <input class="btn btn-block btn-flat btn-info" type="submit" value="Sucursal" onclick="window.location='<?php echo url_for("login/sucursal",true); ?>'"/>
            <input class="btn btn-block btn-flat btn-danger" type="submit" value="Usuario" onclick="window.location='<?php echo url_for("login/usuario",true); ?>'"/>
            <a class="btn btn-default" style="margin:5% 0% 0% 35%;"  href="<?php echo url_for('login/index') ?>">Regresar</a>
        </div>
    </div>
    </form>
</div>