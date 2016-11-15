<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerPaymentRequest Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerPaymentRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'order' => 'string',
        'payment' => '\RedePay\Client\Model\SellerPayment',
        'shipping_address' => '\RedePay\Client\Model\SellerPaymentAddress',
        'fingerprint' => 'string',
        'ip_address' => 'string',
        'channel' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'order' => 'order',
        'payment' => 'payment',
        'shipping_address' => 'shippingAddress',
        'fingerprint' => 'fingerprint',
        'ip_address' => 'ipAddress',
        'channel' => 'channel'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'order' => 'setOrder',
        'payment' => 'setPayment',
        'shipping_address' => 'setShippingAddress',
        'fingerprint' => 'setFingerprint',
        'ip_address' => 'setIpAddress',
        'channel' => 'setChannel'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'order' => 'getOrder',
        'payment' => 'getPayment',
        'shipping_address' => 'getShippingAddress',
        'fingerprint' => 'getFingerprint',
        'ip_address' => 'getIpAddress',
        'channel' => 'getChannel'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $order Id do Order
      * @var string
      */
    protected $order;
    
    /**
      * $payment 
      * @var \RedePay\Client\Model\SellerPayment
      */
    protected $payment;
    
    /**
      * $shipping_address 
      * @var \RedePay\Client\Model\SellerPaymentAddress
      */
    protected $shipping_address;
    
    /**
      * $fingerprint Finger Print
      * @var string
      */
    protected $fingerprint;
    
    /**
      * $ip_address Ip Address
      * @var string
      */
    protected $ip_address;
    
    /**
      * $channel Canal
      * @var string
      */
    protected $channel;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->order = $data["order"];
            $this->payment = $data["payment"];
            $this->shipping_address = $data["shipping_address"];
            $this->fingerprint = $data["fingerprint"];
            $this->ip_address = $data["ip_address"];
            $this->channel = $data["channel"];
        }
    }
    
    /**
     * Gets order
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param string $order Id do Order
     * @return $this
     */
    public function setOrder($order)
    {
        
        $this->order = $order;
        return $this;
    }
    
    /**
     * Gets payment
     * @return \RedePay\Client\Model\SellerPayment
     */
    public function getPayment()
    {
        return $this->payment;
    }
  
    /**
     * Sets payment
     * @param \RedePay\Client\Model\SellerPayment $payment 
     * @return $this
     */
    public function setPayment($payment)
    {
        
        $this->payment = $payment;
        return $this;
    }
    
    /**
     * Gets shipping_address
     * @return \RedePay\Client\Model\SellerPaymentAddress
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }
  
    /**
     * Sets shipping_address
     * @param \RedePay\Client\Model\SellerPaymentAddress $shipping_address 
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        
        $this->shipping_address = $shipping_address;
        return $this;
    }
    
    /**
     * Gets fingerprint
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
  
    /**
     * Sets fingerprint
     * @param string $fingerprint Finger Print
     * @return $this
     */
    public function setFingerprint($fingerprint)
    {
        
        $this->fingerprint = $fingerprint;
        return $this;
    }
    
    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }
  
    /**
     * Sets ip_address
     * @param string $ip_address Ip Address
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        
        $this->ip_address = $ip_address;
        return $this;
    }
    
    /**
     * Gets channel
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }
  
    /**
     * Sets channel
     * @param string $channel Canal
     * @return $this
     */
    public function setChannel($channel)
    {
        
        $this->channel = $channel;
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
