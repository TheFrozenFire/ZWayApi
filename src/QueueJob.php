<?php
namespace ZWayApi;

class QueueJob
{
    protected $timeout;
    
    protected $flags;
    
    protected $nodeId;
    
    protected $description;
    
    protected $status;
    
    protected $buffer;
    
    public function __construct(
        $timeout,
        $flags,
        $nodeId,
        $description,
        $status,
        $buffer
    )
    {
        $this->timeout = $timeout;
        $this->flags = $flags;
        $this->nodeId = $nodeId;
        $this->description = $description;
        $this->status = $status;
        $this->buffer = $buffer;
    }
}
