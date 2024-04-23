<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class CreateSaslUserRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example alikafka_pre-cn-v0h1cng0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The encryption method. Valid values:
     *
     *   SCRAM-SHA-512 (default)
     *   SCRAM-SHA-256
     *
     * >
     *
     *   This parameter is available only for ApsaraMQ for Kafka V3 serverless instances.
     *
     * @example SCRAM-SHA-256
     *
     * @var string
     */
    public $mechanism;

    /**
     * @description The password of the SASL user.
     *
     * @example 12***
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The SASL mechanism. Valid values:
     *
     *   **plain**: a simple mechanism that uses usernames and passwords to verify user identities. Message Queue for Apache Kafka provides an optimized PLAIN mechanism that allows you to dynamically create SASL users for an instance without the need to restart the instance.
     *   **scram**: a mechanism that uses usernames and passwords to verify user identities. This mechanism provides better security protection than the PLAIN mechanism. Message Queue for Apache Kafka uses SCRAM-SHA-256.
     *
     * Default value: **plain**.
     * @example plain
     *
     * @var string
     */
    public $type;

    /**
     * @description The name of the SASL user.
     *
     * @example test***
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mechanism'  => 'Mechanism',
        'password'   => 'Password',
        'regionId'   => 'RegionId',
        'type'       => 'Type',
        'username'   => 'Username',
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
        if (null !== $this->mechanism) {
            $res['Mechanism'] = $this->mechanism;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSaslUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mechanism'])) {
            $model->mechanism = $map['Mechanism'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
