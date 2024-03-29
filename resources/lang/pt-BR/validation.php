<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'O :attribute deve ser aceito.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O :attribute deve conter somente letras.',
    'alpha_dash' => 'O :attribute deve conter letras, números e traços.',
    'alpha_num' => 'O :attribute deve conter somente letras e números.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'O :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file' => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O :attribute deve estar entre :min e :max caracteres.',
        'array' => 'O :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação de :attribute não confere.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O campo :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não confere com o formato :format.',
    'different' => 'O :attribute e :other devem ser <strong>diferentes</strong>.',
    'digits' => 'O :attribute deve ter :digits dígitos.',
    'digits_between' => 'O :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O :attribute não tem dimensões válidas.',
    'distinct' => 'O :attribute campo contém um valor duplicado.',
    'email' => 'O :attribute deve ser um endereço de e-mail <strong>válido</strong>.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values',
    'exists' => 'O :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um <strong>arquivo</strong>.',
    'filled' => 'O campo :attribute deve ter um <strong>valor</strong>.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O arquivo :attribute deve ser maior que :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior que :value caracteres.',
        'array' => 'O campo :attribute deve ter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'file' => 'O arquivo :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior ou igual a :value caracteres.',
        'array' => 'O campo :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O :attribute deve ser uma <strong>imagem</strong>.',
    'in' => 'O :attribute é inválido.',
    'in_array' => 'O :attribute campo não existe em :other.',
    'integer' => 'O :attribute deve ser um <strong>inteiro</strong>.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O campo :attribute deve ter um endereço IPv4 válido.',
    'ipv6' => 'O :attribute deve ter um IPv6 válido.',
    'json' => 'O :attribute deve ser um JSON válido.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file' => 'O :attribute deve ter menos de :value kilobytes.',
        'string' => 'O :attribute deve ser menor que :value characters.',
        'array' => 'O :attribute deve ter menos de :value items.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser menor ou igual a :value.',
        'file' => 'O :attribute deve ser menor ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser menor ou igual a :value caracteres.',
        'array' => 'O :attribute não deve ter mais de :value items.',
    ],
    'max' => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'file' => 'O :attribute não deve ter mais que :max kilobytes.',
        'string' => 'O :attribute não deve ter mais que :max caracteres.',
        'array' => 'O :attribute não pode ter mais que :max itens.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser no mínimo :min.',
        'file' => 'O :attribute deve ter no mínimo :min kilobytes.',
        'string' => 'O :attribute deve ter no mínimo :min caracteres.',
        'array' => 'O :attribute deve ter no mínimo :min itens.',
    ],
    'multiple_of' => 'O :attribute deve ser um múltiplo de :value.',
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O formato do :attribute é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve estar <strong>presente</strong>.',
    'regex' => 'O formato de :attribute é <strong>inválido</strong>.',
    'required' => 'O campo :attribute é <strong>obrigatório</strong>.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O :attribute é necessário a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum destes estão presentes: :values.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a não ser que :other esteja em :values.',
    'same' => 'O :attribute e :other devem ser iguais.',
    'size' => [
        'numeric' => 'O :attribute deve ser :size.',
        'file' => 'O :attribute deve ter :size kilobytes.',
        'string' => 'O :attribute deve conter <strong>:size</strong> caracteres.',
        'array' => 'O :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes: :values.',
    'string' => 'O :attribute deve ser uma <strong>string</strong>.',
    'timezone' => 'O :attribute deve ser uma timezone válida.',
    'unique' => 'O :attribute já foi <strong>usado</strong>.',
    'uploaded' => 'O :attribute <strong>falhou</strong> no upload.',
    'url' => 'O formato de :attribute é <strong>inválido</strong>.',
    'uuid' => 'O :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'invalid_currency' => 'O código :attribute é inválido.',
        'invalid_amount' => 'O :attribute é inválido.',
        'invalid_extension' => 'A extensão do arquivo é inválida.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
