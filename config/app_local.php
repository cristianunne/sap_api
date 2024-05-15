<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     *   The salt value is also used as the encryption key.
     *   You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '4f1827321b8e7a47c0f5ad17506b9f4291b90f8daa1ee0b23cf673701b9678df'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Sqlserver',
            'persistent' => false,
            'host' => 'localhost',
            'port' => 1433,
            'username' => 'sa',
            'password' => 'Ubub2022_',
            'database' => 'PRD',
            'schema' => 'prd',
            'prefix' => '',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false
        ],

        /*'Datasources' => [
            'default' => [
                'className' => 'Cake\Database\Connection',
                'driver' => 'Cake\Database\Driver\Sqlserver',
                'persistent' => false,
                'host' => '192.168.30.5',
                'port' => 50548,
                'username' => 'cristian',
                'password' => 'cristian2023',
                'database' => 'PRD',
                'schema' => 'prd',
                'encoding' => PDO::SQLSRV_ENCODING_UTF8,
                'prefix' => '',
                'flags' => [],
                'cacheMetadata' => true,
                'log' => false
            ],*/

        /*
         * The test connection is used during the test suite.
         */
        'test' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'test_myapp',
            //'schema' => 'myapp',
            'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tmp/tests.sqlite'),
        ],
    ],

    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],

    'Cors' => [
        'AllowOrigin' => ['*'],
    ],
];
