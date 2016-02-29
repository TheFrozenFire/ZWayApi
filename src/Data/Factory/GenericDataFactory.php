<?php
namespace ZWayApi\Data\Factory;

use Zend\Hydrator;
use ZWayApi\Data\GenericData;

class GenericDataFactory implements Hydrator\HydratorAwareInterface
{
    use Hydrator\HydratorAwareTrait;
    
    public function __construct()
    {
        $this->setHydrator(new Hydrator\Reflection);
    }
    
    public function create($data, GenericData $object = null)
    {
        if(is_null($object)) {
            $object = new GenericData;
        }
        
        $newData = [];
        foreach($data as $key => $valueData) {
            if(is_array($valueData)) {
                $dataValue = $this->create($valueData);
            } else {
                $dataValue = $valueData;
            }
            
            $newData[$key] = $dataValue;
        }
        
        $this->getHydrator()
            ->hydrate($newData, $object);
        
        return $object;
    }
}
