<?php
namespace ZWayApi;

class ZWay
{
    protected $controller;
    
    protected $devices;
    
    protected $updateTime;
    
    public function __construct(Controller $controller, $devices, \DateTimeInterface $updateTime)
    {
        $this->controller = $controller;
        $this->devices = $devices;
        $this->updateTime = $updateTime;
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
    
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
