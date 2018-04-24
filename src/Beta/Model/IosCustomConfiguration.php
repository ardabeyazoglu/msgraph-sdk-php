<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosCustomConfiguration File
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
* IosCustomConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosCustomConfiguration extends DeviceConfiguration
{
    /**
    * Gets the payloadName
    *
    * @return string The payloadName
    */
    public function getPayloadName()
    {
        if (array_key_exists("payloadName", $this->_propDict)) {
            return $this->_propDict["payloadName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadName
    *
    * @param string $val The payloadName
    *
    * @return IosCustomConfiguration
    */
    public function setPayloadName($val)
    {
        $this->_propDict["payloadName"] = $val;
        return $this;
    }
    
    /**
    * Gets the payloadFileName
    *
    * @return string The payloadFileName
    */
    public function getPayloadFileName()
    {
        if (array_key_exists("payloadFileName", $this->_propDict)) {
            return $this->_propDict["payloadFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadFileName
    *
    * @param string $val The payloadFileName
    *
    * @return IosCustomConfiguration
    */
    public function setPayloadFileName($val)
    {
        $this->_propDict["payloadFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the payload
    *
    * @return \GuzzleHttp\Psr7\Stream The payload
    */
    public function getPayload()
    {
        if (array_key_exists("payload", $this->_propDict)) {
            if (is_a($this->_propDict["payload"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["payload"];
            } else {
                $this->_propDict["payload"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["payload"]);
                return $this->_propDict["payload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payload
    *
    * @param \GuzzleHttp\Psr7\Stream $val The payload
    *
    * @return IosCustomConfiguration
    */
    public function setPayload($val)
    {
        $this->_propDict["payload"] = $val;
        return $this;
    }
    
}