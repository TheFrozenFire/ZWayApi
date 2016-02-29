<?php
namespace ZWayApi\Factory;

use ZWayApi\Data\Factory\GenericDataFactory as DataFactory;
use ZWayApi\Data;
use ZWayApi\Controller;

class ControllerFactory
{
    protected $dataFactory;
    
    public function __construct()
    {
        $this->dataFactory = new DataFactory;
    }
    
    public function create($objectNode)
    {
        $data = $this->dataFactory
                     ->create($objectNode['data'], new Data\Controller);
        
        $controller = new Controller($data);
        
        return $controller;
    }
}
