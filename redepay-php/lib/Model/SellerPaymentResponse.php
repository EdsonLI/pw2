<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerPaymentResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerPaymentResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'id' => 'string',
        'order_id' => 'string',
        'status' => 'string',
        'reference' => 'string',
        'amount' => 'int',
        'links' => '\RedePay\Client\Model\SellerLink[]',
        'erro_list' => '\RedePay\Client\Model\SellerErrorList[]'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'order_id' => 'orderId',
        'status' => 'status',
        'reference' => 'reference',
        'amount' => 'amount',
        'links' => 'links',
        'erro_list' => 'erroList'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'order_id' => 'setOrderId',
        'status' => 'setStatus',
        'reference' => 'setReference',
        'amount' => 'setAmount',
        'links' => 'setLinks',
        'erro_list' => 'setErroList'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'order_id' => 'getOrderId',
        'status' => 'getStatus',
        'reference' => 'getReference',
        'amount' => 'getAmount',
        'links' => 'getLinks',
        'erro_list' => 'getErroList'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id Id da Transação
      * @var string
      */
    protected $id;
    
    /**
      * $order_id Id do Order
      * @var string
      */
    protected $order_id;
    
    /**
      * $status Situação da Transação
      * @var string
      */
    protected $status;
    
    /**
      * $reference Reference
      * @var string
      */
    protected $reference;
    
    /**
      * $amount Valor da Transação
      * @var int
      */
    protected $amount;
    
    /**
      * $links Links
      * @var \RedePay\Client\Model\SellerLink[]
      */
    protected $links;
    
    /**
      * $erro_list Erro List
      * @var \RedePay\Client\Model\SellerErrorList[]
      */
    protected $erro_list;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->order_id = $data["order_id"];
            $this->status = $data["status"];
            $this->reference = $data["reference"];
            $this->amount = $data["amount"];
            $this->links = $data["links"];
            $this->erro_list = $data["erro_list"];
        }
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
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
  
    /**
     * Sets order_id
     * @param string $order_id Id do Order
     * @return $this
     */
    public function setOrderId($order_id)
    {
        
        $this->order_id = $order_id;
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
     * @param string $status Situação da Transação
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("IN_ANALYSIS", "APPROVED", "NOT_APPROVED", "NOT_PROCESSED");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'IN_ANALYSIS', 'APPROVED', 'NOT_APPROVED', 'NOT_PROCESSED'");
        }
        $this->status = $status;
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
     * @param string $reference Reference
     * @return $this
     */
    public function setReference($reference)
    {
        
        $this->reference = $reference;
        return $this;
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
     * Gets links
     * @return \RedePay\Client\Model\SellerLink[]
     */
    public function getLinks()
    {
        return $this->links;
    }
  
    /**
     * Sets links
     * @param \RedePay\Client\Model\SellerLink[] $links Links
     * @return $this
     */
    public function setLinks($links)
    {
        
        $this->links = $links;
        return $this;
    }
    
    /**
     * Gets erro_list
     * @return \RedePay\Client\Model\SellerErrorList[]
     */
    public function getErroList()
    {
        return $this->erro_list;
    }
  
    /**
     * Sets erro_list
     * @param \RedePay\Client\Model\SellerErrorList[] $erro_list Erro List
     * @return $this
     */
    public function setErroList($erro_list)
    {
        
        $this->erro_list = $erro_list;
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
