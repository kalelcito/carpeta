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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="<?php echo url_for('inicio/index', true); ?>" class="logo">
            <span class="logo-mini"><b>CV</b></span>
            <span class="logo-lg"><b>Carpeta Virtual</b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <?php /*
                      <!-- Messages: style can be found in dropdown.less-->
                      <li class="dropdown messages-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-envelope-o"></i>
                              <span class="label label-success">4</span>
                          </a>
                          <ul class="dropdown-menu">
                              <li class="header">You have 4 messages</li>
                              <li>
                                  <!-- inner menu: contains the actual data -->
                                  <ul class="menu">
                                      <li><!-- start message -->
                                          <a href="#">
                                              <div class="pull-left">
                                                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                              </div>
                                              <h4>
                                                  Support Team
                                                  <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                              </h4>
                                              <p>Why not buy a new awesome theme?</p>
                                          </a>
                                      </li>
                                      <!-- end message -->
                                      <li>
                                          <a href="#">
                                              <div class="pull-left">
                                                  <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                              </div>
                                              <h4>
                                                  AdminLTE Design Team
                                                  <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                              </h4>
                                              <p>Why not buy a new awesome theme?</p>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <div class="pull-left">
                                                  <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                              </div>
                                              <h4>
                                                  Developers
                                                  <small><i class="fa fa-clock-o"></i> Today</small>
                                              </h4>
                                              <p>Why not buy a new awesome theme?</p>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <div class="pull-left">
                                                  <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                              </div>
                                              <h4>
                                                  Sales Department
                                                  <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                              </h4>
                                              <p>Why not buy a new awesome theme?</p>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <div class="pull-left">
                                                  <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                              </div>
                                              <h4>
                                                  Reviewers
                                                  <small><i class="fa fa-clock-o"></i> 2 days</small>
                                              </h4>
                                              <p>Why not buy a new awesome theme?</p>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="footer"><a href="#">See All Messages</a></li>
                          </ul>
                      </li>
                      <!-- Notifications: style can be found in dropdown.less -->
                      <li class="dropdown notifications-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-bell-o"></i>
                              <span class="label label-warning">10</span>
                          </a>
                          <ul class="dropdown-menu">
                              <li class="header">You have 10 notifications</li>
                              <li>
                                  <!-- inner menu: contains the actual data -->
                                  <ul class="menu">
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                              page and may cause design problems
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-users text-red"></i> 5 new members joined
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-user text-red"></i> You changed your username
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="footer"><a href="#">View all</a></li>
                          </ul>
                      </li>
                      <!-- Tasks: style can be found in dropdown.less -->
                      <li class="dropdown tasks-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-flag-o"></i>
                              <span class="label label-danger">9</span>
                          </a>
                          <ul class="dropdown-menu">
                              <li class="header">You have 9 tasks</li>
                              <li>
                                  <!-- inner menu: contains the actual data -->
                                  <ul class="menu">
                                      <li><!-- Task item -->
                                          <a href="#">
                                              <h3>
                                                  Design some buttons
                                                  <small class="pull-right">20%</small>
                                              </h3>
                                              <div class="progress xs">
                                                  <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                      <span class="sr-only">20% Complete</span>
                                                  </div>
                                              </div>
                                          </a>
                                      </li>
                                      <!-- end task item -->
                                      <li><!-- Task item -->
                                          <a href="#">
                                              <h3>
                                                  Create a nice theme
                                                  <small class="pull-right">40%</small>
                                              </h3>
                                              <div class="progress xs">
                                                  <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                      <span class="sr-only">40% Complete</span>
                                                  </div>
                                              </div>
                                          </a>
                                      </li>
                                      <!-- end task item -->
                                      <li><!-- Task item -->
                                          <a href="#">
                                              <h3>
                                                  Some task I need to do
                                                  <small class="pull-right">60%</small>
                                              </h3>
                                              <div class="progress xs">
                                                  <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                      <span class="sr-only">60% Complete</span>
                                                  </div>
                                              </div>
                                          </a>
                                      </li>
                                      <!-- end task item -->
                                      <li><!-- Task item -->
                                          <a href="#">
                                              <h3>
                                                  Make beautiful transitions
                                                  <small class="pull-right">80%</small>
                                              </h3>
                                              <div class="progress xs">
                                                  <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                      <span class="sr-only">80% Complete</span>
                                                  </div>
                                              </div>
                                          </a>
                                      </li>
                                      <!-- end task item -->
                                  </ul>
                              </li>
                              <li class="footer">
                                  <a href="#">View all tasks</a>
                              </li>
                          </ul>
                      </li> */ ?>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo image_tag('../uploads/imagenes/' . $sf_user->getLogo(), array('absolute' => true, 'class' => 'user-image')); ?>
                            <span class="hidden-xs">Empresa Responsable</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <p>
                                    <?php echo $sf_user->getEmpresa(); ?><small><?php echo $sf_user->getPuesto(); ?></small>
                                </p>
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
        </nav>
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left">
                    <?php echo image_tag('logoer.png', array('absolute' => true, 'class' => 'img-responsive')); ?>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="header">MENÚ PRINCIPAL</li>
                <li class="  treeview">
                    <a href="#">
                        <i class="fa fa-building"></i>
                        <span>Empresas</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
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
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span>Sucursales</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
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
                <li class="  treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Comites</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo url_for('comite/index', true); ?>">
                                <i class="fa fa-circle-o"></i> Ver Comites
                            </a>
                        </li>
                        <?php if (Privilegios::crearcomite($sf_user->getRol())) { ?>
                            <li>
                                <a href="<?php echo url_for('comite/new', true); ?>">
                                    <i class="fa fa-circle-o"></i>Nuevo Comite
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Usuarios</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
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
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-text"></i>
                            <span>Reportes</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo url_for('inicio/status', true); ?>">
                                    <i class="fa fa-circle-o"></i> Descargar Status Programas
                                </a>
                            </li>
                        </ul>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo url_for('inicio/tabla', true); ?>">
                                    <i class="fa fa-circle-o"></i> Ver Status de Programas
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
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

