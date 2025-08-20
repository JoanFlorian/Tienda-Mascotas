<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Paraíso de Mascotas</title>
  <link rel="stylesheet" href="controller/css/indexstyles.css"/> <!-- tu CSS -->
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
    <section>
      <div class="hero">
        <div class="hero-text">
          <h1>Bienvenido a Paraíso de Mascotas</h1>
          <p>Tu tienda única para todas las necesidades de tu mascota.</p>
          <button class="btn-yellow hero-button">Comprar ahora</button>
        </div>
      </div>
    </section>

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

    <!-- BEST PRODUCTS -->
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
