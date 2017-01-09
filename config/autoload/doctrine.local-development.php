<?php
return [
    'doctrine' => [
        'connection' => [
            // default connection name
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\PDOPgSql\Driver::class,
                'params' => [
                    'host'     => 'postgres',
                    'port'     => '5432',
                    'user'     => 'mvlabs',
                    'password' => 'mvlabs',
                    'dbname'   => 'mvlabs',
                ]
            ]
        ]
    ],
];
