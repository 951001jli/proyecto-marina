<!DOCTYPE html>
<html lang="es" class="light dark">

<head>

 <meta charset="UTF-8">
 <title>GYM 11:11 - Admin</title>

 <script src="js/registraServiceWorker.js"></script>

 <meta name="viewport" content="width=device-width">
 <meta name="theme-color" content="#fffbfe">
 <link rel="icon" sizes="48x48" href="favicon.ico">
 <link rel="manifest" href="site.webmanifest">
 <script src="ungap/custom-elements.js"></script>
 <script type="module" src="js/configura.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 <link rel="stylesheet" href="css/Crud.css">
 <link rel="stylesheet" href="css/estilos.css">
 <link rel="stylesheet" href="css/transicion_pestanas.css">
 <link rel="expect" blocking="render" href="#navbar">

</head>

<body
  style="padding-bottom: 5rem;">

 <md-top-app-bar headline="headline">


  <h1>navegación / lista de productos</h1>

  <!-- <button type="button" class="md-standard-icon-button" title="Agregar"
    slot="action">
   <span class="material-symbols-outlined">add</span>
  </button>
  <button type="button" class="md-standard-icon-button" title="Editar"
    slot="action">
   <span class="material-symbols-outlined">edit</span>
  </button> -->
  <button type="button" class="md-standard-icon-button" title="salir"
    slot="action" onclick="window.location.href='index.php'">
    <span class="material-symbols-outlined">exit_to_app</span>
  </button>

   
 </md-top-app-bar>

 <!-- <h1 id="headline">Registrar productos</h1> -->
 <main>
  <section class="table_header">
    <h1>Lista de productos</h1>
    <div class="inp-group">
      <input type="search" placeholder="Buscar...">
      <button type="button" class="btn_add_new"><i class="fa-solid fa-plus"></i> Agregar producto</button>
    </div>
  </section>
  <div class="table_body">
    <table>
      <thead>
        <tr>
          <th>Id <!--<span class="icon-arrow">&UpArrow;</span>--></th>
          <th>Imagen <!--<span class="icon-arrow">&UpArrow;</span>--></th>
          <th>Nombre del producto <!--<span class="icon-arrow">&UpArrow;</span>--></th>
          <th>Categoría <!--<span class="icon-arrow">&UpArrow;</span>--></th>
          <th>descripción <!--<span class="icon-arrow">&UpArrow;</span>--></th>
          <th>Stock <!--<span class="icon-arrow">&UpArrow;</span>--></th>
          <th>Precio <!--<span class="icon-arrow">&UpArrow;</span>--></th>
          <th>Estado <!--<span class="icon-arrow">&UpArrow;</span>--></th>
          <th>Acciones <!--<span class="icon-arrow">&UpArrow;</span>--></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Id">1</td>
          <td data-label="Imagen"><img src="images/products/Protein Mutant Whey.png" alt="Suplemento"></td>
          <td data-label="Nombre del producto">Proteína Mutant Whey</td>
          <td data-label="Categoría">Suplemento</td>
          <td data-label="Descripción">Proteína en polvo ideal sabor chocolate para ganar masa muscular...</td>
          <td data-label="Stock">25</td>
          <td data-label="Precio"><strong>$739.00 MXN</strong></td>
          <td data-label="Estado"><p class="status activo"><strong>Disponible</strong></p></td>
          <td data-label="Acciones">
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-edit"><i class="fa-solid fa-pen"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td data-label="Id">2</td>
          <td data-label="Imagen"><img src="images/products/Creatina monohidratada.png" alt="Suplemento"></td>
          <td data-label="Nombre del producto">Creatine Beyond</td>
          <td data-label="Categoría">Suplemento</td>
          <td data-label="Descripción">Creatina Monohidratada, optimiza fuerza y recuperación en...</td>
          <td data-label="Stock">15</td>
          <td data-label="Precio"><strong>$320.00 MXN</strong></td>
          <td data-label="Estado"><p class="status activo"><strong>Disponible</strong></p></td>
          <td data-label="Acciones">
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-edit"><i class="fa-solid fa-pen"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td data-label="Id">3</td>
          <td data-label="Imagen"><img src="images/products/Pre-entreno nitro.png" alt="Suplemento"></td>
          <td data-label="Nombre del producto">Pre-entreno Nitro</td>
          <td data-label="Categoría">Suplemento</td>
          <td data-label="Descripción">Fórmula de pre-entreno con cafeína y beta-alanina para mejorar...</td>
          <td data-label="Stock">10</td>
          <td data-label="Precio"><strong>$350.00 MXN</strong></td>
          <td data-label="Estado"><p class="status activo"><strong>Disponible</strong></p></td>
          <td data-label="Acciones">
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-edit"><i class="fa-solid fa-pen"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td data-label="Id">4</td>
          <td data-label="Imagen"><img src="images/products/Playera gym XS.jpg" alt="Ropa"></td>
          <td data-label="Nombre del producto">Playera Gym XS</td>
          <td data-label="Categoría">Ropa</td>
          <td data-label="Descripción">Playera de tela ligera en talla XS, diseñada para entrenamientos...</td>
          <td data-label="Stock">4</td>
          <td data-label="Precio"><strong>$120.00 MXN</strong></td>
          <td data-label="Estado"><p class="status adv"><strong>Casi agotado</strong></p></td>
          <td data-label="Acciones">
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-edit"><i class="fa-solid fa-pen"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td data-label="Id">5</td>
          <td data-label="Imagen"><img src="images/products/Guantes de entrenamiento.png" alt="Accesorio"></td>
          <td data-label="Nombre del producto">Guantes de entrenamiento</td>
          <td data-label="Categoría">Accesorio</td>
          <td data-label="Descripción">Guantes con acolchado para protección y agarre, ideales para...</td>
          <td data-label="Stock">0</td>
          <td data-label="Precio"><strong>$89.99 MXN</strong></td>
          <td data-label="Estado"><p class="status inactivo"><strong>Agotado</strong></p></td>
          <td data-label="Acciones">
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-edit"><i class="fa-solid fa-pen"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
 </main>
 <div class="paginacion">
  <a href="#">&laquo;</a>
  <a href="#" class="activo">1</a>
  <a href="#">&raquo;</a>
</div>
 <nav-bar></nav-bar>

</body>

</html>