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
    <h2>Paraiso de mascotas</h2>
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
      <div class="product">
        <img src="controller/img/cuerda.png" alt="Juguete" class="img-product"/>
        <p class="product-title">Juguete de Cuerda Duradero para Perros</p>
        <p class="p-product">$15.99</p>
        <p class="p-product">Este juguete de cuerda duradero es perfecto para juegos de tira y afloja y lanzar.</p>
      </div>

      <div class="product">
        <img src="controller/img/cama-gato.png" alt="Cama para gatos" class="img-product"/>
        <p class="product-title">Cama Acogedora para Gatos</p>
        <p class="p-product">$29.99</p>
        <p class="p-product">Una cama suave y cómoda para que tu amigo felino se relaje.</p>
      </div>

      <div class="product">
        <img src="controller/img/percha.png" alt="Percha" class="img-product"/>
        <p class="product-title">Percha para Aves</p>
        <p class="p-product">$12.50</p>
        <p class="p-product">Proporciona a tu ave una percha natural y estimulante.</p>
      </div>

      <div class="product">
        <img src="controller/img/decoracion-acuario.png" alt="Decoración acuario" class="img-product"/>
        <p class="product-title">Decoración para Acuarios</p>
        <p class="p-product">$22.75</p>
        <p class="p-product">Mejora tu acuario con decoraciones vibrantes y seguras.</p>
      </div>

      <div class="product">
        <img src="controller/img/lampara-reptiles.png" alt="Lámpara reptiles" class="img-product"/>
        <p class="product-title">Lámpara de Calor para Reptiles</p>
        <p class="p-product">$35.00</p>
        <p class="p-product">Mantén a tu reptil cálido y cómodo con esta lámpara de calor.</p>
      </div>

      <div class="product">
        <img src="controller/img/juguete-masticar.png" alt="Juguete pequeños animales" class="img-product"/>
        <p class="product-title">Juguete para Masticar para Pequeños Animales</p>
        <p class="p-product">$8.99</p>
        <p class="p-product">Un juguete para masticar seguro y atractivo para pequeños animales.</p>
      </div>
    </section>
  </main>
</body>
</html>
