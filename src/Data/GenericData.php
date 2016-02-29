<?php
namespace ZWayApi\Data;

class GenericData
{
    protected $value;
    
    protected $type;
    
    protected $updateTime;
    
    protected $invalidateTime;
    
    public function getValue()
    {
        return $this->value;
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
