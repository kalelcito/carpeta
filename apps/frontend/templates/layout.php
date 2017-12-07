<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <?php include_stylesheets() ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include_javascripts() ?>
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?php echo url_for('inicio/index', true); ?>" class="navbar-brand">
                        <?php echo image_tag('logoer.png', array('absolute' => true, 'class' => 'img-responsive','style'=>"height:50px")); ?></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div style="margin-top: 20px;" class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-building"></i>Empresas <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="active">
                                    <a href="<?php echo url_for('empresa/index', true); ?>">
                                        <i class="fa fa-circle-o"></i> Ver Empresas/Corporativos
                                    </a>
                                </li>
                                <?php if (Privilegios::crearrempresa($sf_user->getRol())) { ?>
                                    <li>
                                        <a href="<?php echo url_for('empresa/new', true); ?>">
                                            <i class="fa fa-circle-o"></i>Nueva Empresa
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-home"></i>Sucursales <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo url_for('unidad/index', true); ?>">
                                        <i class="fa fa-circle-o"></i> Ver Sucursales
                                    </a>
                                </li>
                                <?php if (Privilegios::crearsucursal($sf_user->getRol())) { ?>
                                    <li>
                                        <a href="<?php echo url_for('unidad/new', true); ?>">
                                            <i class="fa fa-circle-o"></i>Nueva Sucursal
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php /*
                  <li class="  treeview">
                      <a href="#">
                          <i class="fa fa-dashboard"></i> <span>Privilegios</span> <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                          <li class="active"><a href="<?php echo url_for('grupo/index',true); ?>"><i class="fa fa-circle-o"></i> Ver Privilegios</a></li>
                          <li><a href="<?php echo url_for('grupo/new',true); ?>"><i class="fa fa-circle-o"></i>Nuevo Privilegio</a></li>
                      </ul>
                  </li>*/ ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-users"></i>Comites <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo url_for('comite/index', true); ?>"><i class="fa fa-circle-o"></i> Ver Comites</a>
                                </li>
                                <?php if (Privilegios::crearcomite($sf_user->getRol())) { ?>
                                    <li>
                                        <a href="<?php echo url_for('comite/new', true); ?>"><i class="fa fa-circle-o"></i>Nuevo Comite</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-users"></i>Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo url_for('usuarios/index', true); ?>">
                                        <i class="fa fa-circle-o"></i> Ver Usuarios
                                    </a>
                                </li>
                                <?php if (Privilegios::crearusuario($sf_user->getRol())) { ?>
                                    <li>
                                        <a href="<?php echo url_for('usuarios/new', true); ?>">
                                            <i class="fa fa-circle-o"></i>Nuevo Usuario
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php if (Privilegios::superadmin($sf_user->getRol())) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-files-text"></i>Reportes <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo url_for('inicio/status', true); ?>">
                                            <i class="fa fa-circle-o"></i> Descargar Status Programas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo url_for('inicio/tabla', true); ?>">
                                            <i class="fa fa-circle-o"></i> Ver Status de Programas
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div style="margin-top: 20px;" class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo image_tag('../uploads/imagenes/' . $sf_user->getFoto(), array('absolute' => true, 'class' => 'user-image')); ?>
                                <span class="hidden-xs">Carpeta Virtual</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <p><?php echo $sf_user->getNombre(); ?><br/>
                                        <?php echo $sf_user->getEmpresa(); ?><small><?php echo $sf_user->getPuesto(); ?></small>
                                    </p>
                                    <p><a href="<?php echo url_for('uploads/index'); ?>">uploads</a></p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Mi cuenta</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo url_for('login/salir', true); ?>" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo url_for('login/salir', true); ?>"><i class="fa fa-sign-out"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <?php echo $sf_content ?>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.2.0
        </div>
        <strong>Empresa Responsable <?php echo date("Y"); ?></strong>
    </footer>

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
</body>
</html>

