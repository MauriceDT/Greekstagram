<?php

return [
    // Name of the scheme
    'table_name' => 'polls',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `polls`",

    // The scheme
    'scheme' => "CREATE TABLE `polls` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `question` TEXT,
        `userid` varchar(15),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;",
    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'question'    => "Who is the better cook?",
            ],
            [
                'question'    => "Who would win in a game of chess?",
            ],
        ),
    ],
];
