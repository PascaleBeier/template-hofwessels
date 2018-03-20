<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'hof_wessels_template';

    /**
     * Default PageTS for HofWesselsTemplate
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTS/All.txt',
        'Hof Wessels Template'
    );
});
