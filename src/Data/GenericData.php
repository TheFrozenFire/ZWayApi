<?php
namespace ZWayApi\Data;

class GenericData
{
    protected $value;
    
    protected $name;
    
    protected $type;
    
    protected $updateTime;
    
    protected $invalidateTime;
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
    
    public function getInvalidateTime()
    {
        return $this->invalidateTime;
    }
}
