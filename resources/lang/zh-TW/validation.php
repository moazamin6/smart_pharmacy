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

    'accepted' => '必須接受 :attribute。',
    'active_url' => ':attribute 並非一個有效的網址。',
    'after' => ':attribute 必須要晚於 :date。',
    'after_or_equal' => ':attribute 必須要等於 :date 或更晚',
    'alpha' => ':attribute 只能以字母組成。',
    'alpha_dash' => ':attribute 只能以字母、數字及斜線組成。',
    'alpha_num' => ':attribute 只能以字母及數字組成。',
    'array' => ':attribute 必須為陣列。',
    'before' => ':attribute 必須要早於 :date。',
    'before_or_equal' => ':attribute 必須要等於 :date 或更早。',
    'between' => [
        'numeric' => ':attribute 必須介於 :min 至 :max 之間。',
        'file' => ':attribute 必須介於 :min 至 :max kb 之間。 ',
        'string' => ':attribute 必須介於 :min 至 :max 個字元之間。',
        'array' => ':attribute: 必須有 :min - :max 個元素。',
    ],
    'boolean' => ':attribute 必須為布林值。',
    'confirmed' => ':attribute 確認欄位的輸入不一致。',
    'date' => ':attribute 並非一個有效的日期。',
    'date_format' => ':attribute 不符合 :format 的格式。',
    'different' => ':attribute 和 :other 必須<strong>不相同</strong>。',
    'digits' => ':attribute 必須是 :digits 位數字。',
    'digits_between' => ':attribute 必須介於 :min 至 :max 位數字。',
    'dimensions' => ':attribute 圖片尺寸不正確。',
    'distinct' => ':attribute 已經存在。',
    'email' => ':attribute 必須是正確的<strong>電子郵件位置</strong>。',
    'ends_with' => ':attribute 必須以此值結尾： :values',
    'exists' => '所選擇的 :attribute 選項無效。',
    'file' => ':attribute 必須是<strong>檔案</strong>。',
    'filled' => ':attribute 欄位必須有<strong>值</strong>。',
    'image' => ':attribute 必須是<strong>圖片</strong>。',
    'in' => '所選擇的 :attribute 選項無效。',
    'in_array' => ':attribute 沒有在 :other 中。',
    'integer' => ':attribute 必須是<strong>整數</strong>。',
    'ip' => ':attribute 必須是一個有效的 IP 位址。',
    'json' => ':attribute 必須是正確的 JSON 字串。',
    'max' => [
        'numeric' => ':attribute 不能大於 :max。',
        'file' => ':attribute 不能大於 :max kb。',
        'string' => ':attribute 不能多於 :max 個字元。',
        'array' => ':attribute 最多有 :max 個元素。',
    ],
    'mimes' => ':attribute 必須為 :values 的檔案。',
    'mimetypes' => ':attribute 必須為 :values 的檔案。',
    'min' => [
        'numeric' => ':attribute 不能小於 :min。',
        'file' => ':attribute 不能小於 :min kb。',
        'string' => ':attribute 不能小於 :min 個字元。',
        'array' => ':attribute 至少有 :min 個元素。',
    ],
    'not_in' => '所選擇的 :attribute 選項無效。',
    'numeric' => ':attribute 必須為一個數字。',
    'present' => ':attribute 欄位必須是<strong>現在</strong>。',
    'regex' => ':attribute 格式<strong>不正確</strong>。',
    'required' => ':attribute 欄位是<strong>必要的</strong>。',
    'required_if' => '當 :other 是 :value 時 :attribute 不能留空。',
    'required_unless' => '當 :other 不是 :value 時 :attribute 不能留空。',
    'required_with' => '當 :values 出現時 :attribute 不能留空。',
    'required_with_all' => '當 :values 出現時 :attribute 不能為空。',
    'required_without' => '當 :values 留空時 :attribute field 不能留空。',
    'required_without_all' => '當 :values 都不出現時 :attribute 不能留空。',
    'same' => ':attribute 與 :other 必須相同。',
    'size' => [
        'numeric' => ':attribute 的大小必須是 :size。',
        'file' => ':attribute 的大小必須是 :size kb。',
        'string' => ':attribute 必須是<strong>:size 字元</strong>。',
        'array' => ':attribute 必須是 :size 個元素。',
    ],
    'string' => ':attribute 必須是<strong>字串</strong>。',
    'timezone' => ':attribute 必須是一個正確的時區值。',
    'unique' => ':attribute 已經<strong>被使用</strong>。',
    'uploaded' => ':attribute 上傳<strong>錯誤</strong>。',
    'url' => ':attribute 格式<strong>不正確</strong>。',

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
            'rule-name' => '自訂訊息',
        ],
        'invalid_currency' => ':attribute 的代碼不正確。',
        'invalid_amount' => ':attribute 的數額不正確',
        'invalid_extension' => '文件副名無效。',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
