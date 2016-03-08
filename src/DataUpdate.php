<?php
namespace ZWayApi;

class DataUpdate
{
    protected $changes;

    protected $updateTime;
    
    public function __construct($changes, \DateTimeInterface $updateTime)
    {
        $this->changes = $changes;
        $this->updateTime = $updateTime;
    }
    
    public function getChanges()
    {
        return $this->changes;
    }
    
    public function getChange($path)
    {
        return $this->changes[$path];
    }
    
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
