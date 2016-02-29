<?php
namespace ZWayApi;

use Zend\Http\Client as HttpClient;

class Client
{
    protected $httpClient;

    protected $baseUrl;
    
    protected $basePath;
    
    public function __construct($baseUrl, $basePath = '/ZWaveAPI')
    {
        $this->setBaseUrl($baseUrl);
        $this->setBasePath($basePath);
        
        $this->setHttpClient(new HttpClient);
    }
    
    public function run()
    {
        
    }
    
    public function inspectQueue()
    {
    
    }
    
    public function data()
    {
    
    }
    
    public function getHttpClient()
    {
        return $this->httpClient;
    }
    
    protected function setHttpClient(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
        return $this;
    }
    
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }
    
    protected function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }
    
    public function getBasePath()
    {
        return $this->basePath;
    }
    
    protected function setBasePath($basePath)
    {
        $this->basePath = $basePath;
        return $this;
    }
}
