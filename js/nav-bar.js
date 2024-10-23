import { resaltaSiEstasEn } from "../lib/js/resaltaSiEstasEn.js"

export class NavBar extends HTMLElement {

 connectedCallback() {
  this.classList.add("md-navigation-bar")

  this.innerHTML = /* HTML */`
   <a ${resaltaSiEstasEn(["/inicioAdmin.html", "", "/"])} href="inicioAdmin.html">
    <span class="material-symbols-outlined">home</span>
    Inicio
   </a>

   <a ${resaltaSiEstasEn(["/usuariosAdmin.html"])} href="usuariosAdmin.html">
    <span class="material-symbols-outlined">person_add</span>
    Usuarios
   </a>

   <a id="navbar" ${resaltaSiEstasEn(["/asistenciaAdmin.html"])} href="asistenciaAdmin.html">
    <span class="material-symbols-outlined">receipt_long</span>
    Asistencia
   </a>

   <a ${resaltaSiEstasEn(["/productoAdmin.html"])} href="productoAdmin.html">
    <span class="material-symbols-outlined">box</span>
    Productos
   </a>`

 }

}

customElements.define("nav-bar", NavBar)