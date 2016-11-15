<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * UserInfoAddress Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserInfoAddress implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'city' => 'string',
        'complement' => 'string',
        'district' => 'string',
        'number' => 'string',
        'postal_code' => 'string',
        'state' => 'string',
        'street' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'city' => 'city',
        'complement' => 'complement',
        'district' => 'district',
        'number' => 'number',
        'postal_code' => 'postalCode',
        'state' => 'state',
        'street' => 'street'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'city' => 'setCity',
        'complement' => 'setComplement',
        'district' => 'setDistrict',
        'number' => 'setNumber',
        'postal_code' => 'setPostalCode',
        'state' => 'setState',
        'street' => 'setStreet'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'city' => 'getCity',
        'complement' => 'getComplement',
        'district' => 'getDistrict',
        'number' => 'getNumber',
        'postal_code' => 'getPostalCode',
        'state' => 'getState',
        'street' => 'getStreet'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $city Nome da cidade
      * @var string
      */
    protected $city;
    
    /**
      * $complement Complemento
      * @var string
      */
    protected $complement;
    
    /**
      * $district Nome do bairro
      * @var string
      */
    protected $district;
    
    /**
      * $number Número
      * @var string
      */
    protected $number;
    
    /**
      * $postal_code Número do cep
      * @var string
      */
    protected $postal_code;
    
    /**
      * $state Nome do estado
      * @var string
      */
    protected $state;
    
    /**
      * $street Rua
      * @var string
      */
    protected $street;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->city = $data["city"];
            $this->complement = $data["complement"];
            $this->district = $data["district"];
            $this->number = $data["number"];
            $this->postal_code = $data["postal_code"];
            $this->state = $data["state"];
            $this->street = $data["street"];
        }
    }
    
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
  
    /**
     * Sets city
     * @param string $city Nome da cidade
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets complement
     * @return string
     */
    public function getComplement()
    {
        return $this->complement;
    }
  
    /**
     * Sets complement
     * @param string $complement Complemento
     * @return $this
     */
    public function setComplement($complement)
    {
        
        $this->complement = $complement;
        return $this;
    }
    
    /**
     * Gets district
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }
  
    /**
     * Sets district
     * @param string $district Nome do bairro
     * @return $this
     */
    public function setDistrict($district)
    {
        
        $this->district = $district;
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
     * @param string $number Número
     * @return $this
     */
    public function setNumber($number)
    {
        
        $this->number = $number;
        return $this;
    }
    
    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }
  
    /**
     * Sets postal_code
     * @param string $postal_code Número do cep
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        
        $this->postal_code = $postal_code;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state Nome do estado
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }
  
    /**
     * Sets street
     * @param string $street Rua
     * @return $this
     */
    public function setStreet($street)
    {
        
        $this->street = $street;
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
