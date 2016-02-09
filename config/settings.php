<?php

require __DIR__ . '/../env.php';

return [
    'settings' => [
        'db' => [
            // Illuminate/database configuration
            'driver'    => $env['db_driver'],
            'host'      => $env['db_host'],
            'database'  => $env['db_database'],
            'username'  => $env['db_username'],
            'password'  => $env['db_password'],
            'charset'   => $env['db_charset'],
            'collation' => $env['db_collation'],
            'prefix'    => '',
        ],
        'view' => [
            'template_path' => __DIR__ . '/../app/templates',
            'twig' => [
                'cache' => __DIR__ . '/../cache/twig',
                'debug' => true,
            ],
        ],
    ],
    'paths' => [
        // Phinx migrations path
        'migrations' => __DIR__ . '/../database/migrations'
    ],
    'environments' => [
        // Phinx configuration
        'default_migration_table' => 'phinxlog',
        'default_database' => 'development',
        'development' => [
            'adapter'   => $env['db_driver'],
            'host'      => $env['db_host'],
            'name'      => $env['db_database'],
            'user'      => $env['db_username'],
            'pass'      => $env['db_password'],
            'charset'   => $env['db_charset'],
            'collation' => $env['db_collation'],
        ],
    ],
];