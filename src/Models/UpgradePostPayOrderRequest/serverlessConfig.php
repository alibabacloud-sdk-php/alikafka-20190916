<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePostPayOrderRequest;

use AlibabaCloud\Tea\Model;

class serverlessConfig extends Model
{
    /**
     * @description The traffic reserved for message publishing. Unit: MB/s. Valid values: 1 to 31457280. You can specify only integers for this parameter.
     *
     * @example 50
     *
     * @var int
     */
    public $reservedPublishCapacity;

    /**
     * @description The traffic reserved for message subscription. Unit: MB/s. Valid values: 1 to 31457280. You can specify only integers for this parameter.
     *
     * @example 50
     *
     * @var int
     */
    public $reservedSubscribeCapacity;
    protected $_name = [
        'reservedPublishCapacity'   => 'ReservedPublishCapacity',
        'reservedSubscribeCapacity' => 'ReservedSubscribeCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedPublishCapacity) {
            $res['ReservedPublishCapacity'] = $this->reservedPublishCapacity;
        }
        if (null !== $this->reservedSubscribeCapacity) {
            $res['ReservedSubscribeCapacity'] = $this->reservedSubscribeCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverlessConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedPublishCapacity'])) {
            $model->reservedPublishCapacity = $map['ReservedPublishCapacity'];
        }
        if (isset($map['ReservedSubscribeCapacity'])) {
            $model->reservedSubscribeCapacity = $map['ReservedSubscribeCapacity'];
        }

        return $model;
    }
}
