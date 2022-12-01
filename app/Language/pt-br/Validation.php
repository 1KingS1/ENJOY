<?php

return [
    "cpf" => [
        "required" => "Campo CPF requerido",
        "regex_match" => "Campo CPF deve ser no padrão 123.456.789-12"
    ],
    "name" => [
        "required" => "Campo NOME requerido",
        "alpha_space" => "Campo NOME tem caracteres inválidos"
    ],
    "end" => [
        "alpha_numeric_space" => "Campo ENDEREÇO tem caracteres inválidos",
        "max_length" => "Campo ENDEREÇO excedeu o máximo de caracteres"
    ],
    "tel" => [
        "regex_match" => "Campo TELEFONE deve ser no padrão (12)12345-6789"
    ]
];