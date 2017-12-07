<?php $smleft = 2;
$smright = 10;
?>

<div class="content-wrapper">
    <?php include_partial('inicio/navegacion', array('titulo' => 'usuario_grupo', 'subtitulo' => 'Ver usuario_grupo')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">usuario_grupo</h3>
            </div>
            <form class="form-horizontal" ?>
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Id grupo</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario_grupo->getIdGrupo() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Nombre</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario_grupo->getNombre() ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-<?php echo $smleft; ?> control-label">Permisos</label>
                        <div class="col-sm-<?php echo $smright; ?>">
                            <p class="form-control-static"><?php echo $usuario_grupo->getPermisos() ?></p>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a class="btn btn-success" style="margin: 5px;" title="" href="<?php echo url_for('grupo/edit?id_grupo=' . $usuario_grupo->getIdGrupo()) ?>"><span>Editar</span></a>
                    &nbsp;
                    <a class="btn btn-default" style="margin: 5px;" title="" href="<?php echo url_for('grupo/index') ?>"><span>Regresar</span></a>
                </div>
            </form>
        </div>
    </section>
</div>
