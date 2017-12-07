<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 25/10/15
 * Time: 1:45 AM
 */
?>
<?php
if ($sf_user->hasFlash('atencion') || ($sf_user->hasFlash('informacion')) || ($sf_user->hasFlash('exito')) || ($sf_user->hasFlash('error'))) {
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box-body">
                <?php if ($sf_user->hasFlash('atencion')): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i><?php echo $sf_user->getFlash('atencion') ?>
                    </div>
                <?php endif; ?>
                <?php if ($sf_user->hasFlash('informacion')): ?>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-info"></i><?php echo $sf_user->getFlash('informacion') ?>
                    </div>
                <?php endif; ?>
                <?php if ($sf_user->hasFlash('error')): ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-warning"></i><?php echo $sf_user->getFlash('error') ?>
                    </div>
                <?php endif; ?>
                <?php if ($sf_user->hasFlash('exito')): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i><?php echo $sf_user->getFlash('exito') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php } ?>


