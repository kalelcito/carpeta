<?php $smleft = 2;
$smright = 10;
?>

<div class="content-wrapper">
    <?php include_partial('inicio/navegacion', array('titulo' => 'empresa', 'subtitulo' => 'Ver empresa')) ?>
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <?php echo image_tag('/uploads/imagenes/' . $empresa->getLogo(), array('absolute' => true, 'class' => 'profile-user-img img-responsive img-circle')); ?>
                        <h3 class="profile-username text-center">Empresa</h3>
                        <?php //  <p class="text-muted text-center">Otro Campo</p> ?>
                        <ul class="list-group list-group-unbordered">
                            <?php if ($empresa->getActivarSucursales()) { ?>
                                <li class="list-group-item">
                                    <b>Sucursales</b> <a class="pull-right"><?php echo $empresa->getUnidad()->count(); ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                        <?php if (Privilegios::editarempresa($sf_user->getRol())) { ?>
                            <a href="<?php echo url_for('empresa/edit?id_empresa=' . $empresa->getIdEmpresa()) ?>" class="btn btn-success btn-block"><b>Editar</b></a>
                        <?php } ?>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Información general</h3>
                    </div>
                    <div class="box-body">
                        <strong><i class="fa fa-user margin-r-5"></i> Contacto principal</strong>

                        <p class="text-muted">
                            <?php echo $empresa->getNombreContacto() ?><br/>
                            <?php echo $empresa->getEmail() ?><br/>
                            <?php echo $empresa->getTelefono() ?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                        <p class="text-muted"><?php echo $empresa->getDireccion() ?><br/>
                            <?php $c = '';
                            if (trim($empresa->getEstado()) != '') {
                                echo $c . $empresa->getEstado();
                                $c = ', ';
                            } ?>
                            <?php if (trim($empresa->getCiudad()) != '') {
                                echo $c . $empresa->getCiudad();
                                $c = " ";
                            } ?><br/>
                            <?php if (trim($empresa->getCp()) != '') {
                                echo $c . $empresa->getCp();
                                $c = ", ";
                            } ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <?php if ($empresa->getActivarSucursales()) { ?>
                            <li class="active"><a href="#sucursales" data-toggle="tab">Sucursales</a></li>
                        <?php } ?>

                        <li <?php if ($empresa->getActivarSucursales() == false) { echo 'class="active"'; } ?>>
                            <a href="#comites" data-toggle="tab">Comités</a>
                        </li>
                        <?php if (Privilegios::verrusuario($sf_user->getRol())) { ?>
                            <li>
                                <a href="#usuarios" data-toggle="tab">Usuarios</a>
                            </li>
                        <?php } ?>
                        <li class="pull-right">
                            <a class="" title="" href="<?php echo url_for('empresa/index') ?>">
                                <i class="fa fa-mail-reply"></i> Regresar
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <?php if ($empresa->getActivarSucursales()) { ?>
                            <div class="active tab-pane" id="sucursales">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Lista de Sucursales</h3>
                                        <div class="box-tools">
                                            <?php if (Privilegios::crearsucursal($sf_user->getRol())) { ?> 
                                                <a class="btn btn-success" title="" href="<?php echo url_for('unidad/new') ?>">
                                                    <span>Agregar sucursal</span>
                                                </a> 
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>No.</th>
                                                <th>Sucursal</th>
                                                <th>Encargado</th>
                                            </tr>
                                            <?php $i = 1;
                                            foreach ($empresa->getUnidad() as $sucursales) {
                                                $mostrar = 0;
                                                if (Privilegios::superadmin($sf_user->getRol())) {
                                                    $mostrar = 1;
                                                }
                                                if (Privilegios::consultor($sf_user->getRol())) {
                                                    if ($sucursales->getIdConsultor() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if (Privilegios::gerente($sf_user->getRol())) {
                                                    if ($sucursales->getIdGerente() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if (Privilegios::subdirector($sf_user->getRol())) {
                                                    if ($sucursales->getIdSubdirector() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if (Privilegios::directorgral($sf_user->getRol())) {
                                                    if ($sucursales->getIdDirectorGeneral() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if (Privilegios::presidentecomite($sf_user->getRol())) {
                                                    foreach ($sucursales->getComite() as $comite) {
                                                        if ($comite->getIdUsuarioPresidente() == $sf_user->getIdusuario()) {
                                                            $mostrar = 1;
                                                        }
                                                    }
                                                }
                                                if ($mostrar == 1) {?>
                                                    <tr>
                                                        <td><?php echo $i;
                                                            $i++; ?></td>
                                                        <td>
                                                            <a href="<?php echo url_for('unidad/show?id_unidad=' . $sucursales->getIdUnidad()) ?>"><?php echo $sucursales->getNombre(); ?></a>
                                                        </td>
                                                        <td><?php echo $sucursales->getNombreContacto(); ?></td>
                                                    </tr>
                                                <?php }
                                            } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        
                        <div class="<?php if ($empresa->getActivarSucursales() == false) { echo "active";} ?> tab-pane" id="comites">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Lista de Comités</h3>
                                    <div class="box-tools">
                                        <?php if (Privilegios::crearcomite($sf_user->getRol())) { ?> 
                                            <a class="btn btn-success" title="" href="<?php echo url_for('comite/new') ?>">
                                                <span>Agregar comite</span>
                                            </a> 
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>No.</th>
                                            <th>Comite</th>
                                            <th>Presidente</th>
                                        </tr>
                                        <?php $i = 1;
                                        foreach ($empresa->getUnidad() as $sucursales) { ?>
                                            <?php foreach ($sucursales->getComite() as $comite) {
                                                $mostrar = 0;
                                                if (Privilegios::superadmin($sf_user->getRol())) {
                                                    $mostrar = 1;
                                                }
                                                if (Privilegios::consultor($sf_user->getRol())) {
                                                    if ($sucursales->getIdConsultor() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if (Privilegios::gerente($sf_user->getRol())) {
                                                    if ($sucursales->getIdGerente() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if (Privilegios::subdirector($sf_user->getRol())) {
                                                    if ($sucursales->getIdSubdirector() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if (Privilegios::directorgral($sf_user->getRol())) {
                                                    if ($sucursales->getIdDirectorGeneral() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if (Privilegios::presidentecomite($sf_user->getRol())) {
                                                    if ($comite->getIdUsuarioPresidente() == $sf_user->getIdusuario()) {
                                                        $mostrar = 1;
                                                    }
                                                }
                                                if ($mostrar == 1) {?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i; $i++; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo url_for('comite/show?id_comite=' . $comite->getIdComite()) ?>"><?php echo $comite->getNombreComite(); ?></a>
                                                        </td>
                                                        <td><?php echo $comite->getUsuario(); ?></td>
                                                    </tr>
                                                <?php }
                                            } ?>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <?php if (Privilegios::verrusuario($sf_user->getRol())) { ?>
                            <div class="tab-pane" id="usuarios">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Lista de Usuarios</h3>
                                        <div class="box-tools">
                                            <?php if (Privilegios::crearusuario($sf_user->getRol())) { ?> 
                                                <a class="btn btn-success" title="" href="<?php echo url_for('usuarios/new') ?>">
                                                    <span>Agregar usuario</span>
                                                </a> 
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>No.</th>
                                                <th>Usuario</th>
                                                <th>Nombre</th>
                                            </tr>
                                            <?php $i = 1;
                                            foreach ($empresa->getUsuario() as $usuario) { ?>
                                                <tr>
                                                    <td><?php echo $i;
                                                        $i++; ?></td>
                                                    <td><?php echo $usuario->getNombreUsuario(); ?></td>
                                                    <td><?php echo $usuario; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
