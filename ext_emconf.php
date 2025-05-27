<?php

/**
 * Extension Manager/Repository config file for ext "page_images".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Page Images',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'AndreasLoewer\\PageImages\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Andreas Löwer',
    'author_email' => 'info@andreasloewer.de',
    'author_company' => 'Andreas Löwer',
    'version' => '1.0.0',
];
