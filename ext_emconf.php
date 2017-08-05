<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extbase Extension with codeception tests',
    'description' => '',
    'category' => 'fe',
    'author' => 'Torben Hansen',
    'author_email' => 'torben@derhansen.com',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
            'php' => '5.4.0-7.1.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
