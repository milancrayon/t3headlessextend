<?php
declare(strict_types=1);
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    't3headlessextend',
    'Configuration/TypoScript',
    'T3headless Extend'
);