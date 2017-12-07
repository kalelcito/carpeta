<style>
    .login-box {
        width: 65%;
    }
    @media (max-width: 768px) {
        .login-box {
            width: 100%;
        }
    }
    @media (max-width: 991px) {
        .login-box {
            width: 80%;
        }
    }
</style>
<div class="login-box-body">
    <h2 style="text-align: center;">Registro</h2>
    <p class="login-box-msg">Sucursal</p>
    <div class="row">
        <?php include_partial('inicio/mensajes'); ?>
        <?php include_partial('formS', array('form' => $form,'titulo'=>'Nueva Sucursal')) ?>
    </div>
    </form>
</div>