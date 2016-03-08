<?php
namespace ZWayApi\Factory;

use ZWayApi\Data\Factory\GenericDataFactory as DataFactory;
use ZWayApi\DataUpdate;

class DataUpdateFactory
{
    protected $dataFactory;
    
    public function __construct()
    {
        $this->dataFactory = new DataFactory;
    }
    
    public function create($objectNode)
    {
        $changes = [];
        
        foreach($objectNode as $path => $changeData) {
            if($path === 'updateTime') {
                continue;
            }
            
            $changes[$path] = $this->dataFactory->create($changeData);
        }
    
        $updateTime = new \DateTimeImmutable("@{$objectNode['updateTime']}");
    
        $dataUpdate = new DataUpdate($changes, $updateTime);
        
        return $dataUpdate;
    }
}
