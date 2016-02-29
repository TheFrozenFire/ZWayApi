<?php
namespace ZWayApi\Data\Factory;

use ZWayApi\Data\DataValue;

class DataValueFactory
{
    public function create($valueData)
    {
        $dataValue = new DataValue(
            $valueData['value'],
            $valueData['type'],
            $valueData['invalidateTime'],
            $valueData['updateTime']
        );
    }
}
