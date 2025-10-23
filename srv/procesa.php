<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

// $saludo = recuperaTexto("saludo");
$nombre = recuperaTexto("nombre");
switch ($nombre) {
    case "ang":
        $resultado = "Me encantan los mensajes de voz.\nYo los detesto.\nSí, esos también estan chidos.";
        break;
    case "miss":
        $resultado = "¿Qué hace un mudo bailando? Una mudanza.";
        break;
    case "mar":
        $resultado = "Qué le dice una impresora a otra? Esta hoja es tuya o es impresión mía.";
        break;
    case "ant":
        $resultado = "Buenas, quería una camiseta de un personaje inspirador.\n¿Ghandi?.\nNo, mediani.";
        break;
    case "jess":
        $resultado = "¿Por qué la computadora fue a terapia? Tenía muchos bugs";
        break;
    case "est":
        $resultado = "¿Qué hace una cebolla en una cita? Llora de emoción.";
        break;                       
}

devuelveJson($resultado);
