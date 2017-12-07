<a href="https://plataforma-er.com/">
    <?php echo image_tag('logoer.png', array('absolute' => true, 'class' => 'img-responsive','style'=>"height:50px; background-color: #052F64;")); ?></a>
<table align="center" width="700" style="width: 700px; display: block;margin: 0 auto;">
    <tr><td colspan="2" style="text-align: center;"><strong>Registro de Usuario - Carpeta Virtual</strong></td></tr>
    <tr><td style="width: 200px;">Empresa:</td><td><?php echo $empresa;?></td></tr>
    <tr><td>Privilegios:</td><td><?php echo $privilegio;?></td></tr>
    <tr><td>Sucursal:</td><td><?php echo $sucursal;?></td></tr>
    <tr><td>Comité:</td><td><?php echo $comite;?></td></tr>
    <tr><td>Nombre(s):</td><td><?php echo $data['nombre'];?></td></tr>
    <tr><td>Nombre de Usuario:</td><td><?php echo $data['nombre_usuario'];?></td></tr>
    <tr><td>Primer Apellido:</td><td><?php echo $data['primer_apellido'];?></td></tr>
    <tr><td>Segundo Apellido:</td><td><?php echo $data['segundo_apellido'];?></td></tr>
    <tr><td>Correo Electrónico:</td><td><?php echo $data['email'];?></td></tr>
    <tr><td>Tel. Fijo:</td><td><?php echo $data['telefono_fijo'];?></td></tr>
    <tr><td>Tel. Celular:</td><td><?php echo $data['telefono_celular'];?></td></tr>
    <tr><td>Email Emergencia:</td><td><?php echo $data['email_emergencia'];?></td></tr>
    <tr><td>Cargo:</td><td><?php echo $data['cargo'];?></td></tr>
    <tr><td>Contraseña:</td><td><?php echo $data['password'];?></td></tr>
    <tr><td>Palabra Clave:</td><td><?php echo $data['palabra_clave'];?></td></tr>
</table>




