<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'すべて',
        'yes' => 'OK',
        'no' => 'No',
        'custom' => 'カスタム',
        'actions' => '各種変更',
        'active' => 'アクテイブ',
        'buttons' => [
            'save' => '保存',
            'update' => '更新',
        ],
        'hide' => '非表示',
        'inactive' => 'アクテイブ中',
        'none' => 'なし',
        'show' => '表示',
        'toggle_navigation' => 'ナビゲーション切り替え',
        'copyright' => 'character',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'ロール作成',
                'edit' => 'ロール編集',
                'management' => 'ロール管理',
                'label' =>  'ロール',
                'all' => '全ロール',

                'table' => [
                    'number_of_users' => 'ユーザ数',
                    'permissions' => '権限',
                    'role' => 'ロール',
                    'sort' => 'ソート',
                    'total' => 'ロール合計|ロール合計',
                ],
            ],
            'permissions' => [
                'all' => '全権限',
                'active' => '権限リスト',
                'create' => '権限作成',
                'deactivated' => '非アクティブ権限',
                'deleted' => '削除された権限',
                'edit' => '権限編集',
                'management' => '権限管理',
                'label' => 'ラベル',
                'list' => '権限リスト',

                'table' => [
                    'created' => '作成済',
                    'id' => 'ID',
                    'last_updated' => '最終更新日',
                    'permission' => '権限',
                    'display_name' => '表示名前',
                    'sort' => 'ソート',
                    'status' => '状態',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => '全権限',
                ],
            ],
            'users' => [
                'active' => 'アクテイブユーザ',
                'all_permissions' => '全権限',
                'change_password' => 'パスワード変更',
                'change_password_for' => ' :userのパスワードを変更',
                'create' => 'ユーザ作成',
                'deactivated' => '非アクティブユーザ',
                'deleted' => '削除されたユーザ',
                'edit' => 'ユーザ編集',
                'management' => 'ユーザ管理',
                'no_permissions' => '権限存在しない',
                'no_roles' => '設定するロールが存在なし',
                'permissions' => '権限',

                'table' => [
                    'confirmed' => '確認済',
                    'created' => '作成済',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => '最終更新日',
                    'name' => '名前',
                    'first_name' => '姓',
                    'last_name' => '名前',
                    'no_deactivated' => '非アクティブユーザが存在しない',
                    'no_deleted' => '削除されたユーザが存在しない',
                    'permissions' => '権限',
                    'abilities' => 'Abilities',
                    'roles' => 'ロール',
                    'social' => 'SNS',
                    'total' => 'ユーザ合計|ユーザ合計',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => '概要',
                        'history' => '履歴',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => '確認済',
                            'created_at' => '作成日',
                            'deleted_at' => '削除日',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => '最終更新日',
                            'name' => '名前',
                            'first_name' => '姓',
                            'last_name' => '名前',
                            'status' => 'ステータス',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'ユーザ表示',
            ],
            'blogs' => [
                'all' => '全ブログ',
                'active' => 'ブログリスト',
                'create' => 'ブログ作成',
                'deactivated' => '非アクティブブログ',
                'deleted' => '削除されたブログ',
                'edit' => 'ブログ編集',
                'management' => 'ブログ管理',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'title' => 'Blog Title',
                    'category' => 'Blog Categories',
                    'published' => 'Publish Date & Time',
                    'featured_image' => 'Featured Image',
                    'content' => 'Content',
                    'tags' => 'Tags',
                    'meta_title' => 'Meta Title',
                    'slug' => 'Slug',
                    'cannonical_link' => 'Cannonical Link',
                    'meta_keywords' => 'Meta Keywords',
                    'meta_description' => 'Meta Description',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog total|blogs total',
                ],
            ],
            'blog-category' => [
                'all' => '全ブログカテゴリー',
                'active' => 'ブログ カテゴリーリスト',
                'create' => 'ブログカテゴリー作成',
                'deactivated' => '非アクティブブログカテゴリー',
                'deleted' => '削除されたブログ カテゴリー',
                'edit' => 'ブログカテゴリー編集',
                'management' => 'ブログカテゴリー',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Category Name',
                    'category' => 'blog Categories',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog cateories total|blog categories total',
                ],
            ],
            'blog-tag' => [
                'all' => '全ブログカテゴリー',
                'active' => 'ブログ タッグリスト',
                'create' => 'ブログタッグ作成',
                'deactivated' => '非アクティブブログタッグ',
                'deleted' => '削除されたブログタッグ',
                'edit' => 'ブログタッグ編集',
                'management' => 'ブログタッグ',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Tag Name',
                    'tag' => 'ブログ Tag',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => '全ブログ',
                ],
            ],
            'pages' => [
                'all' => 'All Pages',
                'active' => 'Page List',
                'create' => 'Create Page',
                'deactivated' => 'Deactivated Page',
                'deleted' => 'Deleted Page',
                'edit' => 'Edit Page',
                'management' => 'Pages Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'page_slug' => 'Page Slug',
                    'name' => 'Page Name',
                    'description' => 'Description',
                    'cannonical_link' => 'Cannonical Link',
                    'seo_title' => 'SEO Title',
                    'seo_keyword' => 'SEO Keyword',
                    'seo_description' => 'SEO Description',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'pages total|pages total',
                ],
            ],
            'faqs' => [
                'all' => 'All Faqs',
                'active' => 'Faq List',
                'create' => 'Create Faq',
                'deactivated' => 'Deactivated Faq',
                'deleted' => 'Deleted Faq',
                'edit' => 'Edit Faq',
                'management' => 'Faq Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'question' => 'Question',
                    'answer' => 'Answer',
                    'status' => 'Status',
                    'createdat' => 'Created At',
                    'total' => 'faqs total|faqs total',
                ],
            ],
            'email-templates' => [
                'all' => 'All Email Templates',
                'active' => 'Email Templates List',
                'create' => 'Create Email Template',
                'deactivated' => 'Deactivated Email Template',
                'deleted' => 'Deleted Email Template',
                'edit' => 'Edit Email Template',
                'management' => 'Email Template Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'slug' => 'Slug',
                    'title' => 'Email Template Title',
                    'content' => 'Content',
                    'status' => 'Status',
                    'createdat' => 'Created At',
                    'createdby' => 'Created By',
                    'total' => 'email templates total|email templates total',
                ],
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => 'ログイン',
            'login_button' => 'ログイン',
            'login_with' => ' :social_mediaでログイン',
            'register_box_title' => '登録',
            'register_button' => '登録',
            'remember_me' => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'お問い合わせ',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'expired_password_box_title' => 'パスワードの期限が切れてしまいました。',
            'forgot_password' => 'パスワード忘れ',
            'reset_password_box_title' => 'パスワードリセット',
            'reset_password_button' => 'パスワードリセット',
            'update_password_button' => 'パスワード更新',
            'send_password_reset_link_button' => 'パスワードリセットリンクを送る',
        ],

        'macros' => [
            'country' => [
                'alpha' => 'Country Alpha Codes',
                'alpha2' => 'Country Alpha 2 Codes',
                'alpha3' => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us' => [
                    'us' => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed' => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => 'Timezone',
        ],

        'user' => [
            'passwords' => [
                'change' => 'パスワード変更',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => '作成日',
                'edit_information' => '情報編集',
                'email' => 'E-mail',
                'last_updated' => '最終更新日',
                'name' => '名前',
                'first_name' => '姓',
                'last_name' => '名前',
                'update_information' => '情報更新',
                'professional'  => '職業',
                'country'   =>  '民籍',
                'introduction' => '概要',
            ],
        ],

    ],
];
