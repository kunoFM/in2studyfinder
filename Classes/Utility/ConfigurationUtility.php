<?php

namespace In2code\In2studyfinder\Utility;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Sebastian Stein <sebastian.stein@in2code.de>, In2code.de
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ConfigurationUtility class
 *
 * @package in2studyfinder
 */
class ConfigurationUtility extends AbstractUtility
{
    /**
     * Check if feature global data is enabled
     *
     * @return bool
     */
    public static function isEnableGlobalData()
    {
        $extensionConfig = AbstractUtility::getExtensionConfiguration();

        return isset($extensionConfig['enableGlobalData']) && $extensionConfig['enableGlobalData'] === '1';
    }

    /**
     * Check if categorisation is active
     *
     * @return bool
     */
    public static function isCategorisationEnabled()
    {
        $extensionConfig = AbstractUtility::getExtensionConfiguration();

        return isset($extensionConfig['enableCategories']) && $extensionConfig['enableCategories'] === '1';
    }

    /**
     * Check if caching functionality is enabled
     *
     * @return bool
     */
    public static function isCachingEnabled()
    {
        $extensionConfig = AbstractUtility::getExtensionConfiguration();

        return isset($extensionConfig['enableCaching']) && $extensionConfig['enableCaching'] === '1';
    }

    /**
     * Check if caching functionality is enabled
     *
     * @return bool
     */
    public static function isPersistentFilterEnabled()
    {
        $extensionConfig = AbstractUtility::getExtensionConfiguration();

        return isset($extensionConfig['enablePersistentFilter']) && $extensionConfig['enablePersistentFilter'] === '1';
    }

    /**
     * Check if the backend module is enabled
     *
     * @return bool
     */
    public static function isBackendModuleEnabled()
    {
        $extensionConfig = AbstractUtility::getExtensionConfiguration();

        return isset($extensionConfig['enableBackendModule']) && $extensionConfig['enableBackendModule'] === '1';
    }
}
