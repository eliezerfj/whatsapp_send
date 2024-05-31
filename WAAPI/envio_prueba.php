<?php

/**************************************************************
 * Esta es una prueba realizada con el servicio de WAAPI       *
 *                     https://waapi.app/                      *
 *                                                             *
 * Para utilizar este servicio, puedes crear una cuenta de     *
 * usuario en la dirección anterior y suscribirte a uno de los *
 * planes disponibles.                                         *
 *                                                             *
 * https://www.linkedin.com/in/ee-figueroa/                    *
 * Eliezer Figueroa                                            *
 * Mayo 2024                                                   *
 **************************************************************/

//llamada de las funciones preprogramadas
require_once "recursos/w_funciones.php";

$datosMensaje = array(
        'codigo_area' => '502', // codigo de area del pais sin simbolos
        'numero' => '22113344', // numero de telefono en formato para whatsapp
        'imagen' => 'IMG202405081813352988.png',
        'mensaje' => '
                Mensaje de prueba con funciones listas
                Esta es una demostración.

                Datos: 123123.
                Contenido: ASDFF.
                '
);

//ejecuta la función de envío de mensaje normal de texto
        //echo enviarMensajeWhatsapp($datosMensaje, $apiToken, $client, $idInstance);

//ejecuta la función de envío juntamente con una imagen
        //echo enviarMensajeWhatsappImagen($datosMensaje, $apiToken, $client, $idInstance, $rutaImagen);
