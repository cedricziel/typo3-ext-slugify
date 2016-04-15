<?php

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Bridge library: cocur/slugify',
    'description'      => '',
    'category'         => 'library',
    'author'           => 'Cedric Ziel',
    'author_email'     => 'cedric@cedric-ziel.com',
    'state'            => 'alpha',
    'internal'         => '',
    'uploadfolder'     => '0',
    'createDirs'       => '',
    'clearCacheOnLoad' => 0,
    'version'          => '2.1.1',
    'constraints'      => [
        'depends'   => [
            'typo3' => '7.6.0-7.6.99',
        ],
        'conflicts' => [
        ],
        'suggests'  => [
        ],
    ],
    'autoload'         => [
        'psr-4' => ['Cocur\\Slugify\\' => 'packages/vendor/cocur/slugify/src'],
    ],
];
