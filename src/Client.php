<?php
namespace ZWayApi;

use Zend\Http\Client as HttpClient;
use Zend\Http\Request as HttpRequest;

class Client
{
    protected $httpClient;

    protected $baseUrl;
    
    public function __construct($baseUrl, HttpClient $httpClient = null)
    {
        $this->baseUrl = $baseUrl;
        
        $this->httpClient = $httpClient ?: new HttpClient;
    }
    
    public function setCredentials($username, $password)
    {
        $this->httpClient->setAuth($username, $password);
    }
    
    public function Run()
    {
        
    }
    
    public function InspectQueue()
    {
    
    }
    
    public function Data(\DateTime $timestamp = null)
    {
        $uri = "{$this->baseUrl}/Data";
        if($timestamp) {
            $uri .= "/{$timestamp->format('U')}";
        }
    
        $request = new HttpRequest;
        $request->setUri($uri);
        
        $response = $this->httpClient->send($request);
        
        if($response->isSuccess()) {
            $data = json_decode($response->getBody(), true);
            if($data === null) {
                throw new \RuntimeException('Cannot decode API response');
            }
            
            if($timestamp) {
                return (new Factory\DataUpdateFactory)->create($data);
            } else {
                return (new Factory\ZWayFactory)->create($data);
            }
        } else {
            throw new \RuntimeException($response->getBody(), $response->getStatusCode());
        }
    }
}
