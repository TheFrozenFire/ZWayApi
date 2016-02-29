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
        
        $this->getHydrator()
            ->hydrate($data, $object);
        
        return $object;
    }
}
