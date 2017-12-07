<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <link rel="stylesheet" type="text/css" href="<?php echo public_path('css', array('absolute' => 'true')) . "/style.css" ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo public_path('css', array('absolute' => 'true')) . "/fixed.css" ?>" title="fixed" media="screen"/>

    <title>Control de Acceso</title>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if !IE 7]>
    <style>#wrap {
        display: table;
        height: 100%
    }</style><![endif]-->

</head>
<body id="loginpage">
    <div class="container_16 clearfix">
        <div class="push_5 grid_6">
            <a href="<?php echo url_for('login/index', true); ?>"><?php echo image_tag('biglogo.png', array('absolute' => 'true')); ?></a>
        </div>
        <div class="clear"></div>
        <div class="widget push_5 grid_6" id="login">
            <div class="widget_title">
                <h2>Recuperar cuenta</h2>
            </div>
            <div class="widget_body">
                <div class="widget_content">
                    Para restablecer la contraseña, escribe la dirección de correo electrónico completa que utilizas para
                    acceder al panel de administración
                    <?php echo $acceso->renderFormTag(url_for('login/recuperar', true), array('style' => '')) ?>
                    <?php if ($sf_user->hasFlash('error')) { ?>
                        <div class="msg failure"><span><?php echo $sf_user->getFlash('error'); ?></span></div>
                    <?php } ?>
                    <label class="block" for="username">Correo electrónico:</label>
                    <?php echo $acceso['email']->render(array('class' => 'large')) ?>
                        <?php if ($acceso['email']->hasError()) { ?>
                            <div class="msg failure"><span><?php echo $acceso['email']->getError(); ?></span></div>
                        <?php } ?>
                    <div style="margin-top:10px">
                    <?php echo $acceso->renderHiddenFields(); ?>
                <input type="submit" class="btn right" value="Recuperar"/>
                </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>