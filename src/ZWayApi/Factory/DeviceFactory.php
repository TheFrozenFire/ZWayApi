<?php
namespace ZWayApi\Factory;

use ZWayApi\Device;
use ZWayApi\Data\Factory\GenericDataFactory as DataFactory;
use ZWayApi\Data;

class DeviceFactory
{
    protected $dataFactory;
    
    protected $instanceFactory;
    
    public function __construct()
    {
        $this->dataFactory = new DataFactory;
        $this->instanceFactory = new InstanceFactory;
    }
    
    public function create($deviceNode)
    {
        $data = $this->dataFactory
                     ->create($deviceNode['data'], new Data\Device);
        
        $instances = [];
        foreach($deviceNode['instances'] as $instanceId => $instanceNode) {
            $instance = $this->instanceFactory
                             ->create($instanceNode);
            
            $instances[$instanceId] = $instance;
        }
        
        $device = new Device($data, $instances);
        
        return $device;
    }
}
