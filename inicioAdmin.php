<!DOCTYPE html>
<html lang="es" class="light dark">

<head>

 <meta charset="UTF-8">
 <title>Inicio - PWA Gym</title>

 <script src="js/registraServiceWorker.js"></script>

 <meta name="viewport" content="width=device-width">
 <meta name="theme-color" content="#fffbfe">
 <link rel="icon" sizes="48x48" href="favicon.ico">
 <link rel="manifest" href="site.webmanifest">
 <script src="ungap/custom-elements.js"></script>

 <script type="module" src="js/configura.js"></script>
 <link rel="stylesheet" href="css/estilos.css">
 <link rel="stylesheet" href="css/transicion_pestanas.css">
 <link rel="expect" blocking="render" href="#navbar">

</head>

<body
  style="padding-bottom: 5rem;">

 <md-top-app-bar headline="headline">

  <h1>navegación</h1>

  <button type="button" class="md-standard-icon-button" title="Agregar"
    slot="action">
   <span class="material-symbols-outlined">add</span>
  </button>
  <button type="button" class="md-standard-icon-button" title="Editar"
    slot="action">
   <span class="material-symbols-outlined">edit</span>
  </button>

  <button type="button" class="md-standard-icon-button" title="salir"
  slot="action" onclick="window.location.href='index.html'">
  <span class="material-symbols-outlined">power_settings_new</span>
</button>

 </md-top-app-bar>

 <h1 id="headline">Bienvenido</h1>

 <main>
  <p>
   Texto de ejemplo
  </p>
  
 </main>

 <nav-bar></nav-bar>

</body>

</html>