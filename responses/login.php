<?php

// Cabelho do JSON
header('Content-Type: application/json');

$token = "AAA";

exit(json_encode(array(
    "success" => array(
        "message" => "Login efetuado com sucesso.",
        "return" => $token
    )
)));

exit(json_encode(array(
    "error" => array(
        "message" => "Não foi possível fazer o login.",
        "return" => $_POST
    )
)));