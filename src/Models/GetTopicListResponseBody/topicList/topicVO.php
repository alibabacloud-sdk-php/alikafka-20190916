<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList\topicVO\tags;
use AlibabaCloud\Tea\Model;

class topicVO extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoCreate;

    /**
     * @description The region ID of the instance whose topics were queried.
     *
     * @example false
     *
     * @var bool
     */
    public $compactTopic;

    /**
     * @description Running
     *
     * @example 1576563109000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The tags.
     *
     * @example alikafka_pre-cn-0pp1954n****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The key of the tag.
     *
     * @example false
     *
     * @var bool
     */
    public $localTopic;

    /**
     * @description The name of the topic. Valid values:
     *
     *   The name contains only letters, digits, hyphens (-), and underscores (\_).
     *   The name is 3 to 64 characters in length. If the name that you specified contains more than 64 characters, the returned name is automatically truncated.
     *
     * @example 6
     *
     * @var int
     */
    public $partitionNum;

    /**
     * @description The value of the tag.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the topic. Valid values:
     *
     **Running**
     *
     * If the topic is deleted, this parameter is not returned.
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The timestamp that indicates when the topic was created. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the instance
     *
     * @example The storage type used by the topic. Valid values:
     *
     *   false: The topic uses cloud storage.
     *   true: The topic uses local storage.
     *
     * @var string
     */
    public $statusName;

    /**
     * @description Indicates whether the topic was automatically created.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The log cleanup policy that is used for the topic. This parameter is returned when the **LocalTopic** parameter is set to **true**. Valid values:
     *
     *   false: The topic uses the delete policy.
     *   true: The topic uses the compact policy.
     *
     * @example topic_name
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'autoCreate'   => 'AutoCreate',
        'compactTopic' => 'CompactTopic',
        'createTime'   => 'CreateTime',
        'instanceId'   => 'InstanceId',
        'localTopic'   => 'LocalTopic',
        'partitionNum' => 'PartitionNum',
        'regionId'     => 'RegionId',
        'remark'       => 'Remark',
        'status'       => 'Status',
        'statusName'   => 'StatusName',
        'tags'         => 'Tags',
        'topic'        => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreate) {
            $res['AutoCreate'] = $this->autoCreate;
        }
        if (null !== $this->compactTopic) {
            $res['CompactTopic'] = $this->compactTopic;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->localTopic) {
            $res['LocalTopic'] = $this->localTopic;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topicVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreate'])) {
            $model->autoCreate = $map['AutoCreate'];
        }
        if (isset($map['CompactTopic'])) {
            $model->compactTopic = $map['CompactTopic'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LocalTopic'])) {
            $model->localTopic = $map['LocalTopic'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
