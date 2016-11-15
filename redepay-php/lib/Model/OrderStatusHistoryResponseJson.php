<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * OrderStatusHistoryResponseJson Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderStatusHistoryResponseJson implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'date' => 'string',
        'reason' => 'string',
        'responsible' => 'string',
        'status' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'date' => 'date',
        'reason' => 'reason',
        'responsible' => 'responsible',
        'status' => 'status'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'date' => 'setDate',
        'reason' => 'setReason',
        'responsible' => 'setResponsible',
        'status' => 'setStatus'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'date' => 'getDate',
        'reason' => 'getReason',
        'responsible' => 'getResponsible',
        'status' => 'getStatus'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $date Data
      * @var string
      */
    protected $date;
    
    /**
      * $reason Motivo da mudança de status
      * @var string
      */
    protected $reason;
    
    /**
      * $responsible Usu\u00E1rio respons\u00E1vel pela mudança de status
      * @var string
      */
    protected $responsible;
    
    /**
      * $status Status do pedido
      * @var string
      */
    protected $status;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->date = $data["date"];
            $this->reason = $data["reason"];
            $this->responsible = $data["responsible"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets date
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
  
    /**
     * Sets date
     * @param string $date Data
     * @return $this
     */
    public function setDate($date)
    {
        
        $this->date = $date;
        return $this;
    }
    
    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
  
    /**
     * Sets reason
     * @param string $reason Motivo da mudança de status
     * @return $this
     */
    public function setReason($reason)
    {
        
        $this->reason = $reason;
        return $this;
    }
    
    /**
     * Gets responsible
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }
  
    /**
     * Sets responsible
     * @param string $responsible Usu\u00E1rio respons\u00E1vel pela mudança de status
     * @return $this
     */
    public function setResponsible($responsible)
    {
        
        $this->responsible = $responsible;
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
