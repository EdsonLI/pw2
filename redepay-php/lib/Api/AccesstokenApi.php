<?php

namespace RedePay\Client\Api;

use \RedePay\Client\Configuration;
use \RedePay\Client\ApiClient;
use \RedePay\Client\ApiException;
use \RedePay\Client\ObjectSerializer;

class AccesstokenApi
{

    /**
     * API Client
     * @var \RedePay\Client\ApiClient  instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \RedePay\Client\ApiClient |null $apiClient The api client to use
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
     * @return \RedePay\Client\ApiClient  get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \RedePay\Client\ApiClient  $apiClient set the API client
     * @return AccesstokenApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * createAccessToken
     *
     * Operação que cria um pedido
     *
     * @param string $grant_type Tipo de fluxo do OAuth a ser utilizado. Tipo de parâmetro: query (required)
     * @param string $code Código de autorização recebido pelo fluxo de autorização code. Tipo de parâmetro: query (required)
     * @param string $redirect_uri URL de redirecionamento utilizado no fluxo de authorization code. Tipo de parâmetro: query (required)
     * @param string $authorization Header de basic authentication que recebe client ID e secret em base64. Tipo de parâmetro: Header (required)
     * @return \RedePay\Client\Model\SellerAccessTokenResponse
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function createAccessToken($grant_type, $code, $redirect_uri, $authorization)
    {
        list($response, $statusCode, $httpHeader) = $this->createAccessTokenWithHttpInfo ($grant_type, $code, $redirect_uri, $authorization);
        return $response; 
    }


    /**
     * createAccessTokenWithHttpInfo
     *
     * Operação que cria um pedido
     *
     * @param string $grant_type Tipo de fluxo do OAuth a ser utilizado. Tipo de parâmetro: query (required)
     * @param string $code Código de autorização recebido pelo fluxo de autorização code. Tipo de parâmetro: query (required)
     * @param string $redirect_uri URL de redirecionamento utilizado no fluxo de authorization code. Tipo de parâmetro: query (required)
     * @param string $authorization Header de basic authentication que recebe client ID e secret em base64. Tipo de parâmetro: Header (required)
     * @return Array of \RedePay\Client\Model\SellerAccessTokenResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function createAccessTokenWithHttpInfo($grant_type, $code, $redirect_uri, $authorization)
    {
        
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_type when calling createAccessToken');
        }
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling createAccessToken');
        }
        // verify the required parameter 'redirect_uri' is set
        if ($redirect_uri === null) {
            throw new \InvalidArgumentException('Missing the required parameter $redirect_uri when calling createAccessToken');
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling createAccessToken');
        }
  
        // parse inputs
        $resourcePath = "/oauth/access_token";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($grant_type !== null) {
            $queryParams['grant_type'] = $this->apiClient->getSerializer()->toQueryValue($grant_type);
        }// query params
        
        if ($code !== null) {
            $queryParams['code'] = $this->apiClient->getSerializer()->toQueryValue($code);
        }// query params
        
        if ($redirect_uri !== null) {
            $queryParams['redirect_uri'] = $this->apiClient->getSerializer()->toQueryValue($redirect_uri);
        }
        // header params
        
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\RedePay\Client\Model\SellerAccessTokenResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\RedePay\Client\ObjectSerializer::deserialize($response, '\RedePay\Client\Model\SellerAccessTokenResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \RedePay\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\RedePay\Client\Model\SellerAccessTokenResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
