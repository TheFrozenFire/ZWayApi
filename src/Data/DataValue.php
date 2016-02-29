<?php
namespace ZWayApi\Data;

class DataValue
{
    protected $value;
    
    protected $type;
    
    protected $invalidateTime;
    
    protected $updateTime;
    
    public function __construct(
        $value,
        $type,
        $invalidateTime,
        $updateTime
    )
    {
        $this->value = $value;
        $this->type = $type;
        $this->invalidateTime = $invalidateTime;
        $this->updateTime = $updateTime;
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getInvalidateTime()
    {
        return $this->invalidateTime;
    }
    
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
