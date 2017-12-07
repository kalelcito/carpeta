<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#<?php echo $comite->getIdComite() ?>"><?php echo $comite->getNombreComite() ?>  </a>
            </h4>
        </div>
        <div id="<?php echo $comite->getIdComite() ?>" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th width="20%">Requisito</th>
                        <th width="30%">Minimo Auditable</th>
                        <th width="30%">Programa</th>
                        <th width="10%" style="text-align:center;">Fecha de Modificación</th>
                        <th width="10%" style="text-align:center;">Calificación</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php $descrip= "El Comité Interno, además de implantar la Norma y conseguir el certificado, debe ser una ayuda eficaz para la Dirección General en lo que se refiere a la Calidad Humana y Responsabilidad Social de la empresa u organización, sin perjudicar su eficiencia y productividad." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[0]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-9">
                                            <p>Como mínimo se requiere(aspectos mínimos auditables no limitativos).</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que esté formado por al menos tres personas incluyendo el Coordinador General.</li>
                                                <li>b) Que sea multidisciplinario y representativo del personal de la empresa u organización.</li>
                                                <li>c) Que se reúna por lo menos una vez cada mes para analizar la forma de mejorar
                                                    continuamente la Calidad Humana y Responsabilidad Social de la empresa u organización.</li>
                                                <li>d) Que tenga un plan anual que sirva como guía para sus reuniones mensuales.</li>
                                                <li>e) Que sea haga responsable de atender, programar, implementar y dar seguimiento
                                                    a las acciones correctivas y preventivas de las auditorías internas y externas.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <form class="form-inline" id="calificacion1">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 30px">
                                                        <label><?php echo $estado['min_a1']->render(array('disabled'=>'true'))?> a</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 60px">
                                                        <label><?php echo $estado['min_b1']->render(array('disabled'=>'true'))?> b</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 80px">
                                                        <label><?php echo $estado['min_c1']->render(array('disabled'=>'true'))?> c</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 140px">
                                                        <label><?php echo $estado['min_d1']->render(array('disabled'=>'true'))?> d</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 60px">
                                                        <label><?php echo $estado['min_e1']->render(array('disabled'=>'true'))?> e</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[0]->getIdRequisito()) { ?>
                                    <i class="fa fa fa-square" aria-hidden="true"  <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip= "Que se cuente con una Política de Calidad Humana y Responsabilidad Social." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[1]->getTitulo(); ?></td>
                        <td>
                            <div class="contenido">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que la política exprese la filosofía o forma de pensar de la
                                                    empresa u organización con respecto su Calidad Humana y Responsabilidad Social.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion2">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a2']->render(array('disabled'=>'true'))?> a</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[1]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[1]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[1]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[1]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se cuente con un manual-guía que haga clara referencia al
                                                    lugar donde se encuentran las prácticas que sirvan para dar cumplimiento a los pre-requisitos y requisitos de esta Norma.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion3">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a3']->render(array('disabled'=>'true'))?> a</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[2]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[2]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[2]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[2]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se elabore y publique un informe anual que contenga la descripción
                                                    de las prácticas de Calidad Humana y Responsabilidad Social más relevantes
                                                    del último año de la empresa u organización, con indicadores y testimonios.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion4">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a4']->render(array('disabled'=>'true'))?> a</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[3]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[3]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[3]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[3]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se realice al menos una auditoría interna completa al año,
                                                    con sus respectivas acciones correctivas y/o preventivas debidamente
                                                    cerradas para garantizar que el Sistema de Gestión está funcionando
                                                    adecuadamente.</li>
                                                <li>b) Que se realicen las auditorías de seguimiento necesarias por
                                                    los mismos auditores para asegurar el cumplimiento de las acciones
                                                    correctivas determinadas por el Comité de Calidad Humana y
                                                    Responsabilidad Social, derivadas de las auditorías internas.</li>
                                                <li>c) Que se determinen acciones preventivas por el comité de Calidad
                                                    Humana y Responsabilidad Social derivadas de las auditorías internas
                                                    y externas. NORMA CRESE 2014 27</li>
                                                <li>d) Que los auditores internos sean personal de la misma empresa
                                                    u organización.</li>
                                                <li>e) Que los auditores internos sean independientes del Comité Interno,
                                                    que es el organismo a través del cual se audita a la empresa u
                                                    organización.</li>
                                                <li>f) Que la base de la auditoría sea este Manual Guía de Implementación
                                                    del Sistema de Gestión de Calidad Humana y Responsabilidad Social
                                                    actualizado, sin que este sea limitante.</li>
                                                <li>g) Que se asegure que los reportes de auditorías los conozca el
                                                    Director General.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion5">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a5']->render(array('disabled'=>'true'))?> a</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 130px">
                                                        <label><?php echo $estado['min_b5']->render(array('disabled'=>'true'))?> b</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 160px">
                                                        <label><?php echo $estado['min_c5']->render(array('disabled'=>'true'))?> c</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 100px">
                                                        <label><?php echo $estado['min_d5']->render(array('disabled'=>'true'))?> d</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 30px">
                                                        <label><?php echo $estado['min_e5']->render(array('disabled'=>'true'))?> e</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 80px">
                                                        <label><?php echo $estado['min_f5']->render(array('disabled'=>'true'))?> f</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 120px">
                                                        <label><?php echo $estado['min_g5']->render(array('disabled'=>'true'))?> g</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[4]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[4]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[4]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[4]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se cuente con un estudio de gastos e ingresos, que se
                                                    renueve al menos una vez al año, del personal de tiempo completo
                                                    que menor salario recibe (Principio de Necesidad). Como salvedad,
                                                    en caso que no se pueda cumplir con este estudio, se requiere un
                                                    análisis de la distancia que existe entre el 5% del personal de
                                                    tiempo completo que más ingreso recibe versus el 5% del personal
                                                    de tiempo completo que menos ingreso recibe y que esta distancia
                                                    no sea mayor a 20 veces. </li>
                                                <li>b) Que se cuente algún mecanismo para identificar, reconocer y
                                                    promover la dedicación y los resultados del personal en su propio
                                                    beneficio y de la empresa u organización (Principio de Contribución
                                                    o equidad).</li>
                                                <li>c) Cuando aplique, solo para empresas mercantiles, que en el cálculo
                                                    del “Balance Trabajo-Capital”, de acuerdo con la fórmula que se
                                                    muestra a continuación, se cuente con un mínimo de 50% promediando
                                                    los tres últimos años (Principio de balance entre el trabajo y el
                                                    capital).</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion6">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a6']->render(array('disabled'=>'true'))?> a</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 320px">
                                                        <label><?php echo $estado['min_b6']->render(array('disabled'=>'true'))?> b</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 130px">
                                                        <label><?php echo $estado['min_c6']->render(array('disabled'=>'true'))?> c</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[5]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[5]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[5]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[5]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Existencia de mecanismos para prevenir, controlar y dar seguimiento
                                                    a actos de corrupción, extorsión y robo o abuso de confianza en
                                                    contra de la empresa u organización, por parte del personal u otros
                                                    grupos de interés. </li>
                                                <li>b) Que se cuente con una lista de todas las leyes, reglamentos y
                                                    normas que apliquen para la actividad de la empresa u organización,
                                                    además de mecanismos que garanticen su conocimiento.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion7">
                                                <br/>
                                                <div class="checkbox_list" id="calificacion">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a7']->render(array('disabled'=>'true'))?> a</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 130px">
                                                        <label><?php echo $estado['min_b7']->render(array('disabled'=>'true'))?> b</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[6]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[6]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[6]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[6]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se cuente con un botiquín de primeros auxilios en las instalaciones
                                                    de la empresa u organización.</li>
                                                <li>b) Evidencia de la existencia de planes y programas de capacitación
                                                    y adiestramiento, justificando el conocimiento general del personal
                                                    y visitantes en relación con la salud en el trabajo.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion8">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a8']->render(array('disabled'=>'true'))?> a</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 40px">
                                                        <label><?php echo $estado['min_b8']->render(array('disabled'=>'true'))?> b</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[7]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[7]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[7]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[7]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Evidencia de la existencia de Comisión Mixta de Seguridad e Higiene
                                                    y Salud en el trabajo o equivalente, recorridos mensuales, identificación
                                                    de riesgos, seguimiento a las observaciones realizadas en las actas
                                                    que realiza la comisión.</li>
                                                <li>b) Evidencia del manejo que se da a los materiales y sustancias
                                                    peligrosas (cuando exista).</li>
                                                <li>c) Evidencia del seguimiento y control personalizado de accidentes
                                                    en la empresa u organización, así como la verificación del comportamiento
                                                    del grado de riesgo. </li>
                                                <li>d) Evidencia de la existencia de planes y programas de capacitación
                                                    y adiestramiento, justificando el conocimiento general del personal
                                                    y visitantes en relación con la seguridad.</li>
                                                <li>e) Estudios de ruido, iluminación y ventilación (cuando aplique).</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion9">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a9']->render(array('disabled'=>'true'))?> a</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 160px">
                                                        <label><?php echo $estado['min_b9']->render(array('disabled'=>'true'))?> b</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 50px">
                                                        <label><?php echo $estado['min_c9']->render(array('disabled'=>'true'))?> c</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 100px">
                                                        <label><?php echo $estado['min_d9']->render(array('disabled'=>'true'))?> d</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 105px">
                                                        <label><?php echo $estado['min_e9']->render(array('disabled'=>'true'))?> e</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[8]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[8]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[8]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[8]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Evidencia de la existencia de Comisión Mixta de Seguridad e
                                                    Higiene y Salud en el trabajo o equivalente, recorridos mensuales,
                                                    identificación de riesgos, seguimiento a las observaciones realizadas
                                                    en las actas que realiza la comisión.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion10">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a10']->render(array('disabled'=>'true'))?> a</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[9]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[9]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[9]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[9]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que existan planes y programas de capacitación y adiestramiento,
                                                    justificando el conocimiento general de los trabajadores y visitantes
                                                    en relación con la seguridad y salud en el trabajo.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion11">
                                                <br/>
                                                <div class="checkbox_list" id="calificacion">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a11']->render(array('disabled'=>'true'))?> a</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[10]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[10]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[10]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[10]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "La preparación académica amplia la visión panorámica y capacidad de abstracción de las personas, aumenta su cultura y los hace mejores personas en el trabajo y fuera de él." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[11]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[11]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[11]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[11]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[11]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa para promover, canalizar y dar seguimiento a las ideas, propuestas o compromisos concretos de todo el personal y otros grupos de interés para hacer más eficiente o productiva a la empresa u organización."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip?>"><?php echo $requisito[12]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[12]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[12]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[12]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[12]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "El desarrollo que obtiene el personal en las empresas y organizaciones con Calidad Humana y Responsabilidad Social puede rebasar el nivel de desarrollo que se tiene en los miembros de sus familias; esta es una de las razones por las cuales es necesario promover también su desarrollo humano integral y solidario y fortalecer su integración."?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[13]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[13]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[13]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[13]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[13]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa para estructurar la actividad laboral de modo que se favorezca la integración de las familias, especialmente en el caso de las madres solteras con hijos menores de edad." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[14]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[14]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[14]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[14]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[14]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Una lista de personal separado de la empresa u organización
                                                    en el año anterior y explicación detallada del motivo y trato a
                                                    su salida.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion16">
                                                <br/>
                                                <div class="checkbox_list" id="calificacion">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a16']->render(array('disabled'=>'true'))?> a</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[15]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[15]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[15]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[15]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se presente evidencia convincente de no discriminación en
                                                    la contratación y despido de personal por razón de su edad, origen,
                                                    sexo, condición física o mental.</li>
                                                <li>b) Que se cumpla con el 5% de personal de condiciones especiales
                                                    en la misma empresa o con el apoyo de otras organizaciones que se
                                                    solidaricen y que puedan contratar personal con estas características.<br/>
                                                    En este caso se requiere un documento que evidencie el acuerdo de
                                                    apoyarse mutuamente y el cálculo tomando en cuenta al personal de
                                                    las organizaciones que participan.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion17">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a17']->render(array('disabled'=>'true'))?> a</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 105px">
                                                        <label><?php echo $estado['min_b17']->render(array('disabled'=>'true'))?> b</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[16]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[16]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[16]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[16]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que se cuente con un Programa de contratación y desarrollo de becarios, de preferencia con horarios flexibles, con el fin de que estos tengan la oportunidad de tener un currículum con experiencia." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[17]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[17]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[17]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[17]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[17]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se asegure que existen garantías a los Derechos Humanos y
                                                    Laborales del personal de sus proveedores de bienes y servicios.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion19">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a19']->render(array('disabled'=>'true'))?> a</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[18]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[18]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[18]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[18]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "La Norma CRESE 2014 promueve el principio de solidaridad como un beneficio para todos, pero también como un deber por lo que es necesario para cumplir cabalmente con este requisito que el personal y si es posible otros grupos de interés participen activamente en tareas de ayuda a la comunidad" ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[19]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[19]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[19]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[19]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[19]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del suelo por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[20]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[20]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[20]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[20]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[20]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del aire y atmósfera por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[21]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[21]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[21]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[21]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[21]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <?php $descrip = "Que exista un Programa de concientización y práctica para cuidado del agua por parte del personal de la empresa u organización, y de sus grupos de interés." ?>
                        <td <?php if (Privilegios::agregarprograma($sf_user->getRol())) {} else {echo ' colspan="2"';} ?> title="<?php echo $descrip ?>"><?php echo $requisito[22]->getTitulo(); ?></td>
                        <td></td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[22]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[22]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[22]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[22]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se cuente con una lista de valores y una herramienta que permita detectar las fallas en su práctica.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion24">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a24']->render(array('disabled'=>'true'))?> a</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[23]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[23]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[23]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[23]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
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
                                    <div class="col-lg-12">
                                        <div class="col-lg-10">
                                            <p>Como mínimo se requiere (aspectos mínimos auditables no limitativos):</p>
                                            <ul style="text-align: justify;">
                                                <li>a) Que se cuente con un programa que promueva, canalice y de
                                                    seguimiento a las ideas o propuestas de todo el personal para hacer
                                                    más congruente, ética y humanizantes a la empresa u organización.</li>
                                                <li>b) Que exista una práctica que atienda al menos algún aspecto de
                                                    los mencionados en la lista anterior.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <form class="form-inline" id="calificacion25">
                                                <br/>
                                                <div class="checkbox_list">
                                                    <br/>
                                                    <div class="checkbox" style="margin-top: 10px">
                                                        <label><?php echo $estado['min_a25']->render(array('disabled'=>'true'))?> a</label>
                                                    </div><br/>
                                                    <div class="checkbox" style="margin-top: 125px">
                                                        <label><?php echo $estado['min_b25']->render(array('disabled'=>'true'))?> b</label>
                                                        <?php echo $estado->renderHiddenFields()?>
                                                    </div>
                                                    <span class="input-group-addon" id="btncalificacion" style="display: none;cursor: pointer;">
                                                                            <i class="fa fa-save"></i>
                                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[24]->getIdRequisito()) { ?>
                                    <?php echo $programao->getNombre() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php if ($programao->getIdRequisito() == $requisito[24]->getIdRequisito()) { ?>
                                    <?php echo $comite->getActualizado() ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td style="width: 60px; text-align: center;">
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($programao->getIdRequisito() == $requisito[24]->getIdRequisito()) { ?>
                                    <?php echo $res ?><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php foreach ($comite->getPrograma() as $programao) {?>
                                <?php $res = $programao->getCalificacion(); ?>
                                <?php if ($res<=5.9){
                                    $estilo="style='color: #d0141d; line-height: 1.4em;'";
                                }elseif ($res>=6 && $res<=7.9){
                                    $estilo="style='color: #cdd059; line-height: 1.4em;'";
                                }elseif ($res>=8 && $res<=10){
                                    $estilo="style='color: #2dd01c; line-height: 1.4em;'";
                                }?>
                                <?php if ($programao->getIdRequisito() == $requisito[24]->getIdRequisito()) { ?>
                                    <i class="fa fa-square" aria-hidden="true" <?php echo $estilo ?>></i><br/>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>