<?php

/**
 * Desde PHP 8.1
 * Los Fibers representan funciones de interrupción
 */

function consumeAPI($url, $data, $metodo = 'GET')
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $metodo,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
        ],
    ]);

    $response = curl_exec($curl);
    // $err = curl_error($curl);

    curl_close($curl);

    return $response;
}

$fiber = new Fiber(function (): void {
    $url1 = "http://localhost/blog-yii-2-bootstrap-4/web/apirest/articulos/4";
    $result1 = consumeAPI($url1, null);
    $param = Fiber::suspend('Se suspende');
    echo $param . PHP_EOL;
    var_dump(json_decode($result1));
});

$value = $fiber->start();
echo 'Se consume la api pero no se muestra el resultado' . PHP_EOL;

$url2 = "http://localhost/blog-yii-2-bootstrap-4/web/apirest/articulos/13";
$result2 = consumeAPI($url2, null);
echo "Se consume la api de la segunda url" . PHP_EOL;
var_dump(json_decode($result2));

$fiber->resume('se muestra el resultado del consumo de la primera url');
