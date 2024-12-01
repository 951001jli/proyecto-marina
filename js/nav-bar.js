import { resaltaSiEstasEn } from "../lib/js/resaltaSiEstasEn.js"

export class NavBar extends HTMLElement {

 connectedCallback() {
  this.classList.add("md-navigation-bar")

  this.innerHTML = /* HTML */`
   <a ${resaltaSiEstasEn(["/inicioAdmin.php", "", "/"])} href="inicioAdmin.php">
    <span class="material-symbols-outlined">home</span>
    Inicio
   </a>

   <a ${resaltaSiEstasEn(["/usuariosAdmin.php"])} href="usuariosAdmin.php">
    <span class="material-symbols-outlined">person_add</span>
    Usuarios
   </a>

   <a id="navbar" ${resaltaSiEstasEn(["/asistenciaAdmin.php"])} href="asistenciaAdmin.php">
    <span class="material-symbols-outlined">receipt_long</span>
    Asistencia
   </a>

   <a ${resaltaSiEstasEn(["/productoAdmin.php"])} href="productoAdmin.php">
    <span class="material-symbols-outlined">box</span>
    Productos
   </a>`

 }

}

customElements.define("nav-bar", NavBar)