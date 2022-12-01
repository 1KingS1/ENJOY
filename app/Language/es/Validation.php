<?php

return [
    "cpf" => [
        "required" => "Campo CPF obligatorio",
        "regex_match" => "El campo CPF debe estar en el valor predeterminado 123.456.789-12"
    ],
    "name" => [
        "required" => "Campo de NOMBRE requerido",
        "alpha_space" => "El campo NOMBRE tiene caracteres no válidos"
    ],
    "end" => [
        "alpha_numeric_space" => "El campo DIRECCIÓN tiene caracteres no válidos",
        "max_length" => "El campo DIRECCIÓN ha excedido los caracteres máximos"
    ],
    "tel" => [
        "regex_match" => "El campo TELÉFONO debe estar en el patrón (12)12345-6789"
    ]
];