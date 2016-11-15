<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerCheckoutProduct Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerCheckoutProduct implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'customer' => '\RedePay\Client\Model\SellerCustomer',
        'discount' => 'int',
        'items' => '\RedePay\Client\Model\SellerItem[]',
        'reference' => 'string',
        'settings' => '\RedePay\Client\Model\SellerSettings',
        'shipping' => '\RedePay\Client\Model\SellerShipping',
        'urls' => '\RedePay\Client\Model\SellerUrl[]'
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
        'items' => 'items',
        'reference' => 'reference',
        'settings' => 'settings',
        'shipping' => 'shipping',
        'urls' => 'urls'
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
        'items' => 'setItems',
        'reference' => 'setReference',
        'settings' => 'setSettings',
        'shipping' => 'setShipping',
        'urls' => 'setUrls'
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
        'items' => 'getItems',
        'reference' => 'getReference',
        'settings' => 'getSettings',
        'shipping' => 'getShipping',
        'urls' => 'getUrls'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $customer 
      * @var \RedePay\Client\Model\SellerCustomer
      */
    protected $customer;
    
    /**
      * $discount Valor do desconto aplicado a venda
      * @var int
      */
    protected $discount;
    
    /**
      * $items Carrinho de compras
      * @var \RedePay\Client\Model\SellerItem[]
      */
    protected $items;
    
    /**
      * $reference ID do pedido na Loja
      * @var string
      */
    protected $reference;
    
    /**
      * $settings 
      * @var \RedePay\Client\Model\SellerSettings
      */
    protected $settings;
    
    /**
      * $shipping 
      * @var \RedePay\Client\Model\SellerShipping
      */
    protected $shipping;
    
    /**
      * $urls Informa a url para um determinado fim
      * @var \RedePay\Client\Model\SellerUrl[]
      */
    protected $urls;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->customer = $data["customer"];
            $this->discount = $data["discount"];
            $this->items = $data["items"];
            $this->reference = $data["reference"];
            $this->settings = $data["settings"];
            $this->shipping = $data["shipping"];
            $this->urls = $data["urls"];
        }
    }
    
    /**
     * Gets customer
     * @return \RedePay\Client\Model\SellerCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
  
    /**
     * Sets customer
     * @param \RedePay\Client\Model\SellerCustomer $customer 
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
     * @param int $discount Valor do desconto aplicado a venda
     * @return $this
     */
    public function setDiscount($discount)
    {
        
        $this->discount = $discount;
        return $this;
    }
    
    /**
     * Gets items
     * @return \RedePay\Client\Model\SellerItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
  
    /**
     * Sets items
     * @param \RedePay\Client\Model\SellerItem[] $items Carrinho de compras
     * @return $this
     */
    public function setItems($items)
    {
        
        $this->items = $items;
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
     * @param string $reference ID do pedido na Loja
     * @return $this
     */
    public function setReference($reference)
    {
        
        $this->reference = $reference;
        return $this;
    }
    
    /**
     * Gets settings
     * @return \RedePay\Client\Model\SellerSettings
     */
    public function getSettings()
    {
        return $this->settings;
    }
  
    /**
     * Sets settings
     * @param \RedePay\Client\Model\SellerSettings $settings 
     * @return $this
     */
    public function setSettings($settings)
    {
        
        $this->settings = $settings;
        return $this;
    }
    
    /**
     * Gets shipping
     * @return \RedePay\Client\Model\SellerShipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }
  
    /**
     * Sets shipping
     * @param \RedePay\Client\Model\SellerShipping $shipping 
     * @return $this
     */
    public function setShipping($shipping)
    {
        
        $this->shipping = $shipping;
        return $this;
    }
    
    /**
     * Gets urls
     * @return \RedePay\Client\Model\SellerUrl[]
     */
    public function getUrls()
    {
        return $this->urls;
    }
  
    /**
     * Sets urls
     * @param \RedePay\Client\Model\SellerUrl[] $urls Informa a url para um determinado fim
     * @return $this
     */
    public function setUrls($urls)
    {
        
        $this->urls = $urls;
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
