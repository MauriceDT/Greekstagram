<?php

return [
    'table_name' => 'users',

    'drop_scheme' => "DROP TABLE IF EXISTS `users`",

    'scheme' => "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `username` varchar(80) NOT NULL UNIQUE,
        `email` varchar(255) NOT NULL UNIQUE,
        `password` varchar(255) NOT NULL,
        `role`int(11) NOT NULL,
        `follows_god` varchar(80) DEFAULT 'Chaos',
        `created` timestamp,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;",

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'username'      => 'MauriceDT',
                'follows_god'   => 'Zeus',
                'email'         => 'maurice@codegorilla.nl',
                'password'      => password_hash('Gorilla1!', PASSWORD_DEFAULT),
                'role'          => 1,
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 1,
            ],
            [
                'username'      => 'Kevin',
                'follows_god'   => 'Hera',
                'email'         => 'kevin@kevin.nl',
                'password'      => password_hash('kevin', PASSWORD_DEFAULT),
                'role'          => 1,
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 1,
            ]
        ),
    ],
];
