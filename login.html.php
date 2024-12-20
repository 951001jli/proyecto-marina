<!DOCTYPE html>
<html lang="es" class="light dark">

<head>

 <meta charset="UTF-8">
 <title>Login - Gym 11:11</title>
 
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
 <meta name="description" content="">
 <meta name="keywords" content="">
 <meta name="author" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/font-awesome.min.css">
 <link rel="stylesheet" href="css/aos.css">

 <script src="js/registraServiceWorker.js"></script>

 <meta name="viewport" content="width=device-width">
 <meta name="theme-color" content="#fffbfe">
 <link rel="icon" sizes="48x48" href="favicon.ico">
 <link rel="manifest" href="site.webmanifest">
 <script src="ungap/custom-elements.js"></script>

 <script type="module" src="js/configura.js"></script>
 <link rel="stylesheet" href="css/estilos.css">
 <link rel="stylesheet" href="css/transicion_completa.css">
 <link rel="stylesheet" href="css/tooplate-gymso-style.css">
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

 <md-top-app-bar headline="headline">
 

 </md-top-app-bar>


 <nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">

      <a class="navbar-brand" href="index.php">Gym 11:11</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link smoothScroll">Regresar</a>
              </li>


          
          </ul>

          <ul class="social-icon ml-lg-3">
              <li><a href="#" class="fa fa-facebook"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-instagram"></a></li>
          </ul>
      </div>

  </div>
</nav>


 <h1 id="headline">Inicio de sesión</h1>

 <main>

  <!-- Usa
    class="float"
   cuando quieras que la etiqueta esté arriba todo el tiempo. -->
 

   <p>
    <label class="md-filled-text-field">
     <input type="email" placeholder="Email">
     <span accesskey="M">Email</span>
    </label>
   </p>


  <p>
    <label class="md-filled-text-field">
    <input required placeholder="Nombre*">
    <span>Contraseña *</span>
    <small>Obligatorio</small>
   </label>
  </p>
 
  <p style="text-align: center;">
    <button class="md-filled-button" onclick="window.location.href='inicioAdmin.php'">
      Iniciar sesión
    </button>
    <button class="md-outline-button">
      Registrarse
    </button>
  </p>
  
  
   
 

 </main>

 <nav-drw></nav-drw>

</body>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/custom.js"></script>

</html>