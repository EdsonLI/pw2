<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerAccessTokenResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerAccessTokenResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'access_token' => 'string',
        'token_type' => 'string',
        'expires_in' => 'int',
        'scope' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'access_token' => 'access_token',
        'token_type' => 'token_type',
        'expires_in' => 'expires_in',
        'scope' => 'scope'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'access_token' => 'setAccessToken',
        'token_type' => 'setTokenType',
        'expires_in' => 'setExpiresIn',
        'scope' => 'setScope'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'access_token' => 'getAccessToken',
        'token_type' => 'getTokenType',
        'expires_in' => 'getExpiresIn',
        'scope' => 'getScope'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $access_token String com o access token gerado a ser usado para acessar as APIs do Rede pay
      * @var string
      */
    protected $access_token;
    
    /**
      * $token_type Tipo de acess token recebido
      * @var string
      */
    protected $token_type;
    
    /**
      * $expires_in Tempo de expiração do access token em segundos
      * @var int
      */
    protected $expires_in;
    
    /**
      * $scope Lista dos escopos que estão autorizados a serem acessados com esse access token
      * @var string
      */
    protected $scope;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->access_token = $data["access_token"];
            $this->token_type = $data["token_type"];
            $this->expires_in = $data["expires_in"];
            $this->scope = $data["scope"];
        }
    }
    
    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
  
    /**
     * Sets access_token
     * @param string $access_token String com o access token gerado a ser usado para acessar as APIs do Rede pay
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        
        $this->access_token = $access_token;
        return $this;
    }
    
    /**
     * Gets token_type
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }
  
    /**
     * Sets token_type
     * @param string $token_type Tipo de acess token recebido
     * @return $this
     */
    public function setTokenType($token_type)
    {
        
        $this->token_type = $token_type;
        return $this;
    }
    
    /**
     * Gets expires_in
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }
  
    /**
     * Sets expires_in
     * @param int $expires_in Tempo de expiração do access token em segundos
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        
        $this->expires_in = $expires_in;
        return $this;
    }
    
    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }
  
    /**
     * Sets scope
     * @param string $scope Lista dos escopos que estão autorizados a serem acessados com esse access token
     * @return $this
     */
    public function setScope($scope)
    {
        
        $this->scope = $scope;
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
