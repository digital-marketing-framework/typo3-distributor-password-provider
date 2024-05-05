<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Digital Marketing Framwork - Distributor - Password',
    'description' => 'Data Provider for generating Passwords',
    'category' => 'be',
    'author' => 'Daniel Bagel',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'dmf_distributor_core' => '2.0.0-2.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
