<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerCustomer Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerCustomer implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'documents' => '\RedePay\Client\Model\SellerDocument[]',
        'email' => 'string',
        'name' => 'string',
        'phones' => '\RedePay\Client\Model\SellerPhone[]'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'documents' => 'documents',
        'email' => 'email',
        'name' => 'name',
        'phones' => 'phones'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'documents' => 'setDocuments',
        'email' => 'setEmail',
        'name' => 'setName',
        'phones' => 'setPhones'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'documents' => 'getDocuments',
        'email' => 'getEmail',
        'name' => 'getName',
        'phones' => 'getPhones'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $documents Documentos do comprador
      * @var \RedePay\Client\Model\SellerDocument[]
      */
    protected $documents;
    
    /**
      * $email Email do comprador
      * @var string
      */
    protected $email;
    
    /**
      * $name Nome do comprador
      * @var string
      */
    protected $name;
    
    /**
      * $phones Telefones do comprador
      * @var \RedePay\Client\Model\SellerPhone[]
      */
    protected $phones;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->documents = $data["documents"];
            $this->email = $data["email"];
            $this->name = $data["name"];
            $this->phones = $data["phones"];
        }
    }
    
    /**
     * Gets documents
     * @return \RedePay\Client\Model\SellerDocument[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }
  
    /**
     * Sets documents
     * @param \RedePay\Client\Model\SellerDocument[] $documents Documentos do comprador
     * @return $this
     */
    public function setDocuments($documents)
    {
        
        $this->documents = $documents;
        return $this;
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
     * @param string $email Email do comprador
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
     * @param string $name Nome do comprador
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets phones
     * @return \RedePay\Client\Model\SellerPhone[]
     */
    public function getPhones()
    {
        return $this->phones;
    }
  
    /**
     * Sets phones
     * @param \RedePay\Client\Model\SellerPhone[] $phones Telefones do comprador
     * @return $this
     */
    public function setPhones($phones)
    {
        
        $this->phones = $phones;
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
