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

    'accepted'   => ':attributeを承認してください。',
    'active_url' => ':attributeは、有効なURLではありません。',
    'after'      => ':attributeには、:date以降の日付を指定してください。',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'      => ':attributeには、アルファベッドのみ使用できます。',
    'alpha_dash' => ":attributeには、英数字('A-Z','a-z','0-9')とハイフンと下線('-','_')が使用できます。",
    'alpha_num'  => ":attributeには、英数字('A-Z','a-z','0-9')が使用できます。",
    'array'      => ':attributeには、配列を指定してください。',
    'before'     => ':attributeには、:date以前の日付を指定してください。',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'    => [
        'numeric' => ':attributeには、:minから、:maxまでの数字を指定してください。',
        'file'    => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'string'  => ':attributeは、:min文字から:max文字にしてください。',
        'array'   => ':attributeの項目は、:min個から:max個にしてください。',
    ],
    'boolean'              => ":attributeには、'true'か'false'を指定してください。",
    'confirmed'            => ':attributeと:attribute確認が一致しません。',
    'date'                 => ':attributeは、正しい日付ではありません。',
    'date_format'          => ":attributeの形式は、':format'と合いません。",
    'different'            => ':attributeと:otherには、異なるものを指定してください。',
    'digits'               => ':attributeは、:digits桁にしてください。',
    'digits_between'       => ':attributeは、:min桁から:max桁にしてください。',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':attributeは、有効なメールアドレス形式で指定してください。',
    'exists'               => '選択された:attributeは、有効ではありません。',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => ':attributeは必須です。',
    'image'                => ':attributeには、画像を指定してください。',
    'in'                   => '選択された:attributeは、有効ではありません。',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':attributeには、整数を指定してください。',
    'ip'                   => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => ':attributeには、有効なJSON文字列を指定してください。',
    'max'                  => [
        'numeric' => ':attributeには、:max以下の数字を指定してください。',
        'file'    => ':attributeには、:max KB以下のファイルを指定してください。',
        'string'  => ':attributeは、:max文字以下にしてください。',
        'array'   => ':attributeの項目は、:max個以下にしてください。',
    ],
    'mimes'                => ':attributeには、:valuesタイプのファイルを指定してください。',
    'mimetypes'            => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attributeには、:min以上の数字を指定してください。',
        'file'    => ':attributeには、:min KB以上のファイルを指定してください。',
        'string'  => ':attributeは、:min文字以上にしてください。',
        'array'   => ':attributeの項目は、:max個以上にしてください。',
    ],
    'not_in'               => '選択された:attributeは、有効ではありません。',
    'numeric'              => ':attributeには、数字を指定してください。',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':attributeには、有効な正規表現を指定してください。',
    'required'             => ':attributeは、必ず指定してください。',
    'required_if'          => ':otherが:valueの場合、:attributeを指定してください。',
    'required_unless'      => ':otherが:value以外の場合、:attributeを指定してください。',
    'required_with'        => ':valuesが指定されている場合、:attributeも指定してください。',
    'required_with_all'    => ':valuesが全て指定されている場合、:attributeも指定してください。',
    'required_without'     => ':valuesが指定されていない場合、:attributeを指定してください。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeを指定してください。',
    'same'                 => ':attributeと:otherが一致しません。',
    'size'                 => [
        'numeric' => ':attributeには、:sizeを指定してください。',
        'file'    => ':attributeには、:size KBのファイルを指定してください。',
        'string'  => ':attributeは、:size文字にしてください。',
        'array'   => ':attributeの項目は、:size個にしてください。',
    ],
    'string'   => ':attributeには、文字を指定してください。',
    'timezone' => ':attributeには、有効なタイムゾーンを指定してください。',
    'unique'   => '指定の:attributeは既に使用されています。',
    'uploaded' => 'The :attribute failed to upload.',
    'url'      => ':attributeは、有効なURL形式で指定してください。',

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

    'attributes' => [

        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => '連関したロール',
                    'dependencies'     => '従属',
                    'display_name'     => '表示名前',
                    'group'            => 'グループ',
                    'group_sort'       => 'グループソート',

                    'groups' => [
                        'name' => 'グループ名前',
                    ],

                    'name' => '名前',
                    'system' => 'システム?',
                ],

                'roles' => [
                    'associated_permissions' => '連関した権限',
                    'name' => '名前',
                    'sort' => 'ソート',
                ],

                'users' => [
                    'active'                  => 'アクテイブ',
                    'associated_roles'        => '連関したロール',
                    'confirmed'               => '確認',
                    'email'                   => 'イーメール',
                    'name'                    => '名前',
                    'first_name'              => '姓',
                    'last_name'               => '名前',
                    'other_permissions'       => 'その他権限',
                    'password'                => 'パスワード',
                    'password_confirmation'   => 'パスワード（確認）',
                    'send_confirmation_email' => '確認イーメール送信',
                    'timezone'                => 'Timezone',
                    'language'                => '言語',
                ],
            ],
        ],

        'frontend' => [
            'avatar'                    => 'トップ画',
            'email'                     => 'メールアドレス',
            'first_name'                => '姓',
            'last_name'                 => '名前',
            'name'                      => 'ユーザ名',
            'password'                  => 'パスワード',
            'password_confirmation'     => 'パスワード（確認）',
            'phone'                     => 'Phone',
            'message'                   => 'Message',
            'old_password'              => '旧パスワード',
            'new_password'              => '新パスワード',
            'new_password_confirmation' => '新パスワード（確認）',
            'timezone'                  => 'Timezone',
            'language'                  => '言語',
            'profession'                => '職業',
            'country'                   => '民籍',
            'self_introduction'         => '概要',
        ],
    ],

];
