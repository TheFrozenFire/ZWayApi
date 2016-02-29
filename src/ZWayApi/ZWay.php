<?php
namespace ZWayApi;

class ZWay
{
    protected $controller;
    
    protected $devices;
    
    public function __construct(Controller $controller, $devices)
    {
        $this->setController($controller);
        $this->setDevices($devices);
    }
    
    public function getController()
    {
        return $this->controller;
    }
    
    public function getDevices()
    {
        return $this->devices;
    }
    
    public function getDevice($nodeId)
    {
        return $this->devices[$nodeId];
    }
}
