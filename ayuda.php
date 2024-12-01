<!DOCTYPE html>
<html lang="es" class="light dark">

<head>

 <meta charset="UTF-8">
 <title>Ayuda - PWA con MD</title>

 <script src="js/registraServiceWorker.js"></script>

 <meta name="viewport" content="width=device-width">
 <meta name="theme-color" content="#fffbfe">
 <link rel="icon" sizes="32x32" href="favicon.ico">
 <link rel="manifest" href="site.webmanifest">
 <script src="ungap/custom-elements.js"></script>

 <script type="module" src="js/configura.js"></script>
 <link rel="stylesheet" href="css/estilos.css">
 <link rel="stylesheet" href="css/transicion_completa.css">

</head>

<body>

 <md-top-app-bar>

  <h1>Ayuda</h1>

  <button is="md-menu-button" slot="navigation"></button>

 </md-top-app-bar>

 <main>

  <ul class="md-list">
   <li class="md-two-line">
    <span class="headline">
     Título
    </span>
    <span class="supporting">
     PWA con Material Design
    </span>
   </li>
   <li class="md-two-line">
    <span class="headline">
     Descripción
    </span>
    <span class="supporting">
     Ejemplos de vistas móviles.
    </span>
   </li>
   <li class="md-two-line">
    <span class="headline">
     Autor
    </span>
    <span class="supporting">
     Gilberto Pacheco Gallegos
    </span>
   </li>
   <li class="md-two-line">
    <span class="headline">
     Derechos de autor
    </span>
    <span class="supporting">
     &copy; 2024 Gilberto Pacheco Gallegos
    </span>
   </li>
   <li class="md-three-line">
    <span class="headline">
     Este software usa la librería para PWA
    </span>
    <span class="supporting">
     Esta obra de Gilberto Pacheco Gallegos está bajo una
     <a target="_blank" rel="license noreferrer"
       href="http://creativecommons.org/licenses/by/4.0/">
      Licencia Creative Commons Atribución 4.0 Internacional</a></span>
   </li>
   <li>
    <a class="md-three-line" target="_blank" rel=”noreferrer”
      href="https://fonts.google.com/icons">
     <span class="headline">
      También usa Material Symbols
     </span>
     <span class="supporting">
      Desarrollada por Google bajo licencia Apache 2.0
     </span>
    </a>
   </li>
  </ul>

 </main>

 <nav-drw></nav-drw>

</body>

</html>