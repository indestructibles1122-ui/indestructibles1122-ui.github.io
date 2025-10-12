// @ts-nocheck
import { querySelector } from "querySelector.js"
import { resaltaSiEstasEn } from "resaltaSiEstasEn.js"

export class NavTabScrollable extends HTMLElement {

 connectedCallback() {
  this.classList.add("md-tab", "scrollable")

  this.innerHTML = /* HTML */`
   <a ${resaltaSiEstasEn(["index.html", "", "/"])} href="index.html">
    <span class="material-symbols-outlined">home</span>
    Inicio
   </a>

   <a ${resaltaSiEstasEn(["ayuda.html"])} href="ayuda.html">
    <span class="material-symbols-outlined">help</span>
    Ayuda
   </a>`

 }

}

customElements.define("nav-tab-scrollable", NavTabScrollable)