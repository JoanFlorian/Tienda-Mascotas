<?php
require_once ("../../database/conection.php");
$db= new database();
$con = $db->conectar();
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Paraíso de Mascotas</title>
  <link rel="stylesheet" href="../../controller/css/indexstyles.css"/>
  <link rel="stylesheet" href="../../controller/css/indexadminstyles.css"/> 
</head>
<body>
    <header>
    <a href="index.php"><h2>Paraiso de mascotas</h2></a>
    <nav class="btons">
        <ul>
            <li>Tienda</li>
            <a href="productos.php"><li>Productos</li></a>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
</svg></li>      
    </nav>
  </header>

     <main>
    <!-- CATEGORIES -->
    <h2 class="h2-best-product">Comprar por Mascota</h2>
    <section class="categories">
      <div class="category">
        <img src="controller/img/categoria-perros.png" alt="Perros" class="img-categorie"/>
        <p class="p-category">Perros</p>
      </div>
      <div class="category">
        <img src="controller/img/categoria-gatos.png" alt="Gatos" class="img-categorie"/>
        <p class="p-category">Gatos</p>
      </div>
      <div class="category">
        <img src="controller/img/categoria-aves.png" alt="Aves" class="img-categorie"/>
        <p class="p-category">Aves</p>
      </div>
      <div class="category">
        <img src="controller/img/categoria-peces.png" alt="Peces" class="img-categorie"/>
        <p class="p-category">Peces</p>
      </div>
      <div class="category">
        <img src="controller/img/categoria-reptiles.png" alt="Reptiles" class="img-categorie"/>
        <p class="p-category">Reptiles</p>
      </div>
      <div class="category">
        <img src="controller/img/categoria-pequenos-animales.png" alt="Pequeños Animales" class="img-categorie"/>
        <p class="p-category">Pequeños Animales</p>
      </div>
    </section>

    
    <h2 class="h2-best-product">Productos Destacados</h2>
    <section class="products">
        <?php 
        $sql=$con->prepare("SELECT * FROM producto");
        $sql->execute();
        $fila=$sql->fetchALL();
        foreach ($fila as $producto) {
        
        echo'<div class="product">';
        echo'<img src="'.$producto['ruta'].'"class="img-product"/>';
        echo '<p class="product-title">'.$producto[$nombre].'</p>';
        echo '<p class="p-product">'.'$'.$producto['precio'].'</p>';
        echo '<p class="p-product">'.$producto['descripcion'].'</p>';
        echo '</div>';
        }
        ?>
    </section>
  </main>
</body>
</html>
