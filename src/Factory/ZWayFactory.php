<?php
namespace ZWayApi\Factory;

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
        
        $zWay = new ZWay($controller, $devices);
        
        return $zWay;
    }
}
