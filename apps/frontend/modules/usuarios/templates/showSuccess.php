<?php $smleft = 2;
$smright = 10;
?>

<div class="content-wrapper">
    <?php include_partial('inicio/navegacion', array('titulo' => 'usuario', 'subtitulo' => 'Ver usuario')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">usuario</h3>
            </div>
            <form class="form-horizontal" ?>
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Empreas</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getEmpresa() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Perfil</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getUsuarioGrupo() ?></p>
                        </div>
                    </div>
                    <?php /*   <div class="form-group">
                            <label class="col-sm-<?php echo $smleft; ?> control-label">Sucursal</label>
                            <div class="col-sm-<?php echo $smright; ?>">
                                <p class="form-control-static"><?php echo $usuario->getUnidad() ?></p>
                            </div>
                        </div>
                                          <div class="form-group">
                            <label class="col-sm-<?php echo $smleft; ?> control-label">Comites</label>
                            <div class="col-sm-<?php echo $smright; ?>">
                                <p class="form-control-static"><?php echo $usuario->getIdComite() ?></p>
                            </div>
                        </div>*/ ?>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Nombre</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getNombre() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Nombre usuario</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getNombreUsuario() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Primer apellido</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getPrimerApellido() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Segundo apellido</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getSegundoApellido() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Email</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getEmail() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Telefono fijo</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getTelefonoFijo() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Telefono celular</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getTelefonoCelular() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Email emergencia</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getEmailEmergencia() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Cargo</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getCargo() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Palabra clave</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getPalabraClave() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Creado</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getCreado() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Actualizado</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario->getActualizado() ?></p>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <?php if (Privilegios::editarusuario($sf_user->getRol())) { ?>
                        <a class="btn btn-success" style="margin: 5px;" title="" href="<?php echo url_for('usuarios/edit?id_usuario=' . $usuario->getIdUsuario()) ?>"><span>Editar</span></a>
                    <?php } ?>
                    &nbsp;
                    <a class="btn btn-default" style="margin: 5px;" title="" href="<?php echo url_for('usuarios/index') ?>"><span>Regresar</span></a>
                </div>
            </form>
        </div>
    </section>
</div>
