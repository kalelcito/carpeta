<?php use_helper('Date') ?>
<?php use_helper('Otros'); ?>
<?php use_stylesheet('/plugins/datatables/dataTables.bootstrap.css') ?>
<?php use_javascript('/plugins/datatables/jquery.dataTables.min.js') ?>
<?php use_javascript('/plugins/datatables/dataTables.bootstrap.min.js') ?>
<?php /* slot('js') ?>
 <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Page Specific JS Libraries -->
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo public_path('assets',array('absolute'=>'true')); ?>/js/pages/datatables.js"></script>
<?php end_slot() ?>
<?php
use_stylesheet('/assets/libs/jquery-datatables/css/dataTables.bootstrap.css');
use_stylesheet('/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css');
*/
?>
<div class="content-wrapper">
    <?php include_partial('inicio/navegacion', array('titulo' => 'usuario', 'subtitulo' => 'Ver usuario')) ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Uploads</h3>
                <div class="box-tools">
                    <form action="<?php echo url_for('uploads/index') ?>" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


