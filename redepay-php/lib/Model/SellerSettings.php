<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerSettings Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerSettings implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'attempts' => 'int',
        'expires_at' => 'string',
        'max_installments' => 'int',
        'shopping_cart_recovery' => '\RedePay\Client\Model\ShoppingCartRecovery'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'attempts' => 'attempts',
        'expires_at' => 'expiresAt',
        'max_installments' => 'maxInstallments',
        'shopping_cart_recovery' => 'shoppingCartRecovery'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'attempts' => 'setAttempts',
        'expires_at' => 'setExpiresAt',
        'max_installments' => 'setMaxInstallments',
        'shopping_cart_recovery' => 'setShoppingCartRecovery'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'attempts' => 'getAttempts',
        'expires_at' => 'getExpiresAt',
        'max_installments' => 'getMaxInstallments',
        'shopping_cart_recovery' => 'getShoppingCartRecovery'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $attempts Número de tentativas de pagamento do pedido
      * @var int
      */
    protected $attempts;
    
    /**
      * $expires_at Data de expiração do pedido
      * @var string
      */
    protected $expires_at;
    
    /**
      * $max_installments Número m\u00E1ximo de parcelas aceita no pagamento deste pedido
      * @var int
      */
    protected $max_installments;
    
    /**
      * $shopping_cart_recovery 
      * @var \RedePay\Client\Model\ShoppingCartRecovery
      */
    protected $shopping_cart_recovery;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->attempts = $data["attempts"];
            $this->expires_at = $data["expires_at"];
            $this->max_installments = $data["max_installments"];
            $this->shopping_cart_recovery = $data["shopping_cart_recovery"];
        }
    }
    
    /**
     * Gets attempts
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }
  
    /**
     * Sets attempts
     * @param int $attempts Número de tentativas de pagamento do pedido
     * @return $this
     */
    public function setAttempts($attempts)
    {
        
        $this->attempts = $attempts;
        return $this;
    }
    
    /**
     * Gets expires_at
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }
  
    /**
     * Sets expires_at
     * @param string $expires_at Data de expiração do pedido
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        
        $this->expires_at = $expires_at;
        return $this;
    }
    
    /**
     * Gets max_installments
     * @return int
     */
    public function getMaxInstallments()
    {
        return $this->max_installments;
    }
  
    /**
     * Sets max_installments
     * @param int $max_installments Número m\u00E1ximo de parcelas aceita no pagamento deste pedido
     * @return $this
     */
    public function setMaxInstallments($max_installments)
    {
        
        $this->max_installments = $max_installments;
        return $this;
    }
    
    /**
     * Gets shopping_cart_recovery
     * @return \RedePay\Client\Model\ShoppingCartRecovery
     */
    public function getShoppingCartRecovery()
    {
        return $this->shopping_cart_recovery;
    }
  
    /**
     * Sets shopping_cart_recovery
     * @param \RedePay\Client\Model\ShoppingCartRecovery $shopping_cart_recovery 
     * @return $this
     */
    public function setShoppingCartRecovery($shopping_cart_recovery)
    {
        
        $this->shopping_cart_recovery = $shopping_cart_recovery;
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
