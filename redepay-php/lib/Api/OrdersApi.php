<?php

namespace RedePay\Client\Api;

use \RedePay\Client\Configuration;
use \RedePay\Client\ApiClient;
use \RedePay\Client\ApiException;
use \RedePay\Client\ObjectSerializer;

class OrdersApi
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
     * @return OrdersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * createOrder
     *
     * Operação que cria um pedido
     *
     * @param string $api_version versão  da api (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param \RedePay\Client\Model\SellerCheckoutProduct $order Pedido. Tipo de parâmetro: body (required)
     * @return \RedePay\Client\Model\SellerCheckoutProductResponseData
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function createOrder($api_version, $access_token, $order)
    {
        list($response, $statusCode, $httpHeader) = $this->createOrderWithHttpInfo ($api_version, $access_token, $order);
        return $response; 
    }


    /**
     * createOrderWithHttpInfo
     *
     * Operação que cria um pedido
     *
     * @param string $api_version versão  da api (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param \RedePay\Client\Model\SellerCheckoutProduct $order Pedido. Tipo de parâmetro: body (required)
     * @return Array of \RedePay\Client\Model\SellerCheckoutProductResponseData, HTTP status code, HTTP response headers (array of strings)
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function createOrderWithHttpInfo($api_version, $access_token, $order)
    {
        
        // verify the required parameter 'api_version' is set
        if ($api_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_version when calling createOrder');
        }
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling createOrder');
        }
        // verify the required parameter 'order' is set
        if ($order === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order when calling createOrder');
        }
  
        // parse inputs
        $resourcePath = "/orders";
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
        
        if ($api_version !== null) {
            $headerParams['api-version'] = $this->apiClient->getSerializer()->toHeaderValue($api_version);
        }// header params
        
        if ($access_token !== null) {
            $headerParams['access-token'] = $this->apiClient->getSerializer()->toHeaderValue($access_token);
        }
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($order)) {
            $_tempBody = $order;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\RedePay\Client\Model\SellerCheckoutProductResponseData'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\RedePay\Client\ObjectSerializer::deserialize($response, '\RedePay\Client\Model\SellerCheckoutProductResponseData', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 201:
                $data = \RedePay\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\RedePay\Client\Model\SellerCheckoutProductResponseData', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getOrder
     *
     * Obtém detalhes de um pedido
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id do pedido (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @return \RedePay\Client\Model\OrderDetailsResponseJson
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function getOrder($api_version, $id, $access_token)
    {
        list($response, $statusCode, $httpHeader) = $this->getOrderWithHttpInfo ($api_version, $id, $access_token);
        return $response; 
    }


    /**
     * getOrderWithHttpInfo
     *
     * Obtém detalhes de um pedido
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id do pedido (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @return Array of \RedePay\Client\Model\OrderDetailsResponseJson, HTTP status code, HTTP response headers (array of strings)
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function getOrderWithHttpInfo($api_version, $id, $access_token)
    {
        
        // verify the required parameter 'api_version' is set
        if ($api_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_version when calling getOrder');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getOrder');
        }
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling getOrder');
        }
  
        // parse inputs
        $resourcePath = "/orders/{id}";
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
        
        if ($api_version !== null) {
            $headerParams['api-version'] = $this->apiClient->getSerializer()->toHeaderValue($api_version);
        }// header params
        
        if ($access_token !== null) {
            $headerParams['access-token'] = $this->apiClient->getSerializer()->toHeaderValue($access_token);
        }
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
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
                $headerParams, '\RedePay\Client\Model\OrderDetailsResponseJson'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\RedePay\Client\ObjectSerializer::deserialize($response, '\RedePay\Client\Model\OrderDetailsResponseJson', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \RedePay\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\RedePay\Client\Model\OrderDetailsResponseJson', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
