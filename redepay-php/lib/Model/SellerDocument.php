<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerDocument Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerDocument implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'kind' => 'string',
        'number' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'kind' => 'kind',
        'number' => 'number'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'kind' => 'setKind',
        'number' => 'setNumber'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'kind' => 'getKind',
        'number' => 'getNumber'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $kind Tipo de documento. Aceitar apenas cpf (case insensitive) como valor. Qualquer valor diferente disto é inv\u00E1lido. O kind deve ser unique
      * @var string
      */
    protected $kind;
    
    /**
      * $number Considerar regra na ABA Validacao e consolidacao
      * @var string
      */
    protected $number;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->kind = $data["kind"];
            $this->number = $data["number"];
        }
    }
    
    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
  
    /**
     * Sets kind
     * @param string $kind Tipo de documento. Aceitar apenas cpf (case insensitive) como valor. Qualquer valor diferente disto é inv\u00E1lido. O kind deve ser unique
     * @return $this
     */
    public function setKind($kind)
    {
        $allowed_values = array("cpf");
        if (!in_array($kind, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'kind', must be one of 'cpf'");
        }
        $this->kind = $kind;
        return $this;
    }
    
    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }
  
    /**
     * Sets number
     * @param string $number Considerar regra na ABA Validacao e consolidacao
     * @return $this
     */
    public function setNumber($number)
    {
        
        $this->number = $number;
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
