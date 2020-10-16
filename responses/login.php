<?php

// Cabelho do JSON
header('Content-Type: application/json');

// Verifica se foi passado o Post corretamente
if(isset($_POST)) {
    $response = array();
    /*$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => json_encode($_POST),
        'header'=> "Content-Type: application/json\r\nAccept: application/json\r\n"
        )
    );
    
    $context  = stream_context_create($options);
    $result = file_get_contents("http://177.125.219.2:8077/api/auth-integracao.axd", false, $context);
    $response = json_decode($result);*/

    /*$url = "http://177.125.219.2:8077/api/auth-integracao.axd";    
    $content = json_encode($_POST);

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

    $json_response = curl_exec($curl);

    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if($status != 201) {
        die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
    }

    curl_close($curl);

    exit($json_response);
    //$response = json_decode($json_response, true);*/


    exit(json_encode(array(
        "success" => array(
            "message" => "Login efetuado com sucesso.",
            "value" => $response
        )
    )));
} else {
    exit(json_encode(array(
        "erro" => array(
            "message" => "Não foi possível fazer o login.",
            "value" => ""
        )
    )));
}

