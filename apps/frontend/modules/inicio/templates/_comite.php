

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th width="25%">Requisito(Nombre abreviado)</th>
                        <th width="15%">Minimo Auditable</th>
                        <th colspan="4">
                            <span style="width: 100%;display: block;margin-bottom:5px;float:left;">
                                <span style="width: 65%; float:left; margin-right: 5px;">
                                    Programa
                                </span>
                                <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                    Actualizado
                                </span>
                                <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                    Calificación
                                </span>
                            </span>
                        </th>
                        <!--<th width="40%">Programa</th>
                        <th width="10%" style="text-align:center;">Fecha de Modificación</th>
                        <th width="10%" style="text-align:center;">Calificación</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php $descrip= "El Comité Interno, además de implantar la Norma y conseguir el certificado, debe ser una ayuda eficaz para la Dirección General en lo que se refiere a la Calidad Humana y Responsabilidad Social de la empresa u organización, sin perjudicar su eficiencia y productividad." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[0]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion1">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a1']->render(array('disabled'=>'true'))?> a)</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b1']->render(array('disabled'=>'true'))?> b)</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_c1']->render(array('disabled'=>'true'))?> c)</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_d1']->render(array('disabled'=>'true'))?> d)</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_e1']->render(array('disabled'=>'true'))?> e)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>

                        <!--<td>
                            <?php /*foreach ($comite->getPrograma() as $programao) {*/?>
                                <?php /*if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { */?>
                                    <?php /*echo $programao->getNombre() */?><br/>
                                <?php /*} */?>
                            <?php /*} */?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php /*foreach ($comite->getPrograma() as $programao) {*/?>
                                <?php /*if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { */?>
                                    <?php /*echo $comite->getActualizado() */?><br/>
                                <?php /*} */?>
                            <?php /*} */?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php /*foreach ($comite->getPrograma() as $programao) {*/?>
                                <?php /*$res = $programao->getCalificacion(); */?>
                                <?php /*if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { */?>
                                    <?php /*echo $res */?><br/>
                                <?php /*} */?>
                            <?php /*} */?>
                        </td>
                        <td>
                            <?php /*foreach ($comite->getPrograma() as $programao) {*/?>
                                <?php /*$res = $programao->getCalificacion(); */?>
                                <?php /*if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }*/?>
                                <?php /*if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { */?>
                                    <i class="fa fa fa-square" aria-hidden="true"  <?php /*echo $estilo */?>></i><br/>
                                <?php /*} */?>
                            <?php /*} */?>
                        </td>-->
                    </tr>
                    <tr>
                        <?php $descrip= "Que se cuente con una Política de Calidad Humana y Responsabilidad Social." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[1]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion2">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a2']->render(array('disabled'=>'true'))?> a)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[1]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Manual de Políticas y Prácticas de Calidad Humana y Responsabilidad Social." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[2]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion3">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a3']->render(array('disabled'=>'true'))?> a)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[2]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Su elaboración permite una evaluación sólida del comportamiento de la empresa u organización, y puede servir de base para una mejora continua de los resultados. También sirve como herramienta para fortalecer los vínculos con los grupos de interés y para obtener aportaciones valiosas para los propios procesos de la empresa u organización." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[3]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion4">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a4']->render(array('disabled'=>'true'))?> a)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[3]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa anual de auditorías internas con el fin de garantizar el cumplimiento y continuidad de las prácticas de Calidad Humana y Responsabilidad Social." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[4]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion5">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a5']->render(array('disabled'=>'true'))?> a)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b5']->render(array('disabled'=>'true'))?> b)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_c5']->render(array('disabled'=>'true'))?> c)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_d5']->render(array('disabled'=>'true'))?> d)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_e5']->render(array('disabled'=>'true'))?> e)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_f5']->render(array('disabled'=>'true'))?> f)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_g5']->render(array('disabled'=>'true'))?> g)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[4]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un programa de justicia salarial que cumpla con los principios de necesidad, contribución y orden económico." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[5]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion6">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a6']->render(array('disabled'=>'true'))?> a)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b6']->render(array('disabled'=>'true'))?> b)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_c6']->render(array('disabled'=>'true'))?> c)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[5]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa para promover la cultura de la legalidad en las empresas y organizaciones, con su personal y grupos de interés, enfocado en un plan de acciones preventivas." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[6]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion7">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list" id="calificacion">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a7']->render(array('disabled'=>'true'))?> a)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b7']->render(array('disabled'=>'true'))?> b)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[6]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover la salud del personal y otros grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[7]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion8">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a8']->render(array('disabled'=>'true'))?> a)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b8']->render(array('disabled'=>'true'))?> b)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[7]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover la seguridad del personal y otros grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[8]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion9">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a9']->render(array('disabled'=>'true'))?> a)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b9']->render(array('disabled'=>'true'))?> b)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_c9']->render(array('disabled'=>'true'))?> c)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_d9']->render(array('disabled'=>'true'))?> d)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_e9']->render(array('disabled'=>'true'))?> e)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[8]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover el orden y limpieza de las instalaciones de la empresa u organización." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[9]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion10">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a10']->render(array('disabled'=>'true'))?> a)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[9]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa de capacitación para el personal en áreas propias de su actividad en el trabajo."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[10]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion11">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list" id="calificacion">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a11']->render(array('disabled'=>'true'))?> a)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[10]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left; border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "La preparación académica amplia la visión panorámica y capacidad de abstracción de las personas, aumenta su cultura y los hace mejores personas en el trabajo y fuera de él." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[11]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[11]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover, canalizar y dar seguimiento a las ideas, propuestas o compromisos concretos de todo el personal y otros grupos de interés para hacer más eficiente o productiva a la empresa u organización."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip?>"><?php echo $requisito[12]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[12]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "El desarrollo que obtiene el personal en las empresas y organizaciones con Calidad Humana y Responsabilidad Social puede rebasar el nivel de desarrollo que se tiene en los miembros de sus familias; esta es una de las razones por las cuales es necesario promover también su desarrollo humano integral y solidario y fortalecer su integración."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[13]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[13]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa para estructurar la actividad laboral de modo que se favorezca la integración de las familias, especialmente en el caso de las madres solteras con hijos menores de edad." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[14]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[14]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa para dar orientación y apoyo a las personas que sean separadas de su trabajo que no hayan actuado con dolo, negligencia o mala fe, para que puedan encontrar otra fuente de ingresos con menor dificultad."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[15]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion16">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list" id="calificacion">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a16']->render(array('disabled'=>'true'))?> a)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[15]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista en la empresa u organización un programa de no discriminación para personas de grupos vulnerables por su edad, origen, condición física o mental (por ejemplo, mayores a 60 años, personal indígena, discapacitados o mujeres embarazadas)."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[16]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion17">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a17']->render(array('disabled'=>'true'))?> a)</label>
                                                        </div
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b17']->render(array('disabled'=>'true'))?> b)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[16]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa de contratación y desarrollo de becarios, de preferencia con horarios flexibles, con el fin de que estos tengan la oportunidad de tener un currículum con experiencia." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[17]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[17]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Si abandonamos el ámbito de lo local por la inserción global estaríamos perdiendo el sentimiento de pertenencia. Lo local es cada vez más importante para la vida cotidiana de las personas a medida que aumentan las relaciones globales." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[18]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion19">
                                            <ul style="text-align: justify; list-style-type:none;">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox" style="margin-top: 10px">
                                                            <label><?php echo $estado['min_a19']->render(array('disabled'=>'true'))?> a)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[18]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "La Norma CRESE 2014 promueve el principio de solidaridad como un beneficio para todos, pero también como un deber por lo que es necesario para cumplir cabalmente con este requisito que el personal y si es posible otros grupos de interés participen activamente en tareas de ayuda a la comunidad" ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[19]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[19]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del suelo por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[20]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[20]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del aire y atmósfera por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[21]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[21]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del agua por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[22]->getTitulo(); ?></td>
                        <td></td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[22]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un programa que sirva para promover el conocimiento, asimilación y práctica de los valores establecidos por la empresa u organización." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[23]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion24">
                                            <ul style="text-align: justify; list-style: none">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox" style="margin-top: 10px">
                                                            <label><?php echo $estado['min_a24']->render(array('disabled'=>'true'))?> a)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[23]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un programa para mejorar las características y el ambiente de trabajo para hacerlo aún más digno o más humanizante." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[24]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <form class="form-inline" id="calificacion25">
                                            <ul style="text-align: justify; list-style: none">
                                                <div class="checkbox_list">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_a25']->render(array('disabled'=>'true'))?> a)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label><?php echo $estado['min_b25']->render(array('disabled'=>'true'))?> b)</label>
                                                            <?php echo $estado->renderHiddenFields()?>
                                                        </div>
                                                    </li>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="4">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[24]->getIdRequisito()) { ?>
                                    <span style="width: 100%;display: block;margin-bottom:5px;float:left;border-bottom: 1px solid #DEE8F2;">
                                        <span style="width: 65%;float:left; margin-right: 5px;">
                                            <?php echo $programao->getNombre() ?>
                                        </span>
                                        <span style="width: 120px; text-align: center; float: left; margin-right: 2%;">
                                            <?php echo $comite->getActualizado() ?>
                                        </span>
                                        <span style="width: 60px; text-align: center; float: right; margin-right: 1%;">
                                            <?php echo $res ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i>
                                        </span>
                                    </span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    </tbody>
                </table>

