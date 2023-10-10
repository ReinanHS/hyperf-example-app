<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */
return [
    /*
    |--------------------------------------------------------------------------
    | Linhas de Idioma para Validação
    |--------------------------------------------------------------------------
    |
    | As seguintes linhas de idioma contêm as mensagens de erro padrão usadas pelo
    | classe de validação. Algumas dessas regras têm várias versões, como
    | as regras de tamanho. Sinta-se à vontade para ajustar cada uma dessas mensagens aqui.
    |
    */

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after' => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O campo :attribute só pode conter letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num' => 'O campo :attribute só pode conter letras e números.',
    'array' => 'O campo :attribute deve ser uma matriz.',
    'before' => 'O campo :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'file' => 'O campo :attribute deve ter entre :min e :max kilobytes.',
        'string' => 'O campo :attribute deve ter entre :min e :max caracteres.',
        'array' => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação do campo :attribute não corresponde.',
    'date' => 'O campo :attribute não é uma data válida.',
    'date_format' => 'O campo :attribute não corresponde ao formato :format.',
    'different' => 'O campo :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve ter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'exists' => 'O campo selecionado :attribute é inválido.',
    'file' => 'O campo :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute é obrigatório.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value',
        'file' => 'O campo :attribute deve ser maior que :value kb',
        'string' => 'O campo :attribute deve ser maior que :value caracteres',
        'array' => 'O campo :attribute deve ser maior que :value itens',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value',
        'file' => 'O campo :attribute deve ser maior ou igual a :value kb',
        'string' => 'O campo :attribute deve ser maior ou igual a :value caracteres',
        'array' => 'O campo :attribute deve ser maior ou igual a :value itens',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O campo selecionado :attribute é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve ser um número inteiro.',
    'ip' => 'O campo :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O campo :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O campo :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O campo :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value',
        'file' => 'O campo :attribute deve ser menor que :value kb',
        'string' => 'O campo :attribute deve ser menor que :value caracteres',
        'array' => 'O campo :attribute deve ser menor que :value itens',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value',
        'file' => 'O campo :attribute deve ser menor ou igual a :value kb',
        'string' => 'O campo :attribute deve ser menor ou igual a :value caracteres',
        'array' => 'O campo :attribute deve ser menor ou igual a :value itens',
    ],
    'max' => [
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'file' => 'O campo :attribute não pode ser maior que :max kilobytes.',
        'string' => 'O campo :attribute não pode ser maior que :max caracteres.',
        'array' => 'O campo :attribute não pode ter mais de :max itens.',
    ],
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ter no mínimo :min.',
        'file' => 'O campo :attribute deve ter no mínimo :min kilobytes.',
        'string' => 'O campo :attribute deve ter no mínimo :min caracteres.',
        'array' => 'O campo :attribute deve ter no mínimo :min itens.',
    ],
    'not_in' => 'O campo selecionado :attribute é inválido.',
    'not_regex' => 'O campo :attribute não pode corresponder a uma regra regular específica.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato do campo :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório, a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same' => 'O campo :attribute e :other devem corresponder.',
    'size' => [
        'numeric' => 'O campo :attribute deve ter :size.',
        'file' => 'O campo :attribute deve ter :size kilobytes.',
        'string' => 'O campo :attribute deve ter :size caracteres.',
        'array' => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O campo :attribute deve começar com um dos seguintes valores: :values',
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve ser uma zona válida.',
    'unique' => 'O campo :attribute já foi utilizado.',
    'uploaded' => 'Falha ao fazer o upload do campo :attribute.',
    'url' => 'O formato do campo :attribute é inválido.',
    'uuid' => 'O campo :attribute é um UUID inválido.',
    'max_if' => [
        'numeric' => 'O campo :attribute não pode ser maior que :max quando :other é :value.',
        'file' => 'O campo :attribute não pode ser maior que :max kilobytes quando :other é :value.',
        'string' => 'O campo :attribute não pode ser maior que :max caracteres quando :other é :value.',
        'array' => 'O campo :attribute não pode ter mais de :max itens quando :other é :value.',
    ],
    'min_if' => [
        'numeric' => 'O campo :attribute deve ter no mínimo :min quando :other é :value.',
        'file' => 'O campo :attribute deve ter no mínimo :min kilobytes quando :other é :value.',
        'string' => 'O campo :attribute deve ter no mínimo :min caracteres quando :other é :value.',
        'array' => 'O campo :attribute deve ter no mínimo :min itens quando :other é :value.',
    ],
    'between_if' => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max quando :other é :value.',
        'file' => 'O campo :attribute deve ter entre :min e :max kilobytes quando :other é :value.',
        'string' => 'O campo :attribute deve ter entre :min e :max caracteres quando :other é :value.',
        'array' => 'O campo :attribute deve ter entre :min e :max itens quando :other é :value.',
    ],
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensagem personalizada',
        ],
    ],
    'attributes' => [],
    'phone_number' => 'O campo :attribute deve ser um número de telefone válido',
    'telephone_number' => 'O campo :attribute deve ser um número de telefone válido',
    'chinese_word' => 'O campo :attribute deve conter caracteres válidos (caracteres chineses/ingleses, números, sublinhado)',
    'sequential_array' => 'O campo :attribute deve ser um array sequencial',
];
