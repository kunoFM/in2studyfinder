<?php
use In2code\In2studyfinder\Utility\TcaGenerator;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$ll = 'LLL:EXT:in2studyfinder/Resources/Private/Language/locallang_db.xlf:';
$table = 'tx_in2studyfinder_domain_model_academicdegree';
$icon = ExtensionManagementUtility::extRelPath('in2studyfinder') . 'Resources/Public/Icons/' . $table . '.png';

return [
    'ctrl' => [
        'title' => $ll . $table,
        'label' => 'degree',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'degree,',
        'iconfile' => $icon
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, degree, graduation',
    ],
    'types' => [
        '1' => [
            'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, degree, graduation, ' .
            '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [

        'sys_language_uid' => TcaGenerator::getFullTcaForSysLanguageUid(),
        'l10n_parent' => TcaGenerator::getFullTcaForL10nParent($table),
        'l10n_diffsource' => TcaGenerator::getFullTcaForL10nDiffsource(),
        't3ver_label' => TcaGenerator::getFullTcaForT3verLabel(),
        'hidden' => TcaGenerator::getFullTcaForHidden(),
        'starttime' => TcaGenerator::getFullTcaForStartTime(),
        'endtime' => TcaGenerator::getFullTcaForEndTime(),
        'degree' => [
            'exclude' => 1,
            'label' => $ll . $table . '.degree',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'graduation' => [
            'exclude' => 1,
            'label' => $ll . 'tx_in2studyfinder_domain_model_graduation.title',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_in2studyfinder_domain_model_graduation',
                'items' => [TcaGenerator::getPleaseChooseOption('tx_in2studyfinder_domain_model_graduation')],
                'minitems' => 1,
                'maxitems' => 1,
            ],
        ]
    ],
];