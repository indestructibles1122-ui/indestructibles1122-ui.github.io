<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {

 $lista = [
  [
   "nombre" => "Angel",
   "chiste" => "Me encantan los mensajes de voz. Yo los detesto. Sí, esos también estan chidos."
  ],
  [
   "nombre" => "Missael",
   "chiste" => "¿Qué hace un mudo bailando? Una mudanza."
  ],
  [
   "nombre" => "Marco",
   "chiste" => "Buenas, quería una camiseta de un personaje inspirador. ¿Ghandi?. No, mediani."
  ],
  [
   "nombre" => "Antonio",
   "chiste" => "Qué le dice una impresora a otra? Esta hoja es tuya o es impresión mía."
  ],
  [
   "nombre" => "Jessica",
   "chiste" => "¿Por qué la computadora fue a terapia? Tenía muchos bugs"
  ],
  [
   "nombre" => "Esther",
   "chiste" => "¿Qué hace una cebolla en una cita? Llora de emoción."
  ]
 ];

 // Genera el código HTML de la lista.
 $render = "";
 foreach ($lista as $modelo) {
  /* Codifica nombre y color para que cambie los caracteres
   * especiales y el texto no se pueda interpretar como HTML.
   * Esta técnica evita la inyección de código. */
  $nombre = htmlentities($modelo["nombre"]);
  $chiste = htmlentities($modelo["chiste"]);
  $render .=
   "<li class='md-two-line icon'>
      <span class='material-symbols-outlined'>person</span>
      <span class='headline'>{$nombre}</span>
      <span class='supporting'>{$chiste}</span>
    </li>";
 }

 devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {

 devuelveErrorInterno($error);
}
