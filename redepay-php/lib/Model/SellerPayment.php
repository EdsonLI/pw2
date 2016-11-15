<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerPayment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerPayment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'installments' => 'string',
        'card_token' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'installments' => 'installments',
        'card_token' => 'cardToken'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'installments' => 'setInstallments',
        'card_token' => 'setCardToken'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'installments' => 'getInstallments',
        'card_token' => 'getCardToken'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $installments número de parcelas
      * @var string
      */
    protected $installments;
    
    /**
      * $card_token Token do cartão
      * @var string
      */
    protected $card_token;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->installments = $data["installments"];
            $this->card_token = $data["card_token"];
        }
    }
    
    /**
     * Gets installments
     * @return string
     */
    public function getInstallments()
    {
        return $this->installments;
    }
  
    /**
     * Sets installments
     * @param string $installments número de parcelas
     * @return $this
     */
    public function setInstallments($installments)
    {
        
        $this->installments = $installments;
        return $this;
    }
    
    /**
     * Gets card_token
     * @return string
     */
    public function getCardToken()
    {
        return $this->card_token;
    }
  
    /**
     * Sets card_token
     * @param string $card_token Token do cartão
     * @return $this
     */
    public function setCardToken($card_token)
    {
        
        $this->card_token = $card_token;
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
