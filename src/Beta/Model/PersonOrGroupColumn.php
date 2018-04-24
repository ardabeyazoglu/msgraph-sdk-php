<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonOrGroupColumn File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* PersonOrGroupColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PersonOrGroupColumn extends Entity
{
    /**
    * Gets the allowMultipleSelection
    *
    * @return bool The allowMultipleSelection
    */
    public function getAllowMultipleSelection()
    {
        if (array_key_exists("allowMultipleSelection", $this->_propDict)) {
            return $this->_propDict["allowMultipleSelection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleSelection
    *
    * @param bool $val The value of the allowMultipleSelection
    *
    * @return PersonOrGroupColumn
    */
    public function setAllowMultipleSelection($val)
    {
        $this->_propDict["allowMultipleSelection"] = $val;
        return $this;
    }
    /**
    * Gets the chooseFromType
    *
    * @return string The chooseFromType
    */
    public function getChooseFromType()
    {
        if (array_key_exists("chooseFromType", $this->_propDict)) {
            return $this->_propDict["chooseFromType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the chooseFromType
    *
    * @param string $val The value of the chooseFromType
    *
    * @return PersonOrGroupColumn
    */
    public function setChooseFromType($val)
    {
        $this->_propDict["chooseFromType"] = $val;
        return $this;
    }
    /**
    * Gets the displayAs
    *
    * @return string The displayAs
    */
    public function getDisplayAs()
    {
        if (array_key_exists("displayAs", $this->_propDict)) {
            return $this->_propDict["displayAs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayAs
    *
    * @param string $val The value of the displayAs
    *
    * @return PersonOrGroupColumn
    */
    public function setDisplayAs($val)
    {
        $this->_propDict["displayAs"] = $val;
        return $this;
    }
}