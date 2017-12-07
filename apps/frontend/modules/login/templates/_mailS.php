<a href="https://plataforma-er.com/">
    <?php echo image_tag('logoer.png', array('absolute' => true, 'class' => 'img-responsive','style'=>"height:50px; background-color: #052F64;")); ?></a>
<table align="center" width="700" style="width: 700px; display: block;margin: 0 auto;">
    <tr><td colspan="2" style="text-align: center;"><strong>Registro de Sucursal - Carpeta Virtual</strong></td></tr>
    <tr><td style="width: 200px;">Empresa:</td><td><?php echo $empresa;?></td></tr>
    <tr><td>Consultor:</td><td><?php echo $consultor;?></td></tr>
    <tr><td>Gerente:</td><td><?php echo $gerente;?></td></tr>
    <tr><td>Subdirector:</td><td><?php echo $subdirector;?></td></tr>
    <tr><td>Director General:</td><td><?php echo $director;?></td></tr>
    <tr><td>Nombre de la Sucursal:</td><td><?php echo $data['nombre'];?></td></tr>
    <tr><td>No. de Sucursal:</td><td><?php echo $data['sucursal'];?></td></tr>
    <tr><td>Contacto Principal:</td><td><?php echo $data['nombre_contacto'];?></td></tr>
    <tr><td>Email Contacto Principal:</td><td><?php echo $data['email'];?></td></tr>
    <tr><td>Teléfono:</td><td><?php echo $data['telefono'];?></td></tr>
    <tr><td>País:</td><td><?php echo $data['pais'];?></td></tr>
    <tr><td>Estado:</td><td><?php echo $data['estado'];?></td></tr>
    <tr><td>Ciudad:</td><td><?php echo $data['ciudad'];?></td></tr>
    <tr><td>Municipio:</td><td><?php echo $data['municipio'];?></td></tr>
    <tr><td>Dirección:</td><td><?php echo $data['direccion'];?></td></tr>
    <tr><td>Número:</td><td><?php echo $data['numero'];?></td></tr>
    <tr><td>Delegación:</td><td><?php echo $data['delegacion'];?></td></tr>
    <tr><td>Código Postal:</td><td><?php echo $data['cp'];?></td></tr>
    <tr><td>Referencia Adicional:</td><td><?php echo $data['referencia'];?></td></tr>
</table>




