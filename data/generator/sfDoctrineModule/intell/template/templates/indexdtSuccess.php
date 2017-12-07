[?php use_helper('Date') ?]
[?php use_helper('Otros'); ?]
[?php include_partial('inicio/navegacion',array('titulo'=>'<?php echo $this->getSingularName() ?>','subtitulo'=>'Ver <?php echo $this->getSingularName() ?>')) ?]
[?php slot('js') ?]
<!-- Page Specific JS Libraries -->
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="[?php echo public_path('assets',array('absolute'=>'true')); ?]/js/pages/datatables.js"></script>
<script>
    $(document).ready(function() {
        $('#datatables-5').dataTable({
            "sPaginationType": "bootstrap",
            "bProcessing": false,
            "bServerSide": true,
            "iDisplayLength": 10,
            "iDisplayStart": 0,
            "sAjaxSource": "[?php echo url_for('<?php echo $this->getModuleName()?>/dtlist'); ?]",
            "sServerMethod": "POST",
            "sAjaxDataProp" : "aaData",
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
                "sSwfPath": "[?php echo public_path('assets',array('absolute'=>'true')); ?]/libs/jquery-datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });
        //"bSort": true,
    });
</script>
[?php end_slot() ?]
[?php
use_stylesheet('/assets/libs/jquery-datatables/css/dataTables.bootstrap.css');
use_stylesheet('/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css');
?]
<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-header">
                <h2><strong>Lista</strong> <?php echo $this->getSingularName() ?></h2>
                [?php /*<div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div> */ ?]
            </div>
            <div class="widget-content">
                <br>
                <div class="table-responsive">
                    <form class='form-horizontal' role='form'>
                        <table id="datatables-5" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                        <?php foreach ($this->getColumns() as $column): ?>
                              <th><?php echo sfInflector::humanize(sfInflector::underscore($column->getPhpName())) ?></th>
                        <?php endforeach; ?>
                            <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <?php foreach ($this->getColumns() as $column): ?>
                                    <td></td>
                                <?php endforeach; ?>
                            </tr>
                        </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


