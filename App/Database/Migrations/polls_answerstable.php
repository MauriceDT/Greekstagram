<?php

return [
    // Name of the scheme
    'table_name' => 'polls_answers',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `polls_answers`",

    // The scheme
    'scheme' => "CREATE TABLE `polls_answers` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user` int,
        `poll` int,
        `choice` int,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;",

];
