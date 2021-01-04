<?php

return [
    // Name of the scheme
    'table_name' => 'gods',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `gods`",

    // The scheme
    'scheme' => "CREATE TABLE `gods` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `god_page_image` varchar(150),
        `god_card_image` varchar(150),
        `god_name` varchar(80) NOT NULL,
        `roman_god_name` varchar(80) NOT NULL,
        `god_title` varchar(80),
        `god_over` varchar(80),
        `god_quote` TEXT,
        `god_group` varchar(100), 
        `has_had_sex_with_zeus` BOOLEAN, 
        `known_father` varchar(120),
        `known_mother` varchar(120),
        `created_by` int(11) NOT NULL,
        `created` timestamp NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'god_page_image'    => "zeus_page.jpg",
                'god_card_image'    => "zeus_card.jpg",
                'god_name'          => "Zeus",
                'roman_god_name'    => "Jupiter",
                'god_title'         => "King of the Gods, God of the sky",
                'god_over'          => "The Sky, Thunder and Lightning",
                'god_quote'         => "Aphrodite had the beauty;Zeus had the thunderbolts. Everyone loved Aphrodite, but everyone listened to Zeus.",
                'god_group'         => "Olympians",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Cronos",
                'known_mother'      => "Rhea",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1

            ],

            [
                'god_page_image'    => "atlas_page.jpg",
                'god_card_image'    => "atlas_card.jpg",
                'god_name'          => "Atlas",
                'roman_god_name'    => "Atlas",
                'god_title'         => "Bearer of the Heavens",
                'god_over'          => "Strength, Endurance and Heavy Burdens",
                'god_quote'         => "Atlas gazed out, as he always did, into infinite space, wishing he could be part of it, even for one hour.",
                'god_group'         => "Titans",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Lapetus",
                'known_mother'      => "Clymene",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "poseidon_page.jpg",
                'god_card_image'    => "poseidon_card.jpg",
                'god_name'          => "Poseidon",
                'roman_god_name'    => "Neptune",
                'god_title'         => "God of the Sea",
                'god_over'          => "Sea, Storms, Earthquakes and Horses",
                'god_quote'         => "Now my brethren! Strike for Olympus!",
                'god_group'         => "Olympians",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Cronos",
                'known_mother'      => "Rhea",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "hera_page.jpg",
                'god_card_image'    => "hera_card.jpg",
                'god_name'          => "Hera",
                'roman_god_name'    => "Juno",
                'god_title'         => "Goddess of marriage",
                'god_over'          => "Women, Childbirth and Family",
                'god_quote'         => "Great victory requires great risk. -Hera.",
                'god_group'         => "Olympians",
                'has_had_sex_with_zeus'    => 1,
                'known_father'      => "Cronos",
                'known_mother'      => "Rhea",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "demeter_page.jpg",
                'god_card_image'    => "demeter_card.jpg",
                'god_name'          => "Demeter",
                'roman_god_name'    => "Ceres",
                'god_title'         => "Goddess of the Harvest",
                'god_over'          => "Agriculture, Fertility and Sacred Law",
                'god_quote'         => "That which the earth bears, Demeter's grain.",
                'god_group'         => "Olympians",
                'has_had_sex_with_zeus'    => 1,
                'known_father'      => "Cronos",
                'known_mother'      => "Rhea",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "hades_page.jpg",
                'god_card_image'    => "hades_card.jpg",
                'god_name'          => "Hades",
                'roman_god_name'    => "Pluto",
                'god_title'         => "God of the Underworld",
                'god_over'          => "The Dead and Riches",
                'god_quote'         => "No man takes with him to Hades all his exceeding wealth.",
                'god_group'         => "Olympians",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Cronos",
                'known_mother'      => "Rhea",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "gaia_page.jpg",
                'god_card_image'    => "gaia_card.jpg",
                'god_name'          => "Gaia",
                'roman_god_name'    => "Terra",
                'god_title'         => "Mother Earth",
                'god_over'          => "All life",
                'god_quote'         => "Evolution is a tightly coupled dance, with life and the material environment as partners. From the dance emerges the entity Gaia.",
                'god_group'         => "The Primordial Deities",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Chaos",
                'known_mother'      => "",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "rhea_page.jpg",
                'god_card_image'    => "rhea_card.jpg",
                'god_name'          => "Rhea",
                'roman_god_name'    => "Ops",
                'god_title'         => "Mother of the Gods",
                'god_over'          => "Fertility, Motherhood, Comfort and ease",
                'god_quote'         => "She was a Titan, she knew about duty and destiny.",
                'god_group'         => "Titans",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Uranus",
                'known_mother'      => "Gaia",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "nyx_page.jpg",
                'god_card_image'    => "nyx_card.jpg",
                'god_name'          => "Nyx",
                'roman_god_name'    => "Nox",
                'god_title'         => "Primordial Goddess of the night",
                'god_over'          => "The night",
                'god_quote'         => "The Olympians shall make powerfull allies. But, reveal to them no more than they already know. For all our sakes.",
                'god_group'         => "The Primordial Deities",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Chaos",
                'known_mother'      => "",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "thanatos_page.jpg",
                'god_card_image'    => "thanatos_card.jpg",
                'god_name'          => "Thanatos",
                'roman_god_name'    => "Mors",
                'god_title'         => "Personification of Death, Reaper of Souls",
                'god_over'          => "The peaceful death",
                'god_quote'         => "Only the fire of life can melt the chains of death.",
                'god_group'         => "The Primordial Deities",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Erebus",
                'known_mother'      => "Nyx",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ],

            [
                'god_page_image'    => "hypnos_page.jpg",
                'god_card_image'    => "hypnos_card.jpg",
                'god_name'          => "Hypnos",
                'roman_god_name'    => "Somnus",
                'god_title'         => "God of sleep",
                'god_over'          => "Sleep and Rest",
                'god_quote'         => "Wise men have interpreted dreams, and the gods have laughed.",
                'god_group'         => "The Primordial Deities",
                'has_had_sex_with_zeus'    => 0,
                'known_father'      => "Erebus",
                'known_mother'      => "Nyx",
                'created'           => date('Y-m-d H:i:s'),
                'created_by'        => 1
            ]

        ),
    ],
];
