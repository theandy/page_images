<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

// Neue Felder definieren
$additionalColumns = [
    'tx_page_image' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:page_overview/Resources/Private/Language/locallang_db.xlf:pages.tx_page_image',
        'config' => ExtensionManagementUtility::getFileFieldTCAConfig(
            'tx_page_image',
            [
                'appearance' => [
                    'createNewRelationLinkTitle' => 'Bild hinzufügen',
                    'showPossibleLocalizationRecords' => true,
                ],
                'maxitems' => 1,
            ],
            'jpg,jpeg,png,svg,gif' // Erlaubte Bildtypen
        ),
    ],
];

// Felder registrieren
ExtensionManagementUtility::addTCAcolumns('pages', $additionalColumns);

// Felder dem Backend-Formular hinzufügen
ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'tx_page_image',
    '',
    'after:title'
);

// PageTSConfig einbinden (optional)
ExtensionManagementUtility::registerPageTSConfigFile(
    'page_images',
    'Configuration/TsConfig/Page/All.tsconfig',
    'Page Images'
);