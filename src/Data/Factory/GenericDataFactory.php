<?php
namespace ZWayApi\Data\Factory;

use Zend\Hydrator;
use ZWayApi\Data\GenericData;

class GenericDataFactory implements Hydrator\HydratorAwareInterface
{
    use Hydrator\HydratorAwareTrait;
    
    protected $dataValueFactory;
    
    public function __construct()
    {
        $this->setHydrator(new Hydrator\Reflection);
        $this->dataValueFactory = new DataValueFactory;
    }
    
    public function create($data, GenericData $object = null)
    {
        if(is_null($object)) {
            $object = new GenericData;
        }
        
        $newData = [];
        foreach($data as $key => $valueData) {
            $dataValue = $this->dataValueFactory
                              ->create($valueData);
            
            $newData[$key] = $dataValue;
        }
        
        $this->getHydrator()
            ->hydrate($data, $object);
        
        return $object;
    }
}
