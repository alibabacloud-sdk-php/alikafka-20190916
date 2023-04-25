<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class GetConsumerProgressRequest extends Model
{
    /**
     * @description The region ID of the instance.
     *
     * @example kafka-test
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description The name of the consumer group.
     *
     * @example alikafka_pre-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The HTTP status code returned. The HTTP status code 200 indicates that the request is successful.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'consumerId' => 'ConsumerId',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
