<?php
namespace ZWayApi;

class Controller
{
    protected $data;
    
    public function __construct(Data\Controller $data)
    {
        $this->data = $data;
    }
    
    public function getData()
    {
        return $this->data;
    }
}
