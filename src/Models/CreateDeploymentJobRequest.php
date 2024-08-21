<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateDeploymentJobRequest extends Model
{
    /**
     * @description The certificate IDs.
     *
     * This parameter is required.
     * @example 12342649,12304338,12067351,9957285
     *
     * @var string
     */
    public $certIds;

    /**
     * @description The contact IDs.
     *
     * This parameter is required.
     * @example 1,2
     *
     * @var string
     */
    public $contactIds;

    /**
     * @description The type of the task.
     *
     * Valid values:
     *
     *   cloud
     *   user
     *
     * This parameter is required.
     * @example user
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The name of the deployment task.
     *
     * This parameter is required.
     * @example jobName
     *
     * @var string
     */
    public $name;

    /**
     * @description The resource IDs.
     *
     * This parameter is required.
     * @example 6591316,6585549,6190248,5811894,5775176,5772504
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description The time when the task was scheduled.
     *
     * @example 1706613560008
     *
     * @var int
     */
    public $scheduleTime;
    protected $_name = [
        'certIds'      => 'CertIds',
        'contactIds'   => 'ContactIds',
        'jobType'      => 'JobType',
        'name'         => 'Name',
        'resourceIds'  => 'ResourceIds',
        'scheduleTime' => 'ScheduleTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIds) {
            $res['CertIds'] = $this->certIds;
        }
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeploymentJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIds'])) {
            $model->certIds = $map['CertIds'];
        }
        if (isset($map['ContactIds'])) {
            $model->contactIds = $map['ContactIds'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }

        return $model;
    }
}
