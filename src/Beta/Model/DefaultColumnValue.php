<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefaultColumnValue File
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
* DefaultColumnValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DefaultColumnValue extends Entity
{
    /**
    * Gets the formula
    *
    * @return string The formula
    */
    public function getFormula()
    {
        if (array_key_exists("formula", $this->_propDict)) {
            return $this->_propDict["formula"];
        } else {
            return null;
        }
    }

    /**
    * Sets the formula
    *
    * @param string $val The value of the formula
    *
    * @return DefaultColumnValue
    */
    public function setFormula($val)
    {
        $this->_propDict["formula"] = $val;
        return $this;
    }
    /**
    * Gets the value
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    *
    * @param string $val The value of the value
    *
    * @return DefaultColumnValue
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}