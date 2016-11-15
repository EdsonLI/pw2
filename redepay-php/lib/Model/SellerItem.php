<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * SellerItem Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SellerItem implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'amount' => 'int',
        'description' => 'string',
        'discount' => 'int',
        'freight' => 'int',
        'id' => 'string',
        'quantity' => 'int'
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
        'description' => 'description',
        'discount' => 'discount',
        'freight' => 'freight',
        'id' => 'id',
        'quantity' => 'quantity'
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
        'description' => 'setDescription',
        'discount' => 'setDiscount',
        'freight' => 'setFreight',
        'id' => 'setId',
        'quantity' => 'setQuantity'
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
        'description' => 'getDescription',
        'discount' => 'getDiscount',
        'freight' => 'getFreight',
        'id' => 'getId',
        'quantity' => 'getQuantity'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $amount Preço
      * @var int
      */
    protected $amount;
    
    /**
      * $description Descrição do produto
      * @var string
      */
    protected $description;
    
    /**
      * $discount Desconto aplicado sobre o item
      * @var int
      */
    protected $discount;
    
    /**
      * $freight Valor do frete por produto
      * @var int
      */
    protected $freight;
    
    /**
      * $id SKU / ID do produto na loja
      * @var string
      */
    protected $id;
    
    /**
      * $quantity Quantidade de produtos
      * @var int
      */
    protected $quantity;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->amount = $data["amount"];
            $this->description = $data["description"];
            $this->discount = !empty($data["discount"]) ? $data["discount"] : 0;
            $this->freight = !empty($data["freight"]) ? $data["freight"] : 0;
            $this->id = $data["id"];
            $this->quantity = $data["quantity"];
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
     * @param int $amount Preço
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description Descrição do produto
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
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
     * @param int $discount Desconto aplicado sobre o item
     * @return $this
     */
    public function setDiscount($discount)
    {
        
        $this->discount = $discount;
        return $this;
    }
    
    /**
     * Gets freight
     * @return int
     */
    public function getFreight()
    {
        return $this->freight;
    }
  
    /**
     * Sets freight
     * @param int $freight Valor do frete por produto
     * @return $this
     */
    public function setFreight($freight)
    {
        
        $this->freight = $freight;
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
     * @param string $id SKU / ID do produto na loja
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param int $quantity Quantidade de produtos
     * @return $this
     */
    public function setQuantity($quantity)
    {
        
        $this->quantity = $quantity;
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
