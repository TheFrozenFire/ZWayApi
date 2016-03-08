<?php
namespace ZWayApi\Factory;

use ZWayApi\QueueJob;

class QueueJobFactory
{
    public function create($data)
    {
        $job = new QueueJob(
            $data[0],
            $data[1],
            $data[2],
            $data[3],
            $data[4],
            $data[5]
        );
        
        return $job;
    }
}
