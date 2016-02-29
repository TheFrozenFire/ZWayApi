<?php
namespace ZWayApi;

class Instance
{
    protected $data;
    
    protected $commandClasses;
    
    public function __construct(
        Data\Instance $data,
        $commandClasses
    )
    {
        $this->data = $data;
        $this->commandClasses = $commandClasses;
    }
    
    public function getData()
    {
        return $this->data;
    }
    
    public function getCommandClasses()
    {
        return $this->commandClasses;
    }
    
    public function getCommandClass($id)
    {
        return $this->commandClasses[$id];
    }
}
