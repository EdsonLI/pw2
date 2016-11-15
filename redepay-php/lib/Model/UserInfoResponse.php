<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * UserInfoResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserInfoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'email' => 'string',
        'name' => 'string',
        'cpf' => 'string',
        'phones' => '\RedePay\Client\Model\UserInfoPhone[]',
        'address' => '\RedePay\Client\Model\UserInfoAddress'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'email' => 'email',
        'name' => 'name',
        'cpf' => 'cpf',
        'phones' => 'phones',
        'address' => 'address'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'email' => 'setEmail',
        'name' => 'setName',
        'cpf' => 'setCpf',
        'phones' => 'setPhones',
        'address' => 'setAddress'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'email' => 'getEmail',
        'name' => 'getName',
        'cpf' => 'getCpf',
        'phones' => 'getPhones',
        'address' => 'getAddress'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $email Email do user
      * @var string
      */
    protected $email;
    
    /**
      * $name Nome do user
      * @var string
      */
    protected $name;
    
    /**
      * $cpf Cpf do user
      * @var string
      */
    protected $cpf;
    
    /**
      * $phones Telefones do user
      * @var \RedePay\Client\Model\UserInfoPhone[]
      */
    protected $phones;
    
    /**
      * $address 
      * @var \RedePay\Client\Model\UserInfoAddress
      */
    protected $address;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->email = $data["email"];
            $this->name = $data["name"];
            $this->cpf = $data["cpf"];
            $this->phones = $data["phones"];
            $this->address = $data["address"];
        }
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email Email do user
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name Nome do user
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets cpf
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }
  
    /**
     * Sets cpf
     * @param string $cpf Cpf do user
     * @return $this
     */
    public function setCpf($cpf)
    {
        
        $this->cpf = $cpf;
        return $this;
    }
    
    /**
     * Gets phones
     * @return \RedePay\Client\Model\UserInfoPhone[]
     */
    public function getPhones()
    {
        return $this->phones;
    }
  
    /**
     * Sets phones
     * @param \RedePay\Client\Model\UserInfoPhone[] $phones Telefones do user
     * @return $this
     */
    public function setPhones($phones)
    {
        
        $this->phones = $phones;
        return $this;
    }
    
    /**
     * Gets address
     * @return \RedePay\Client\Model\UserInfoAddress
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param \RedePay\Client\Model\UserInfoAddress $address 
     * @return $this
     */
    public function setAddress($address)
    {
        
        $this->address = $address;
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
