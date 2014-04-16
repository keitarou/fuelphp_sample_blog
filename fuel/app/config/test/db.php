<?php
/**
 * The test database settings. These get merged with the global settings.
 *
 * This environment is primarily used by unit tests, to run on a controlled environment.
 */

return array(
    'default' => array(
        'type' => 'mysqli',
        'connection' => array(
            'hostname' => 'localhost',
            'port' => '3306',
            'database' => 'fuel_db',
            'username' => 'root',
            'password' => 'error_password',
            'persistent' => false,
            'compress' => false,
        ),
        'identifier' => '`',
        'table_prefix' => '',
        'charset' => 'utf8',
        'enable_cache' => true,
        'profiling' => false,
        'readonly' => false,
    ),
);
