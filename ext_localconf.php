<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$extKey = 'in2studyfinder';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin('In2code.' . $extKey, 'Pi1', [
        'StudyCourse' => 'list, filter',
    ], // non-cacheable actions
    [
        'StudyCourse' => 'list, filter',
    ]);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin('In2code.' . $extKey, 'Pi2', [
        'StudyCourse' => 'detail',
    ], // non-cacheable actions
    [
        'StudyCourse' => 'detail',
    ]);

/*
Adds the Language Files from in2studyfinder_extend
*/
if (In2code\In2studyfinder\Utility\ExtensionUtility::isIn2studycoursesExtendLoaded()) {
    // Backend
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:in2studyfinder/Resources/Private/Language/locallang_db.xlf'][]
        = 'EXT:in2studyfinder_extend/Resources/Private/Language/locallang_db.xlf';

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:in2studyfinder/Resources/Private/Language/de.locallang_db.xlf'][]
        = 'EXT:in2studyfinder_extend/Resources/Private/Language/de.locallang_db.xlf';

    // Frontend
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:in2studyfinder/Resources/Private/Language/locallang.xlf'][]
        = 'EXT:in2studyfinder_extend/Resources/Private/Language/locallang.xlf';

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:in2studyfinder/Resources/Private/Language/de.locallang.xlf'][]
        = 'EXT:in2studyfinder_extend/Resources/Private/Language/de.locallang.xlf';
}

if (\In2code\In2studyfinder\Utility\ConfigurationUtility::isCachingEnabled()) {
    if( !is_array($GLOBALS['TYPO3_CONF_VARS'] ['SYS']['caching']['cacheConfigurations'][$extKey] ) ) {
        $GLOBALS['TYPO3_CONF_VARS'] ['SYS']['caching']['cacheConfigurations'][$extKey] = array();
    }
    if( !isset($GLOBALS['TYPO3_CONF_VARS'] ['SYS']['caching']['cacheConfigurations'][$extKey]['frontend'] ) ) {
        $GLOBALS['TYPO3_CONF_VARS'] ['SYS']['caching']['cacheConfigurations'][$extKey]['frontend'] =
            \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend::class;
    }
    if( !isset($GLOBALS['TYPO3_CONF_VARS'] ['SYS']['caching']['cacheConfigurations'][$extKey]['groups'] ) ) {
        $GLOBALS['TYPO3_CONF_VARS'] ['SYS']['caching']['cacheConfigurations'][$extKey]['groups'] =
            array('pages');
    }
}
