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
  <h1>Lista de asistencias</h1>
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

 <!-- <h1 id="headline">Asistencias del día</h1> -->
 <main class="table">
  <section class="table_header">
    <h1>Lista de asistencias</h1>
    <div class="inp-group">
      <input type="search" placeholder="Buscar...">
    </div>
  </section>
  <section class="table_body">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre(s)</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Fecha de asistencia</th>
          <th>Hora de entrada</th>
          <th>Hora de salida</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Id" >1</td>
          <td data-label="Nombre(s)" >Norma Lizet</td>
          <td data-label="Apellido Paterno" >Garduño</td>
          <td data-label="Apellido Materno" >Aguilar</td>
          <td data-label="Fecha de asistencia" >07 de Noviembre de 2024</td>
          <td data-label="Hora de entrada" >7:00 a.m.</td>
          <td data-label="Hora de salida" >9:00 a.m.</td>
          <td data-label="Acciones" >
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td data-label="Id" >2</td>
          <td data-label="Nombre(s)" >José Luis</td>
          <td data-label="Apellido Paterno" >Hernández</td>
          <td data-label="Apellido Materno" >Izquierdo</td>
          <td data-label="Fecha de asistencia" >04 de Noviembre de 2024</td>
          <td data-label="Hora de entrada" >7:00 a.m.</td>
          <td data-label="Hora de salida" >9:12 a.m.</td>
          <td data-label="Acciones" >
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td data-label="Id" >3</td>
          <td data-label="Nombre(s)" >Brandon Jesús</td>
          <td data-label="Apellido Paterno" >Hernández</td>
          <td data-label="Apellido Materno" >Pérez</td>
          <td data-label="Fecha de asistencia" >30 de Octubre de 2024</td>
          <td data-label="Hora de entrada" >9:00 a.m.</td>
          <td data-label="Hora de salida" >10:30 a.m.</td>
          <td data-label="Acciones" >
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td data-label="Id" >4</td>
          <td data-label="Nombre(s)" >Yanitzin</td>
          <td data-label="Apellido Paterno" >Martínez</td>
          <td data-label="Apellido Materno" >Basilio</td>
          <td data-label="Fecha de asistencia" >30 de Octubre de 2024</td>
          <td data-label="Hora de entrada" >7:00 a.m.</td>
          <td data-label="Hora de salida" >9:12 a.m.</td>
          <td data-label="Acciones" >
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td data-label="Id" >5</td>
          <td data-label="Nombre(s)" >Edgar Alejandro</td>
          <td data-label="Apellido Paterno" >Ortiz</td>
          <td data-label="Apellido Materno" >Trejo</td>
          <td data-label="Fecha de asistencia" >31 de Octubre de 2024</td>
          <td data-label="Hora de entrada" >6:30 a.m.</td>
          <td data-label="Hora de salida" >8:30 a.m.</td>
          <td data-label="Acciones" >
            <button class="btn btn-view"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </section>
 </main>
 <div class="paginacion">
  <a href="#">&laquo;</a>
  <a href="#" class="activo">1</a>
  <a href="#">&raquo;</a>
</div>
 <nav-bar></nav-bar>

</body>

</html>