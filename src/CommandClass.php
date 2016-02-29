<?php
namespace ZWayApi;

class CommandClass
{
    protected $name;

    protected $data;
    
    public function __construct(
        $name,
        Data\CommandClass $data
    )
    {
        $this->name = $name;
        $this->data = $data;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getData()
    {
        return $this->data;
    }
}
