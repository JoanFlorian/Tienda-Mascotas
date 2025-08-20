<?php
require_once("../../database/conection.php");
$db= new database();
$con = $db->conectar();

    if(isset($_POST['crear'])){
            $nombre=$_POST['nombre_producto'];
            $precio=$_POST['precio_producto'];
            $cantidad=$_POST['cantidad_producto'];
            $imagen=$_FILES['imagen_producto']["tmp_name"];
            $nombre_imagen=$_FILES['imagen_producto']['name'];
            $tipo_imagen= strtolower(pathinfo($nombre_imagen,PATHINFO_EXTENSION));
            $descripcion=$_POST['descripcion_producto'];
            $directorio="../../controller/img/";
            if ($tipo_imagen == "jpeg" or $tipo_imagen == "jpg" or $tipo_imagen == "png"){
                $ruta=$directorio.$nombre_imagen.".".$tipo_imagen;
                if(move_uploaded_file($imagen,$ruta)){
                $crear= $con->prepare("INSERT INTO producto (nombre,precio,cantidad,ruta,descripcion) VALUES('$nombre','$precio','$cantidad','$ruta','$descripcion')");
                    $crear->execute();
                    echo '<script>alert("Imagen Guardada exitosamente."); </script>';
                    
                }
                else{
                    echo '<script>alert("Error al guardar imagen."); </script>';
                }
            } else{
                '<script>alert("No se acepta este formato."); </script>';
            }


        }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear producto</title>
</head>
<body>
  <h2>Crear producto</h2>
  <form method="POST" action="" enctype="multipart/form-data">

      <label>Nombre</label>
      <input type="text" name="nombre_producto" ><br>
      
      <label>Precio</label>
      <input type="number" name="precio_producto" ><br>
        
      <label>Cantidad</label>
      <input type="number" name="cantidad_producto" ><br>
      <label>Imagen</label>
      <input type="file" name="imagen_producto" ><br>
      <label>Descripcion</label>
      <input type="text" name="descripcion_producto" ><br>

      <button type="submit" name="crear">Crear Producto</button>
      <button type="submit" name="eliminar">Cancelar</button>
  </form>
</body>
</html>