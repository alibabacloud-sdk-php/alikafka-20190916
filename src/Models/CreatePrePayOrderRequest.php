<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderRequest\confluentConfig;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderRequest\tag;
use AlibabaCloud\Tea\Model;

class CreatePrePayOrderRequest extends Model
{
    /**
     * @description The configurations of ApsaraMQ for Confluent components.
     *
     * @var confluentConfig
     */
    public $confluentConfig;

    /**
     * @description The deployment mode of the instance. Valid values:
     *
     *   **4**: deploys the instance that allows access from the Internet and a VPC.
     *   **5**: deploys the instance that allows access only from a VPC.
     *
     * @example 5
     *
     * @var int
     */
    public $deployType;

    /**
     * @description The disk size. Unit: GB.
     *
     * For more information about the valid values, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     * @example 500
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The disk type. Valid values:
     *
     *   **0**: ultra disk
     *   **1**: standard SSD
     *
     * @example 0
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The subscription duration. Unit: months. Default value: 1. Valid values:
     *
     *   **1 to 12**
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The Internet traffic for the instance.
     *
     *   This parameter is required if the **DeployType** parameter is set to **4**.
     *   For more information about the valid values, see [Pay-as-you-go](https://help.aliyun.com/document_detail/72142.html).
     *
     * @example 0
     *
     * @var int
     */
    public $eipMax;

    /**
     * @description The maximum traffic for the instance. We recommend that you do not configure this parameter.
     *
     *   You must configure at least one of the **IoMax** and **IoMaxSpec** parameters. If both parameters are configured, the value of the **IoMaxSpec** parameter takes effect. We recommend that you configure only the **IoMaxSpec** parameter.
     *   For more information about the valid values, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example 20
     *
     * @var int
     */
    public $ioMax;

    /**
     * @description The traffic specification of the instance. We recommend that you configure this parameter.
     *
     *   You must configure at least one of the **IoMax** and **IoMaxSpec** parameters. If both parameters are configured, the value of the **IoMaxSpec** parameter takes effect. We recommend that you configure only the **IoMaxSpec** parameter.
     *   For more information about the valid values, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example alikafka.hw.2xlarge
     *
     * @var string
     */
    public $ioMaxSpec;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **0**: the subscription billing method
     *   **4**: the subscription billing method for ApsaraMQ for Confluent instances
     *
     * @example 1
     *
     * @var int
     */
    public $paidType;

    /**
     * @description The number of partitions. We recommend that you configure this parameter.
     *
     *   You must specify at least one of the PartitionNum and TopicQuota parameters. We recommend that you configure only the PartitionNum parameter.
     *   If you specify both parameters, the topic-based sales model is used to check whether the PartitionNum value and the TopicQuota value are the same. If they are not the same, a failure response is returned. If they are the same, the order is placed based on the PartitionNum value.
     *   For more information about the valid values, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example 50
     *
     * @var int
     */
    public $partitionNum;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * If this parameter is left empty, the default resource group is used. You can view the resource group ID on the Resource Group page in the Resource Management console.
     * @example rg-ac***********7q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The edition of the instance. Valid values:
     *
     *   **normal**: Standard Edition (High Write)
     *   **professional**: Professional Edition (High Write)
     *   **professionalForHighRead**: Professional Edition (High Read)
     *
     * For more information, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     * @example normal
     *
     * @var string
     */
    public $specType;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The number of topics. We recommend that you do not configure this parameter.
     *
     *   You must specify at least one of the PartitionNum and TopicQuota parameters. We recommend that you configure only the PartitionNum parameter.
     *   If you specify both parameters, the topic-based sales model is used to check whether the PartitionNum value and the TopicQuota value are the same. If they are not the same, a failure response is returned. If they are the same, the order is placed based on the PartitionNum value.
     *   The default value of the TopicQuota parameter varies based on the value of the IoMaxSpec parameter. If the number of topics that you consume exceeds the default value, you are charged additional fees.
     *   For more information about the valid values, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example 50
     *
     * @var int
     */
    public $topicQuota;
    protected $_name = [
        'confluentConfig' => 'ConfluentConfig',
        'deployType'      => 'DeployType',
        'diskSize'        => 'DiskSize',
        'diskType'        => 'DiskType',
        'duration'        => 'Duration',
        'eipMax'          => 'EipMax',
        'ioMax'           => 'IoMax',
        'ioMaxSpec'       => 'IoMaxSpec',
        'paidType'        => 'PaidType',
        'partitionNum'    => 'PartitionNum',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'specType'        => 'SpecType',
        'tag'             => 'Tag',
        'topicQuota'      => 'TopicQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confluentConfig) {
            $res['ConfluentConfig'] = null !== $this->confluentConfig ? $this->confluentConfig->toMap() : null;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->eipMax) {
            $res['EipMax'] = $this->eipMax;
        }
        if (null !== $this->ioMax) {
            $res['IoMax'] = $this->ioMax;
        }
        if (null !== $this->ioMaxSpec) {
            $res['IoMaxSpec'] = $this->ioMaxSpec;
        }
        if (null !== $this->paidType) {
            $res['PaidType'] = $this->paidType;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topicQuota) {
            $res['TopicQuota'] = $this->topicQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePrePayOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfluentConfig'])) {
            $model->confluentConfig = confluentConfig::fromMap($map['ConfluentConfig']);
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EipMax'])) {
            $model->eipMax = $map['EipMax'];
        }
        if (isset($map['IoMax'])) {
            $model->ioMax = $map['IoMax'];
        }
        if (isset($map['IoMaxSpec'])) {
            $model->ioMaxSpec = $map['IoMaxSpec'];
        }
        if (isset($map['PaidType'])) {
            $model->paidType = $map['PaidType'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopicQuota'])) {
            $model->topicQuota = $map['TopicQuota'];
        }

        return $model;
    }
}
