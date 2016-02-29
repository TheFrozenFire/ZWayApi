<?php
namespace ZWayApi;

class Device
{
    protected $data;
    
    protected $instances;
    
    public function __construct(
        Data\Device $data,
        $instances
    )
    {
        $this->data = $data;
        $this->instances = $instances;
    }
    
    public function getData()
    {
        return $this->data;
    }
    
    public function getInstances()
    {
        return $this->instances;
    }
    
    public function getInstance($instanceId)
    {
        return $this->instances[$instanceId];
    }
}
