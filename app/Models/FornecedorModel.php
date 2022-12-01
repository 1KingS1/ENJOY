<?php

namespace APP\Models;

use CodeIgniter\Model;

class FornecedorModel extends Model
{
    protected $table = 'FORNECEDOR';
    protected $primaryKey = 'ID_FORNECEDOR';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['NOME_FORNECEDOR', 'CNPJ', 'ENDERECO', 'CEP', 'TELEFONE'];
    protected $returnType = 'object';

    protected $validationRules = [
        "NOME_FORNECEDOR" => "required|regex_match[/^([ \u{61}-\u{7A}\u{E0}-\u{F6}\u{F9}-\u{FC}\u{169}\u{27}\u{2D}])*$/ui]",
        "CNPJ" => "required|regex_match[/^[\d.\/-]*$/]",
        "ENDERECO" => "required|regex_match[/^([\d,. \u{61}-\u{7A}\u{E0}-\u{F6}\u{F9}-\u{FC}\u{169}\u{27}\u{2D}])*$/ui]|max_length[50]",
        "CEP" => "required|regex_match[/^[\d-]*$/]|max_length[10]",
        "TELEFONE" => "required|regex_match[/^[\(\d\)-]*$/]"
    ];

    protected $validationMessages = [
        "NOME_FORNECEDOR" => [
            "required" => "Campo NOME requerido",
            "regex_match" => "Campo NOME possui caracteres inválidos"
        ],

        "CNPJ" => [
            "required" => "Campo CNPJ requerido",
            "integer" => "Campo CNPJ aceita somente números inteiros",
            "regex_match" => "Campo CNPJ deve ser no padrão 00.000.000/0000-00"
        ],

        "ENDERECO" => [
            "regex_match" => "Campo ENDEREÇO tem caracteres inválidos",
            "max_length" => "Campo ENDEREÇO excedeu o máximo de caracteres"
        ],

        "CEP" => [
            "required" => "Campo CEP requerido",
            "regex_match" => "Campo CEP possui caracteres inválidos",
            "max_length" => "Campo CEP excedeu o limite de caracteres"
        ],

        "TELEFONE" => [
            "required" => "Campo TELEFONE requerido",
            "regex_match" => "Campo TELEFONE deve ser no padrão (12)12345-6789"
        ]

    ];
}
