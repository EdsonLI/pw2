<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerShipping Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerShipping implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'address' => '\RedePay\Client\Model\SellerAddress',
        'cost' => 'int',
        'cost_from_int' => 'int'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'address' => 'address',
        'cost' => 'cost',
        'cost_from_int' => 'costFromInt'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'address' => 'setAddress',
        'cost' => 'setCost',
        'cost_from_int' => 'setCostFromInt'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'address' => 'getAddress',
        'cost' => 'getCost',
        'cost_from_int' => 'getCostFromInt'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $address 
      * @var \RedePay\Client\Model\SellerAddress
      */
    protected $address;
    
    /**
      * $cost Custo do carrinho
      * @var int
      */
    protected $cost;
    
    /**
      * $cost_from_int 
      * @var int
      */
    protected $cost_from_int;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->address = $data["address"];
            $this->cost = $data["cost"];
            $this->cost_from_int = $data["cost_from_int"];
        }
    }
    
    /**
     * Gets address
     * @return \RedePay\Client\Model\SellerAddress
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param \RedePay\Client\Model\SellerAddress $address 
     * @return $this
     */
    public function setAddress($address)
    {
        
        $this->address = $address;
        return $this;
    }
    
    /**
     * Gets cost
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }
  
    /**
     * Sets cost
     * @param int $cost Custo do carrinho
     * @return $this
     */
    public function setCost($cost)
    {
        
        $this->cost = $cost;
        return $this;
    }
    
    /**
     * Gets cost_from_int
     * @return int
     */
    public function getCostFromInt()
    {
        return $this->cost_from_int;
    }
  
    /**
     * Sets cost_from_int
     * @param int $cost_from_int 
     * @return $this
     */
    public function setCostFromInt($cost_from_int)
    {
        
        $this->cost_from_int = $cost_from_int;
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
