<?php
return [
    'backend' => [
        'frontName' => 'admin_1j8hs5'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'oOvRJBiqHLUQ7aGtPy2KNkNkbG3CvwmB'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'a88_'
            ],
            'page_cache' => [
                'id_prefix' => 'a88_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '717057112a671d6b9353f3471821855d'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'local',
                'username' => 'root',
                'password' => 'Codilar1234',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'sanjay.local'
    ],
    'install' => [
        'date' => 'Tue, 01 Aug 2023 20:06:43 +0000'
    ]
];
