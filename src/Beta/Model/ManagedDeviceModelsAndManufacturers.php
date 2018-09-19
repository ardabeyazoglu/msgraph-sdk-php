<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceModelsAndManufacturers File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* ManagedDeviceModelsAndManufacturers class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedDeviceModelsAndManufacturers extends Entity
{
    /**
    * Gets the deviceModels
    *
    * @return string The deviceModels
    */
    public function getDeviceModels()
    {
        if (array_key_exists("deviceModels", $this->_propDict)) {
            return $this->_propDict["deviceModels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceModels
    *
    * @param string $val The value of the deviceModels
    *
    * @return ManagedDeviceModelsAndManufacturers
    */
    public function setDeviceModels($val)
    {
        $this->_propDict["deviceModels"] = $val;
        return $this;
    }
    /**
    * Gets the deviceManufacturers
    *
    * @return string The deviceManufacturers
    */
    public function getDeviceManufacturers()
    {
        if (array_key_exists("deviceManufacturers", $this->_propDict)) {
            return $this->_propDict["deviceManufacturers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceManufacturers
    *
    * @param string $val The value of the deviceManufacturers
    *
    * @return ManagedDeviceModelsAndManufacturers
    */
    public function setDeviceManufacturers($val)
    {
        $this->_propDict["deviceManufacturers"] = $val;
        return $this;
    }
}