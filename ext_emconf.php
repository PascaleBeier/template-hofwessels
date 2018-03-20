<?php

/**
 * Extension Manager/Repository config file for ext "hof_wessels_template".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Hof Wessels Template',
    'description' => 'Template für Hof Wessels',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PascaleBeier\\HofWesselsTemplate\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Pascale Beier',
    'author_email' => 'mail@pascalebeier.de',
    'author_company' => 'Pascale Beier',
    'version' => '1.0.0',
];
