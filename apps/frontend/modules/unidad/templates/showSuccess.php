<?php $smleft = 2;
$smright = 10;
?>

<div class="content-wrapper">
    <?php include_partial('inicio/navegacion', array('titulo' => 'unidad', 'subtitulo' => 'Ver unidad')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">unidad</h3>
            </div>
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Empresa</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $unidad->getEmpresa() ?></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Nombre de la sucursal</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getNombre() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">No. de Sucursal</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getSucursal() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Telefono</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getTelefono() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Email</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getEmail() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Nombre contacto</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getNombreContacto() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Pais</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getPais() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Estado</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getEstado() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Ciudad</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getCiudad() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Municipio</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getMunicipio() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Direccion</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getDireccion() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Numero</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getNumero() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Delegacion</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getDelegacion() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Cp</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getCp() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Referencia</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getReferencia() ?></p>
                    </div>
                </div>
                <?php /*     <div class="form-group">
                            <label class="col-sm-<?php echo $smleft; ?> control-label">Id director general</label>
                            <div class="col-sm-<?php echo $smright; ?>">
                                <p class="form-control-static"><?php echo $unidad->getIdDirectorGeneral() ?></p>
                            </div>
                        </div>
                                            <div class="form-group">
                            <label class="col-sm-<?php echo $smleft; ?> control-label">Id subdirector</label>
                            <div class="col-sm-<?php echo $smright; ?>">
                                <p class="form-control-static"><?php echo $unidad->getIdSubdirector() ?></p>
                            </div>
                        </div>
                                            <div class="form-group">
                            <label class="col-sm-<?php echo $smleft; ?> control-label">Id gerente</label>
                            <div class="col-sm-<?php echo $smright; ?>">
                                <p class="form-control-static"><?php echo $unidad->getIdGerente() ?></p>
                            </div>
                        </div>
                                            <div class="form-group">
                            <label class="col-sm-<?php echo $smleft; ?> control-label">Id consultor</label>
                            <div class="col-sm-<?php echo $smright; ?>">
                                <p class="form-control-static"><?php echo $unidad->getIdConsultor() ?></p>
                            </div>
                        </div>*/ ?>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Creado</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getCreado() ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-<?php echo $smleft; ?> control-label">Actualizado</label>
                    <div class="col-sm-<?php echo $smright; ?>">
                        <p class="form-control-static"><?php echo $unidad->getActualizado() ?></p>
                    </div>
                </div>
                <div class="box-footer">
                    <?php if (Privilegios::editarsucursal($sf_user->getRol())) { ?>
                        <a class="btn btn-success" style="margin: 5px;" title="" href="<?php echo url_for('unidad/edit?id_unidad=' . $unidad->getIdUnidad()) ?>"><span>Editar</span></a>
                    <?php } ?>
                    &nbsp;
                    <a class="btn btn-default" style="margin: 5px;" title="" href="<?php echo url_for('unidad/index') ?>"><span>Regresar</span></a>
                </div>
            </form>
        </div>
    </section>
</div>
