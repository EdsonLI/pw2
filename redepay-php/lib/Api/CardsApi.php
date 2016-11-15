<?php

namespace RedePay\Client\Api;

use \RedePay\Client\Configuration;
use \RedePay\Client\ApiClient;
use \RedePay\Client\ApiException;
use \RedePay\Client\ObjectSerializer;

class CardsApi
{

    /**
     * API Client
     * @var \RedePay\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \RedePay\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.useredepay.com.br');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \RedePay\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \RedePay\Client\ApiClient $apiClient set the API client
     * @return CardsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * cards
     *
     * Operação Obtém lista de cartões do Customer
     *
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param string $version versão  da api (optional)
     * @return \RedePay\Client\Model\CardJwt
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function cards($access_token, $version = null)
    {
        list($response, $statusCode, $httpHeader) = $this->cardsWithHttpInfo ($access_token, $version);
        return $response; 
    }


    /**
     * cardsWithHttpInfo
     *
     * Operação Obtém lista de cartões do Customer
     *
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param string $version versão  da api (optional)
     * @return Array of \RedePay\Client\Model\CardJwt, HTTP status code, HTTP response headers (array of strings)
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function cardsWithHttpInfo($access_token, $version = null)
    {
        
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling cards');
        }
  
        // parse inputs
        $resourcePath = "/payers/cards";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        // header params
        
        if ($version !== null) {
            $headerParams['version'] = $this->apiClient->getSerializer()->toHeaderValue($version);
        }// header params
        
        if ($access_token !== null) {
            $headerParams['access-token'] = $this->apiClient->getSerializer()->toHeaderValue($access_token);
        }
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\RedePay\Client\Model\CardJwt'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\RedePay\Client\ObjectSerializer::deserialize($response, '\RedePay\Client\Model\CardJwt', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \RedePay\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\RedePay\Client\Model\CardJwt', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
