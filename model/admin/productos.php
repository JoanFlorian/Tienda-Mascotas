<?php
require_once ("../../database/conection.php");
$db= new database();
$con = $db->conectar();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Paradise</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../../controller/css/g_productos.css"/>
  <link rel="stylesheet" href="../../controller/css/indexstyles.css"/>
  <link rel="stylesheet" href="../../controller/css/indexadminstyles.css"/> 
</head>
<body>
<header>
    <a href="index.php"><h2>Paraiso de mascotas</h2></a>
    <nav class="btons">
        <ul>
            <a href="tienda.php"><li>Tienda</li></a>
            <li>Productos</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
</svg></li>      
    </nav>
  </header>

<main class="container">
  <!-- Products Module -->
  <div id="products-module">
    <div class="section-header">
      <h2>Product Management</h2>
      <button class="btn-primary" id="add-product-btn"
        onclick="window.open('insert.php', '', 'width=600,height=500,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;">
        <span class="material-icons">add_circle_outline</span>
        <span>Añadir Nuevo Producto</span>
      </button>
    </div>
    <div class="card">
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody id="products-table-body"></tbody>
        <?php
        $productos = $con->prepare("SELECT * FROM producto");
        $productos->execute();
        $fila=$productos->fetchALL( PDO::FETCH_ASSOC);
        foreach ($fila as $producto) {
        ?>
        <tr>
            <td><img src="<?php echo $producto['ruta']?>" width="100" height="100"></td>
            <td><?php echo $producto['nombre']?></td>
            <td><?php echo $producto['precio']?></td>
            <td><?php echo $producto['cantidad']?></td>
            <td><a href="javascript:void(0)" onclick="window.open
                ('update.php?id=<?php echo $producto['id'] ?>','','width=700,height=500, toolbar=NO');
                void(null);"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a></td>
<?php }
?>
      </table>
    </div>
  </div>

  <!-- Store Module -->
  
</main>



<script src="app.js"></script>
</body>
</html>
