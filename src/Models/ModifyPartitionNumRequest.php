<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class ModifyPartitionNumRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $addPartitionNum;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'topic'           => 'Topic',
        'regionId'        => 'RegionId',
        'addPartitionNum' => 'AddPartitionNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->addPartitionNum) {
            $res['AddPartitionNum'] = $this->addPartitionNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPartitionNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AddPartitionNum'])) {
            $model->addPartitionNum = $map['AddPartitionNum'];
        }

        return $model;
    }
}
