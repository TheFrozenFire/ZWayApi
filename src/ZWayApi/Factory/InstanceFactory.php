<?php
namespace ZWayApi\Factory;

use ZWayApi\Instance;
use ZWayApi\Data\Factory\GenericDataFactory as DataFactory;
use ZWayApi\Data;

class InstanceFactory
{
    protected $dataFactory;
    
    protected $commandClassFactory;
    
    public function __construct()
    {
        $this->dataFactory = new DataFactory;
        $this->commandClassFactory = new CommandClassFactory;
    }
    
    public function create($objectNode)
    {
        $data = $this->dataFactory
                     ->create($objectNode['data'], new Data\Instance);
        
        $commandClasses = [];
        foreach($objectNode['commandClasses'] as $commandClassId => $commandClassNode) {
            $commandClass = $this->commandClassFactory
                                 ->create($commandClassNode);
            
            $commandClasses[$commandClassId] = $commandClass;
        }
        
        $instance = new Instance($data, $commandClasses);
        
        return $instance;
    }
}
