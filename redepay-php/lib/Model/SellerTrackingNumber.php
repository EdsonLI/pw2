<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerTrackingNumber Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerTrackingNumber implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'tracking_number' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'tracking_number' => 'trackingNumber'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'tracking_number' => 'setTrackingNumber'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'tracking_number' => 'getTrackingNumber'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $tracking_number Código de rastreio a ser inserido na transação
      * @var string
      */
    protected $tracking_number;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->tracking_number = $data["tracking_number"];
        }
    }
    
    /**
     * Gets tracking_number
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }
  
    /**
     * Sets tracking_number
     * @param string $tracking_number Código de rastreio a ser inserido na transação
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        
        $this->tracking_number = $tracking_number;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\RedePay\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\RedePay\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
