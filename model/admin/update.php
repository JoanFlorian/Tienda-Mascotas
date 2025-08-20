<?php
require_once("../../database/conection.php");
$db= new database();
$con = $db->conectar();
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = $con->prepare("SELECT * FROM producto WHERE id = $id");
    $sql->execute();
    $fila = $sql->fetch();
    if($fila){
        if(isset($_POST['actualizar'])){
            $nombre=$_POST['nombre_producto'];
            $cantidad=$_POST['cantidad_producto'];
            $precio=$_POST['precio_producto'];
            $imagen=$_FILES['imagen_producto']["tmp_name"];
            $nombre_imagen=$_FILES['imagen_producto']['name'];
            $tipo_imagen= strtolower(pathinfo($nombre_imagen,PATHINFO_EXTENSION));
            $descripcion=$_POST['descripcion_producto'];
            $directorio="../../controller/img/";
            $ruta=$directorio.$nombre_imagen;
            $actualizar = $con->prepare("UPDATE producto SET nombre = ?, cantidad = ?, ruta = ?, descripcion = ?, precio = ? WHERE id = ?");
            $actualizar->execute([$nombre, $cantidad, $ruta, $descripcion, $precio, $id]);
            if ($tipo_imagen == "jpeg" or $tipo_imagen == "jpg" or $tipo_imagen == "png"){
                echo '<script>alert("Imagen Guardada exitosamente."); </script>';
                if(move_uploaded_file($imagen,$ruta)){
                echo '<script>alert("Producto actualizado exitosamente."); </script>';
            } else {
                echo '<script>alert("Error al actualizar producto."); </script>';
            }
                }
            } else{
                '<script>alert("No se acepta este formato."); </script>';
            }


        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar producto</title>
</head>
<body>
  <h2>Editar producto</h2>
  <form method="POST" action="" enctype="multipart/form-data">

      <label>Nombre</label>
      <input type="text" name="nombre_producto" value="<?php echo $fila['nombre']; ?>"><br>
      
      <label>Precio</label>
      <input type="number" name="precio_producto" value="<?php echo $fila['precio']; ?>"><br>
        
      <label>Cantidad</label>
      <input type="number" name="cantidad_producto" value="<?php echo $fila['cantidad']; ?>"><br>
      <label>Imagen</label>
      <input type="file" name="imagen_producto" ><br>
      <label>Descripcion</label>
      <input type="text" name="descripcion_producto" value="<?php echo $fila['descripcion']; ?>"><br>

      <button type="submit" name="actualizar">Guardar cambios</button>
      <button type="submit" name="Eliminar">Eliminar</button>
  </form>
</body>
</html>


