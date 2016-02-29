<?php
namespace ZWayApi\Factory;

use ZWayApi\CommandClass;
use ZWayApi\Data\Factory\GenericDataFactory as DataFactory;
use ZWayApi\Data;

class CommandClassFactory
{
    protected $dataFactory;
    
    public function __construct()
    {
        $this->dataFactory = new DataFactory;
    }
    
    public function create($commandClassNode)
    {
        $name = $commandClassNode['name'];
    
        $data = $this->dataFactory
                     ->create($commandClassNode['data'], new Data\CommandClass);
        
        $commandClass = new CommandClass($name, $data);
        
        return $commandClass;
    }
}
