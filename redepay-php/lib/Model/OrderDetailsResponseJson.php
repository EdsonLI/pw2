<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * OrderDetailsResponseJson Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderDetailsResponseJson implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'customer' => '\RedePay\Client\Model\CustomerResponseJson',
        'discount' => 'int',
        'expires_at' => 'string',
        'items' => '\RedePay\Client\Model\ShoppingCartItemsResponseJson[]',
        'order_id' => 'string',
        'reference' => 'string',
        'shipping' => '\RedePay\Client\Model\ShippingResponseJson',
        'status' => 'string',
        'status_history' => '\RedePay\Client\Model\OrderStatusHistoryResponseJson[]',
        'tracking_number_history' => '\RedePay\Client\Model\TrackingNumberHistoryResponseJson[]',
        'transaction_history' => '\RedePay\Client\Model\TransactionHistoryResponseJson[]'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'customer' => 'customer',
        'discount' => 'discount',
        'expires_at' => 'expiresAt',
        'items' => 'items',
        'order_id' => 'orderId',
        'reference' => 'reference',
        'shipping' => 'shipping',
        'status' => 'status',
        'status_history' => 'statusHistory',
        'tracking_number_history' => 'trackingNumberHistory',
        'transaction_history' => 'transactionHistory'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'customer' => 'setCustomer',
        'discount' => 'setDiscount',
        'expires_at' => 'setExpiresAt',
        'items' => 'setItems',
        'order_id' => 'setOrderId',
        'reference' => 'setReference',
        'shipping' => 'setShipping',
        'status' => 'setStatus',
        'status_history' => 'setStatusHistory',
        'tracking_number_history' => 'setTrackingNumberHistory',
        'transaction_history' => 'setTransactionHistory'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'customer' => 'getCustomer',
        'discount' => 'getDiscount',
        'expires_at' => 'getExpiresAt',
        'items' => 'getItems',
        'order_id' => 'getOrderId',
        'reference' => 'getReference',
        'shipping' => 'getShipping',
        'status' => 'getStatus',
        'status_history' => 'getStatusHistory',
        'tracking_number_history' => 'getTrackingNumberHistory',
        'transaction_history' => 'getTransactionHistory'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $customer 
      * @var \RedePay\Client\Model\CustomerResponseJson
      */
    protected $customer;
    
    /**
      * $discount Valor do desconto aplicado a transação
      * @var int
      */
    protected $discount;
    
    /**
      * $expires_at Data de expiração do pedido
      * @var string
      */
    protected $expires_at;
    
    /**
      * $items Items do carrinho
      * @var \RedePay\Client\Model\ShoppingCartItemsResponseJson[]
      */
    protected $items;
    
    /**
      * $order_id ID do pedido
      * @var string
      */
    protected $order_id;
    
    /**
      * $reference Número da Transação na base do lojista
      * @var string
      */
    protected $reference;
    
    /**
      * $shipping 
      * @var \RedePay\Client\Model\ShippingResponseJson
      */
    protected $shipping;
    
    /**
      * $status Status do pedido
      * @var string
      */
    protected $status;
    
    /**
      * $status_history Histórico de mudança de status do pedido
      * @var \RedePay\Client\Model\OrderStatusHistoryResponseJson[]
      */
    protected $status_history;
    
    /**
      * $tracking_number_history Histórico de associação de códigos de rastreio
      * @var \RedePay\Client\Model\TrackingNumberHistoryResponseJson[]
      */
    protected $tracking_number_history;
    
    /**
      * $transaction_history Histórico de transaçu00F5es do pedido
      * @var \RedePay\Client\Model\TransactionHistoryResponseJson[]
      */
    protected $transaction_history;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->customer = $data["customer"];
            $this->discount = $data["discount"];
            $this->expires_at = $data["expires_at"];
            $this->items = $data["items"];
            $this->order_id = $data["order_id"];
            $this->reference = $data["reference"];
            $this->shipping = $data["shipping"];
            $this->status = $data["status"];
            $this->status_history = $data["status_history"];
            $this->tracking_number_history = $data["tracking_number_history"];
            $this->transaction_history = $data["transaction_history"];
        }
    }
    
    /**
     * Gets customer
     * @return \RedePay\Client\Model\CustomerResponseJson
     */
    public function getCustomer()
    {
        return $this->customer;
    }
  
    /**
     * Sets customer
     * @param \RedePay\Client\Model\CustomerResponseJson $customer 
     * @return $this
     */
    public function setCustomer($customer)
    {
        
        $this->customer = $customer;
        return $this;
    }
    
    /**
     * Gets discount
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }
  
    /**
     * Sets discount
     * @param int $discount Valor do desconto aplicado a transação
     * @return $this
     */
    public function setDiscount($discount)
    {
        
        $this->discount = $discount;
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
     * Gets items
     * @return \RedePay\Client\Model\ShoppingCartItemsResponseJson[]
     */
    public function getItems()
    {
        return $this->items;
    }
  
    /**
     * Sets items
     * @param \RedePay\Client\Model\ShoppingCartItemsResponseJson[] $items Items do carrinho
     * @return $this
     */
    public function setItems($items)
    {
        
        $this->items = $items;
        return $this;
    }
    
    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
  
    /**
     * Sets order_id
     * @param string $order_id ID do pedido
     * @return $this
     */
    public function setOrderId($order_id)
    {
        
        $this->order_id = $order_id;
        return $this;
    }
    
    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
  
    /**
     * Sets reference
     * @param string $reference Número da Transação na base do lojista
     * @return $this
     */
    public function setReference($reference)
    {
        
        $this->reference = $reference;
        return $this;
    }
    
    /**
     * Gets shipping
     * @return \RedePay\Client\Model\ShippingResponseJson
     */
    public function getShipping()
    {
        return $this->shipping;
    }
  
    /**
     * Sets shipping
     * @param \RedePay\Client\Model\ShippingResponseJson $shipping 
     * @return $this
     */
    public function setShipping($shipping)
    {
        
        $this->shipping = $shipping;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Status do pedido
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets status_history
     * @return \RedePay\Client\Model\OrderStatusHistoryResponseJson[]
     */
    public function getStatusHistory()
    {
        return $this->status_history;
    }
  
    /**
     * Sets status_history
     * @param \RedePay\Client\Model\OrderStatusHistoryResponseJson[] $status_history Histórico de mudança de status do pedido
     * @return $this
     */
    public function setStatusHistory($status_history)
    {
        
        $this->status_history = $status_history;
        return $this;
    }
    
    /**
     * Gets tracking_number_history
     * @return \RedePay\Client\Model\TrackingNumberHistoryResponseJson[]
     */
    public function getTrackingNumberHistory()
    {
        return $this->tracking_number_history;
    }
  
    /**
     * Sets tracking_number_history
     * @param \RedePay\Client\Model\TrackingNumberHistoryResponseJson[] $tracking_number_history Histórico de associação de códigos de rastreio
     * @return $this
     */
    public function setTrackingNumberHistory($tracking_number_history)
    {
        
        $this->tracking_number_history = $tracking_number_history;
        return $this;
    }
    
    /**
     * Gets transaction_history
     * @return \RedePay\Client\Model\TransactionHistoryResponseJson[]
     */
    public function getTransactionHistory()
    {
        return $this->transaction_history;
    }
  
    /**
     * Sets transaction_history
     * @param \RedePay\Client\Model\TransactionHistoryResponseJson[] $transaction_history Histórico de transaçu00F5es do pedido
     * @return $this
     */
    public function setTransactionHistory($transaction_history)
    {
        
        $this->transaction_history = $transaction_history;
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
