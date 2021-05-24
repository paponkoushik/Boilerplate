<?php

return [
    'user' => [
        ['name' => 'gender', 'value' => '', 'context' => 'user'],
        ['name' => 'contact', 'value' => '', 'context' => 'user'],
        ['name' => 'address', 'value' => '', 'context' => 'user'],
        ['name' => 'date_of_birth', 'value' => '', 'context' => 'user'],
    ],
    'app' => [
        ['name' => 'company_name', 'value' => env('APP_NAME', 'Readykit'), 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'company_logo', 'value' => '/images/logo.png', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'company_icon', 'value' => '/images/icon.png', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'company_banner', 'value' => '/images/readykit-banner.png', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'language', 'value' => 'en', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'layout', 'value' => 'ltr', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'date_format', 'value' => 'd-m-Y', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'time_format', 'value' => 'h', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'time_zone', 'value' => 'Asia/Dhaka', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'currency_symbol', 'value' => '$', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'decimal_separator', 'value' => '.', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'thousand_separator', 'value' => ',', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'number_of_decimal', 'value' => '2', 'context' => 'app', 'autoload' => 0, 'public' => 1],
        ['name' => 'currency_position', 'value' => 'prefix_with_space', 'context' => 'app', 'autoload' => 0, 'public' => 1],
    ],
    'brand' => [
        ['name' => 'avatar', 'value' => null, 'context' => 'brand'],
        ['name' => 'address', 'value' => '', 'context' => 'brand'],
    ],
    'context' => [
        'app',
        'campaign',
        'list',
        'user',
        'segment',
        'subscriber',
        'brand',
        'role',
        'template'
    ],
    'time_format' => [
        'h',
        'H'
    ],
    'layouts' => [
        'ltr',
        'rtl'
    ],
    'currency_position' => [
        'prefix_only',
        'prefix_with_space',
        'suffix_only',
        'suffix_with_space'
    ],
    'amazon_ses' => [
        'hostname' => '',
        'access_key_id' => '',
        'secret_access_key' => '',
    ],
    'mailgun' => [
        'domain_name' => '',
        'api_key' => '',
        'webhook_key' => ''
    ],
    'mail_configs' => [
        'context' => '',
        'from_email' => '',
        'from_name' => ''
    ],
    'date_format' => [
        'd-m-Y',
        'm-d-Y',
        'Y-m-d',
        'm/d/Y',
        'd/m/Y',
        'Y/m/d',
        'm.d.Y',
        'd.m.Y',
        'Y.m.d'
    ],

    'decimal_separator' => [
      '.',
      ','
    ],

    'thousand_separator' => [
        '.',
        ',',
        ' '
    ],
    'number_of_decimal' => [
        '0',
        '2'
    ],
    'supported_mail_services' => [
        'amazon_ses' => 'Amazon SES',
        'mailgun' => 'Mailgun'
    ],
    'corn-job-context' => 'corn-job',
    'brand_default_prefix' => [
        'amazon_ses' => 'brand_default_amazon_ses',
        'mailgun' => 'brand_default_mailgun',
        'privacy' => 'brand_default_privacy',
        'notification' => 'brand_default_notification',
    ],

];
