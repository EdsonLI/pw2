<?php

namespace RedePay\Client\Api;

use \RedePay\Client\Configuration;
use \RedePay\Client\ApiClient;
use \RedePay\Client\ApiException;
use \RedePay\Client\ObjectSerializer;

class TransactionsApi
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
     * @return TransactionsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * deleteTrackingNumber
     *
     * Operação que deleta o tracking number de uma transação
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id da Transação (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param \RedePay\Client\Model\SellerDeleteTrackingNumberRequest $delete_tracking_number_request Corpo da requisição para a deleção do tracking number de uma transação, recebendo o motivo. Tipo de parâmetro: body (required)
     * @return void
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function deleteTrackingNumber($api_version, $id, $access_token, $delete_tracking_number_request)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteTrackingNumberWithHttpInfo ($api_version, $id, $access_token, $delete_tracking_number_request);
        return $response; 
    }


    /**
     * deleteTrackingNumberWithHttpInfo
     *
     * Operação que deleta o tracking number de uma transação
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id da Transação (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param \RedePay\Client\Model\SellerDeleteTrackingNumberRequest $delete_tracking_number_request Corpo da requisição para a deleção do tracking number de uma transação, recebendo o motivo. Tipo de parâmetro: body (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function deleteTrackingNumberWithHttpInfo($api_version, $id, $access_token, $delete_tracking_number_request)
    {
        
        // verify the required parameter 'api_version' is set
        if ($api_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_version when calling deleteTrackingNumber');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteTrackingNumber');
        }
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling deleteTrackingNumber');
        }
        // verify the required parameter 'delete_tracking_number_request' is set
        if ($delete_tracking_number_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $delete_tracking_number_request when calling deleteTrackingNumber');
        }
  
        // parse inputs
        $resourcePath = "/transactions/{id}/trackings";
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

        
        // body params
        $_tempBody = null;
        if (isset($delete_tracking_number_request)) {
            $_tempBody = $delete_tracking_number_request;
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
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * getTransaction
     *
     * Operação Obtém detalhes de uma Transação
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id da Transação (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @return \RedePay\Client\Model\SellerTransactionResponse
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function getTransaction($api_version, $id, $access_token)
    {
        list($response, $statusCode, $httpHeader) = $this->getTransactionWithHttpInfo ($api_version, $id, $access_token);
        return $response; 
    }


    /**
     * getTransactionWithHttpInfo
     *
     * Operação Obtém detalhes de uma Transação
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id da Transação (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @return Array of \RedePay\Client\Model\SellerTransactionResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function getTransactionWithHttpInfo($api_version, $id, $access_token)
    {
        
        // verify the required parameter 'api_version' is set
        if ($api_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_version when calling getTransaction');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTransaction');
        }
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling getTransaction');
        }
  
        // parse inputs
        $resourcePath = "/transactions/{id}";
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
                $headerParams, '\RedePay\Client\Model\SellerTransactionResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\RedePay\Client\ObjectSerializer::deserialize($response, '\RedePay\Client\Model\SellerTransactionResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \RedePay\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\RedePay\Client\Model\SellerTransactionResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * postTrackingNumber
     *
     * Operação que adiciona um tracking number a uma transação
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id da Transação (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param \RedePay\Client\Model\SellerTrackingNumber $tracking_number_request Corpo da requisição para a inserção de um tracking number em uma transação. Tipo de parâmetro: body (required)
     * @return void
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function postTrackingNumber($api_version, $id, $access_token, $tracking_number_request)
    {
        list($response, $statusCode, $httpHeader) = $this->postTrackingNumberWithHttpInfo ($api_version, $id, $access_token, $tracking_number_request);
        return $response; 
    }


    /**
     * postTrackingNumberWithHttpInfo
     *
     * Operação que adiciona um tracking number a uma transação
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id da Transação (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param \RedePay\Client\Model\SellerTrackingNumber $tracking_number_request Corpo da requisição para a inserção de um tracking number em uma transação. Tipo de parâmetro: body (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function postTrackingNumberWithHttpInfo($api_version, $id, $access_token, $tracking_number_request)
    {
        
        // verify the required parameter 'api_version' is set
        if ($api_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_version when calling postTrackingNumber');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling postTrackingNumber');
        }
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling postTrackingNumber');
        }
        // verify the required parameter 'tracking_number_request' is set
        if ($tracking_number_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tracking_number_request when calling postTrackingNumber');
        }
  
        // parse inputs
        $resourcePath = "/transactions/{id}/trackings";
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

        
        // body params
        $_tempBody = null;
        if (isset($tracking_number_request)) {
            $_tempBody = $tracking_number_request;
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
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * postTransactionReversal
     *
     * Operação que estorna uma transação
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id da Transação (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param \RedePay\Client\Model\TransactionReversalJsonRequest $transaction_reversal Corpo da requisição da solicitação de estorno de transação. Recebe o valor da transação. Tipo de parâmetro: body (required)
     * @return void
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function postTransactionReversal($api_version, $id, $access_token, $transaction_reversal)
    {
        list($response, $statusCode, $httpHeader) = $this->postTransactionReversalWithHttpInfo ($api_version, $id, $access_token, $transaction_reversal);
        return $response; 
    }


    /**
     * postTransactionReversalWithHttpInfo
     *
     * Operação que estorna uma transação
     *
     * @param string $api_version versão  da api (required)
     * @param string $id id da Transação (required)
     * @param string $access_token Token de acesso para quem esta efetuando a chamada aos recursos disponibilizados através da API. Tipo de parâmetro: header (required)
     * @param \RedePay\Client\Model\TransactionReversalJsonRequest $transaction_reversal Corpo da requisição da solicitação de estorno de transação. Recebe o valor da transação. Tipo de parâmetro: body (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \RedePay\Client\ApiException on non-2xx response
     */
    public function postTransactionReversalWithHttpInfo($api_version, $id, $access_token, $transaction_reversal)
    {
        
        // verify the required parameter 'api_version' is set
        if ($api_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_version when calling postTransactionReversal');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling postTransactionReversal');
        }
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling postTransactionReversal');
        }
        // verify the required parameter 'transaction_reversal' is set
        if ($transaction_reversal === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transaction_reversal when calling postTransactionReversal');
        }
  
        // parse inputs
        $resourcePath = "/transactions/{id}/refunds";
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

        
        // body params
        $_tempBody = null;
        if (isset($transaction_reversal)) {
            $_tempBody = $transaction_reversal;
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
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
}
