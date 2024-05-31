<?php
require "guzzle/vendor/autoload.php"; // libreria para facilidar las peticiones web (mantén o cambia por la de tu preferencia)
$client = new \GuzzleHttp\Client();

$apiToken = 'asdf0987asdf098asdf0987asdf0987asdf0987a908'; // tu token creado
$idInstance = 11111; // tu id de la instancia creada
$rutaImagen = 'https://midominio.com/admin/public/media/'; // ruta de donde quieres traer una imagen



//función donde estamos preparando un envío de mensajes
function enviarMensajeWhatsapp($datosMensaje, $apiToken, $client, $idInstance)
{
    $response = $client->request('POST', 'https://waapi.app/api/v1/instances/' . $idInstance . '/client/action/send-message', [
        'headers' => [
            'Authorization' => 'Bearer ' . $apiToken,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'chatId' => $datosMensaje['codigo_area'] . $datosMensaje['numero'] . '@c.us',
            'message' => $datosMensaje['mensaje'],
        ]
    ]);

    $responseBody = json_decode($response->getBody(), true);

    $estado = 0;

    //si la respuesta es exitosa, cambiamos a true
    if ($responseBody['data']['status'] == 'success') {
        $estado = 1;
    }

    //verdadero
    return $estado;
}




//función donde estamos enviando un mensaje de whatsapp con imagen
function enviarMensajeWhatsappImagen($datosMensaje, $apiToken, $client, $idInstance, $rutaImagen)
{
    $response = $client->request('POST', 'https://waapi.app/api/v1/instances/' . $idInstance . '/client/action/send-media', [
        'headers' => [
            'Authorization' => 'Bearer ' . $apiToken,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'chatId' => $datosMensaje['codigo_area'] . $datosMensaje['numero'] . '@c.us',
            'mediaUrl' => $rutaImagen . $datosMensaje['imagen'],
            'mediaCaption' => $datosMensaje['mensaje'],
            'mediaName' => $datosMensaje['imagen']
        ]
    ]);

    $responseBody = json_decode($response->getBody(), true);
    $estado = 0;

     //si la respuesta es exitosa, cambiamos a true
     if ($responseBody['data']['status'] == 'success') {
        $estado = 1;
    }

    //verdadero
    return $estado;
}
