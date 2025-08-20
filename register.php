<?php
require_once ("database/conection.php");
$db= new database();
$con = $db->conectar();
session_start();
if (isset($_POST['registrar'])){
    $rol=$_POST['id_tip_us'];
  $doc =$_POST['doc'];
  $primer_nombre=$_POST['primer-nombre'];
  $otros_nombres=$_POST['otros-nombres'];
  $primer_apellido=$_POST['primer-apellido'];
  $otros_apellidos=$_POST['otros-apellidos'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm_password'];
  $validacion = $con -> prepare("SELECT * FROM user WHERE '$email' = correo");
    $validacion->execute();
    $fila= $validacion->fetchALL(PDO ::FETCH_ASSOC);
        if ($fila){
            echo '<script> alert("El usuario ya ha sido registrado.")</script>';
        }
        elseif( $doc=="" ||  $primer_nombre =="" || $primer_apellido==""||$email=="" || $password== ""){
            echo '<script> alert("Campos no diligenciados. Por favor diligencia todos los campos.")</script>';
        }
        else{
            if($password==$confirm_password){
            $password_cifrado= password_hash($password,PASSWORD_DEFAULT,ARRAY("pass"=>12));
              $sql= $con->prepare("INSERT INTO user (id,nombre,otros_nombres,apellido, otros_apellidos,telefono,correo,password,id_tip_user) VALUES('$doc','$primer_nombre','$otros_nombres','$primer_apellido','$otros_apellidos','$telefono','$email','$password_cifrado','$rol')");
              $sql->execute();
            echo '<script> alert("Usuario registrado exitosamente.")</script>';
            echo "<script>window.location='log-in.html'</script>";
            }
            else{
                '<script> alert("Las contraseñas no coinciden. Diligencielas nuevamente.")</script>';
            }
        }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="controller/css/log-instyles.css">
  <title>Log In</title>
</head>
<body>
  <header>
    <h2>Paraiso de mascotas</h2>
    <div class="btons">
      <button class="btn-yellow btntienda">Tienda</button>
      <button class="btn-yellow">Registrarse</button>
      <button class="btn-yellow btn-gray">Iniciar sesión</button>
    </div>
  </header>

  <main>
    <div class="log-in-section">
      <form action="" method="post" class="log-in-form" name="log-in-form">
        <h1>Registro de Usuario</h1>
        <select name="id_tip_us" id="idusu"  aria-label="Disabled select example">
                <option value=""> Selecciona una opción </option>

                <?php
                
                $control = $con -> prepare("SELECT * FROM tip_user");
                $control -> execute();

                while ($tp = $control -> fetch(PDO::FETCH_ASSOC)) 
                {
                    echo "<option value=". $tp ['id_tip_user'] . ">" . $tp['tip_user'] . "</option>";
                }
                ?>

            </select>
        <label for="doc">Documento</label>
        <input type="number" id="doc" name="doc" placeholder="1070599004" required>

        <label for="primer-nombre">Primer Nombre</label>
        <input type="text" id="primer-nombre" name="primer-nombre" placeholder="Juan" required>

        <label for="otros-nombres">Otros Nombres</label>
        <input type="text" id="otros-nombres" name="otros-nombres" placeholder="Andrés" >

        <label for="primer-apellido">Primer Apellido</label>
        <input type="text" id="primer-apellido" name="primer-apellido" placeholder="Pérez" required>

        <label for="otros-apellidos">Otros Apellidos</label>
        <input type="text" id="otros-apellidos" name="otros-apellidos" placeholder="Gómez" >

        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required>

        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="(000) 000-0000" required>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="********" required>

        <label for="confirm_password">Confirmar Contraseña</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="********" required>

        <button type="submit" name="registrar" class="btn-yellow"><strong>Registrarse</strong></button>
        <button class="btn-yellow btn-gray">¿Ya tienes cuenta? Inicia sesión</button>
      </form>
    </div>
  </main>
</body>
</html>
