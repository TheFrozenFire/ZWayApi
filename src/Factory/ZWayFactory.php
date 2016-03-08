<?php
namespace ZWayApi\Factory;

use ZWayApi\ZWay;

class ZWayFactory
{
    protected $controllerFactory;
    
    protected $deviceFactory;
    
    public function __construct()
    {
        $this->controllerFactory = new ControllerFactory;
        $this->deviceFactory = new DeviceFactory;
    }
    
    public function create($objectNode)
    {
        $controller = $this->controllerFactory
                           ->create($objectNode['controller']);
        
        $devices = [];
        foreach($objectNode['devices'] as $nodeId => $deviceNode) {
            $device = $this->deviceFactory
                           ->create($deviceNode);
           
            $devices[$nodeId] = $device;
        }
        
        $updateTime = new \DateTimeImmutable("@{$objectNode['updateTime']}");
        
        $zWay = new ZWay($controller, $devices, $updateTime);
        
        return $zWay;
    }
}
