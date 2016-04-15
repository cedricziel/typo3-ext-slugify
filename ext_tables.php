<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$composerAutoloadFile = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY)
    .'packages/vendor/autoload.php';

require_once($composerAutoloadFile);
