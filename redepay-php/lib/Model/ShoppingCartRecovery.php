<?php

namespace RedePay\Client\Model;

use \ArrayAccess;
/**
 * ShoppingCartRecovery Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     redepay.client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShoppingCartRecovery implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $redepayTypes = array(
        'first_alert' => 'string',
        'fourth_alert' => 'string',
        'logo_url' => 'string',
        'second_alert' => 'string',
        'third_alert' => 'string'
    );
  
    static function redepayTypes() {
        return self::$redepayTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'first_alert' => 'firstAlert',
        'fourth_alert' => 'fourthAlert',
        'logo_url' => 'logoUrl',
        'second_alert' => 'secondAlert',
        'third_alert' => 'thirdAlert'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'first_alert' => 'setFirstAlert',
        'fourth_alert' => 'setFourthAlert',
        'logo_url' => 'setLogoUrl',
        'second_alert' => 'setSecondAlert',
        'third_alert' => 'setThirdAlert'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'first_alert' => 'getFirstAlert',
        'fourth_alert' => 'getFourthAlert',
        'logo_url' => 'getLogoUrl',
        'second_alert' => 'getSecondAlert',
        'third_alert' => 'getThirdAlert'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $first_alert Configuração em horas de quando ser\u00E1 enviado o primeiro alerta
      * @var string
      */
    protected $first_alert;
    
    /**
      * $fourth_alert Configuração em horas de quando ser\u00E1 enviado o quarto alerta
      * @var string
      */
    protected $fourth_alert;
    
    /**
      * $logo_url URL para um logo customizado que ser\u00E1 aberto com a tela de fechamento do pedido
      * @var string
      */
    protected $logo_url;
    
    /**
      * $second_alert Configuração em horas de quando ser\u00E1 enviado o segundo alerta
      * @var string
      */
    protected $second_alert;
    
    /**
      * $third_alert Configuração em horas de quando ser\u00E1 enviado o terceiro alerta
      * @var string
      */
    protected $third_alert;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->first_alert = !empty($data["first_alert"]) ? $data["first_alert"] : 1;
            $this->fourth_alert = !empty($data["fourth_alert"]) ? $data["fourth_alert"] : 4;
            $this->logo_url = !empty($data["logo_url"]) ? $data["logo_url"] : '';
            $this->second_alert = !empty($data["second_alert"]) ? $data["second_alert"] : 2;
            $this->third_alert = !empty($data["third_alert"]) ? $data["third_alert"] : 3;
        }
    }
    
    /**
     * Gets first_alert
     * @return string
     */
    public function getFirstAlert()
    {
        return $this->first_alert;
    }
  
    /**
     * Sets first_alert
     * @param string $first_alert Configuração em horas de quando ser\u00E1 enviado o primeiro alerta
     * @return $this
     */
    public function setFirstAlert($first_alert)
    {
        
        $this->first_alert = $first_alert;
        return $this;
    }
    
    /**
     * Gets fourth_alert
     * @return string
     */
    public function getFourthAlert()
    {
        return $this->fourth_alert;
    }
  
    /**
     * Sets fourth_alert
     * @param string $fourth_alert Configuração em horas de quando ser\u00E1 enviado o quarto alerta
     * @return $this
     */
    public function setFourthAlert($fourth_alert)
    {
        
        $this->fourth_alert = $fourth_alert;
        return $this;
    }
    
    /**
     * Gets logo_url
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }
  
    /**
     * Sets logo_url
     * @param string $logo_url URL para um logo customizado que ser\u00E1 aberto com a tela de fechamento do pedido
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        
        $this->logo_url = $logo_url;
        return $this;
    }
    
    /**
     * Gets second_alert
     * @return string
     */
    public function getSecondAlert()
    {
        return $this->second_alert;
    }
  
    /**
     * Sets second_alert
     * @param string $second_alert Configuração em horas de quando ser\u00E1 enviado o segundo alerta
     * @return $this
     */
    public function setSecondAlert($second_alert)
    {
        
        $this->second_alert = $second_alert;
        return $this;
    }
    
    /**
     * Gets third_alert
     * @return string
     */
    public function getThirdAlert()
    {
        return $this->third_alert;
    }
  
    /**
     * Sets third_alert
     * @param string $third_alert Configuração em horas de quando ser\u00E1 enviado o terceiro alerta
     * @return $this
     */
    public function setThirdAlert($third_alert)
    {
        
        $this->third_alert = $third_alert;
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
