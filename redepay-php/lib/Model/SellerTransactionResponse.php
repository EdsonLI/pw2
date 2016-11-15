<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerTransactionResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerTransactionResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'amount' => 'int',
        'card_brand' => 'string',
        'creation_date' => 'string',
        'customer_email' => 'string',
        'customer_name' => 'string',
        'discount' => 'int',
        'id' => 'string',
        'installments' => 'int',
        'items' => '\RedePay\Client\Model\GetTransactionItemResponse[]',
        'nsu' => 'string',
        'payment_method' => 'string',
        'reference' => 'string',
        'shipping' => '\RedePay\Client\Model\SellerShippping',
        'status' => 'string',
        'status_history' => '\RedePay\Client\Model\SellerStatusHistory[]',
        't_id' => 'string',
        'tracking_number' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'amount' => 'amount',
        'card_brand' => 'cardBrand',
        'creation_date' => 'creationDate',
        'customer_email' => 'customerEmail',
        'customer_name' => 'customerName',
        'discount' => 'discount',
        'id' => 'id',
        'installments' => 'installments',
        'items' => 'items',
        'nsu' => 'nsu',
        'payment_method' => 'paymentMethod',
        'reference' => 'reference',
        'shipping' => 'shipping',
        'status' => 'status',
        'status_history' => 'statusHistory',
        't_id' => 'tId',
        'tracking_number' => 'trackingNumber'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'amount' => 'setAmount',
        'card_brand' => 'setCardBrand',
        'creation_date' => 'setCreationDate',
        'customer_email' => 'setCustomerEmail',
        'customer_name' => 'setCustomerName',
        'discount' => 'setDiscount',
        'id' => 'setId',
        'installments' => 'setInstallments',
        'items' => 'setItems',
        'nsu' => 'setNsu',
        'payment_method' => 'setPaymentMethod',
        'reference' => 'setReference',
        'shipping' => 'setShipping',
        'status' => 'setStatus',
        'status_history' => 'setStatusHistory',
        't_id' => 'setTId',
        'tracking_number' => 'setTrackingNumber'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'amount' => 'getAmount',
        'card_brand' => 'getCardBrand',
        'creation_date' => 'getCreationDate',
        'customer_email' => 'getCustomerEmail',
        'customer_name' => 'getCustomerName',
        'discount' => 'getDiscount',
        'id' => 'getId',
        'installments' => 'getInstallments',
        'items' => 'getItems',
        'nsu' => 'getNsu',
        'payment_method' => 'getPaymentMethod',
        'reference' => 'getReference',
        'shipping' => 'getShipping',
        'status' => 'getStatus',
        'status_history' => 'getStatusHistory',
        't_id' => 'getTId',
        'tracking_number' => 'getTrackingNumber'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $amount Valor da Transação
      * @var int
      */
    protected $amount;
    
    /**
      * $card_brand Bandeira do  cartão
      * @var string
      */
    protected $card_brand;
    
    /**
      * $creation_date Data de criação
      * @var string
      */
    protected $creation_date;
    
    /**
      * $customer_email Email do pagador
      * @var string
      */
    protected $customer_email;
    
    /**
      * $customer_name Nome do pagador
      * @var string
      */
    protected $customer_name;
    
    /**
      * $discount Valor do desconto aplicado a transação
      * @var int
      */
    protected $discount;
    
    /**
      * $id Id da Transação
      * @var string
      */
    protected $id;
    
    /**
      * $installments Quantidade de parcelas
      * @var int
      */
    protected $installments;
    
    /**
      * $items Produtos do carrinho
      * @var \RedePay\Client\Model\GetTransactionItemResponse[]
      */
    protected $items;
    
    /**
      * $nsu Número de sequencia do lojista
      * @var string
      */
    protected $nsu;
    
    /**
      * $payment_method Método de pagamento
      * @var string
      */
    protected $payment_method;
    
    /**
      * $reference Id da order origem da Transação
      * @var string
      */
    protected $reference;
    
    /**
      * $shipping 
      * @var \RedePay\Client\Model\SellerShippping
      */
    protected $shipping;
    
    /**
      * $status Status da Transação
      * @var string
      */
    protected $status;
    
    /**
      * $status_history Historico de alteração do status
      * @var \RedePay\Client\Model\SellerStatusHistory[]
      */
    protected $status_history;
    
    /**
      * $t_id Número da Transação na base do lojista
      * @var string
      */
    protected $t_id;
    
    /**
      * $tracking_number Código de rastreio da entrega dos produtos
      * @var string
      */
    protected $tracking_number;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->amount = $data["amount"];
            $this->card_brand = $data["card_brand"];
            $this->creation_date = $data["creation_date"];
            $this->customer_email = $data["customer_email"];
            $this->customer_name = $data["customer_name"];
            $this->discount = $data["discount"];
            $this->id = $data["id"];
            $this->installments = $data["installments"];
            $this->items = $data["items"];
            $this->nsu = $data["nsu"];
            $this->payment_method = $data["payment_method"];
            $this->reference = $data["reference"];
            $this->shipping = $data["shipping"];
            $this->status = $data["status"];
            $this->status_history = $data["status_history"];
            $this->t_id = $data["t_id"];
            $this->tracking_number = $data["tracking_number"];
        }
    }
    
    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param int $amount Valor da Transação
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets card_brand
     * @return string
     */
    public function getCardBrand()
    {
        return $this->card_brand;
    }
  
    /**
     * Sets card_brand
     * @param string $card_brand Bandeira do  cartão
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $allowed_values = array("VISA", "MASTERCARD", "DINERS", "HIPER", "HIPERCARD");
        if (!in_array($card_brand, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'card_brand', must be one of 'VISA', 'MASTERCARD', 'DINERS', 'HIPER', 'HIPERCARD'");
        }
        $this->card_brand = $card_brand;
        return $this;
    }
    
    /**
     * Gets creation_date
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }
  
    /**
     * Sets creation_date
     * @param string $creation_date Data de criação
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        
        $this->creation_date = $creation_date;
        return $this;
    }
    
    /**
     * Gets customer_email
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customer_email;
    }
  
    /**
     * Sets customer_email
     * @param string $customer_email Email do pagador
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        
        $this->customer_email = $customer_email;
        return $this;
    }
    
    /**
     * Gets customer_name
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }
  
    /**
     * Sets customer_name
     * @param string $customer_name Nome do pagador
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        
        $this->customer_name = $customer_name;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id Id da Transação
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets installments
     * @return int
     */
    public function getInstallments()
    {
        return $this->installments;
    }
  
    /**
     * Sets installments
     * @param int $installments Quantidade de parcelas
     * @return $this
     */
    public function setInstallments($installments)
    {
        
        $this->installments = $installments;
        return $this;
    }
    
    /**
     * Gets items
     * @return \RedePay\Client\Model\GetTransactionItemResponse[]
     */
    public function getItems()
    {
        return $this->items;
    }
  
    /**
     * Sets items
     * @param \RedePay\Client\Model\GetTransactionItemResponse[] $items Produtos do carrinho
     * @return $this
     */
    public function setItems($items)
    {
        
        $this->items = $items;
        return $this;
    }
    
    /**
     * Gets nsu
     * @return string
     */
    public function getNsu()
    {
        return $this->nsu;
    }
  
    /**
     * Sets nsu
     * @param string $nsu Número de sequencia do lojista
     * @return $this
     */
    public function setNsu($nsu)
    {
        
        $this->nsu = $nsu;
        return $this;
    }
    
    /**
     * Gets payment_method
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }
  
    /**
     * Sets payment_method
     * @param string $payment_method Método de pagamento
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        
        $this->payment_method = $payment_method;
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
     * @param string $reference Id da order origem da Transação
     * @return $this
     */
    public function setReference($reference)
    {
        
        $this->reference = $reference;
        return $this;
    }
    
    /**
     * Gets shipping
     * @return \RedePay\Client\Model\SellerShippping
     */
    public function getShipping()
    {
        return $this->shipping;
    }
  
    /**
     * Sets shipping
     * @param \RedePay\Client\Model\SellerShippping $shipping 
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
     * @param string $status Status da Transação
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("REVERSED", "APPROVED", "IN_DISPUTE", "CHARGEBACK", "IN_ANALISYS", "DENIED");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'REVERSED', 'APPROVED', 'IN_DISPUTE', 'CHARGEBACK', 'IN_ANALISYS', 'DENIED'");
        }
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets status_history
     * @return \RedePay\Client\Model\SellerStatusHistory[]
     */
    public function getStatusHistory()
    {
        return $this->status_history;
    }
  
    /**
     * Sets status_history
     * @param \RedePay\Client\Model\SellerStatusHistory[] $status_history Historico de alteração do status
     * @return $this
     */
    public function setStatusHistory($status_history)
    {
        
        $this->status_history = $status_history;
        return $this;
    }
    
    /**
     * Gets t_id
     * @return string
     */
    public function getTId()
    {
        return $this->t_id;
    }
  
    /**
     * Sets t_id
     * @param string $t_id Número da Transação na base do lojista
     * @return $this
     */
    public function setTId($t_id)
    {
        
        $this->t_id = $t_id;
        return $this;
    }
    
    /**
     * Gets tracking_number
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }
  
    /**
     * Sets tracking_number
     * @param string $tracking_number Código de rastreio da entrega dos produtos
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        
        $this->tracking_number = $tracking_number;
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
