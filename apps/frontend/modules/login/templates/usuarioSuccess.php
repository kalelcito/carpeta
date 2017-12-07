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
    <p class="login-box-msg">Usuario</p>
    <div class="row">
        <?php include_partial('inicio/mensajes'); ?>
        <?php include_partial('formU', array('form' => $form,'titulo'=>'Nuevo Usuario')) ?>
    </div>
    </form>
</div>