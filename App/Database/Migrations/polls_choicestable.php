<?php

return [
    // Name of the scheme
    'table_name' => 'polls_choices',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `polls_choices`",

    // The scheme
    'scheme' => "CREATE TABLE `polls_choices` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `poll` int,
        `name` varchar(255),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;",
    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'poll'      => 1,
                'name'      => "Zeus"
            ],
            [
                'poll'      => 1,
                'name'      => "Hades"
            ],
            [
                'poll'      => 1,
                'name'      => "Hypnos"
            ],
            [
                'poll'      => 2,
                'name'      => "Chronos"
            ],
            [
                'poll'      => 2,
                'name'      => "Demeter"
            ],
            [
                'poll'      => 2,
                'name'      => "Poseidon"
            ],
        ),
    ],
];
