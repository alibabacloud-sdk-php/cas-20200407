<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobResourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The end date of the certificate bound to the cloud resource. The value is a timestamp in seconds.
     *
     * @example 1681956830000
     *
     * @var string
     */
    public $certEndTime;

    /**
     * @description The ID of the certificate bound to the cloud resource.
     *
     * @example 11599949
     *
     * @var int
     */
    public $certId;

    /**
     * @description The name of the certificate bound to the cloud resource.
     *
     * @example sc-SSL
     *
     * @var string
     */
    public $certName;

    /**
     * @description The start date of the certificate bound to the cloud resource. The value is a timestamp in seconds.
     *
     * @example 1681956830000
     *
     * @var string
     */
    public $certStartTime;

    /**
     * @description The AccessKey ID used to access cloud resources.
     *
     * >  This parameter is required only when you deploy certificates to services of multiple clouds.
     * @example 1234
     *
     * @var string
     */
    public $cloudAccessId;

    /**
     * @description The cloud service provider of the cloud resource. Valid values:
     *
     *   **aliyun**: Alibaba Cloud
     *   **Tencent**: Tencent Cloud
     *
     * @example aliyun
     *
     * @var string
     */
    public $cloudName;

    /**
     * @description The cloud service. Valid values:
     *
     *   **CDN**: Alibaba Cloud CDN (CDN). This value is supported only at the China site (aliyun.com).
     *   **SLB**: Classic Load Balancer (CLB). This value is supported only at the China site (aliyun.com).
     *   **DCDN**: Dynamic Content Delivery Network (DCDN). This value is supported only at the China site (aliyun.com).
     *   **DDOS**: Anti-DDoS. This value is supported only at the China site (aliyun.com).
     *   **LIVE**: ApsaraVideo Live. This value is supported only at the China site (aliyun.com).
     *   **webHosting**: Cloud Web Hosting. This value is supported only at the China site (aliyun.com).
     *   **VOD**: ApsaraVideo VOD. This value is supported only at the China site (aliyun.com).
     *   **CR**: Container Registry. This value is supported only at the China site (aliyun.com).
     *   **ALB**: Application Load Balancer (ALB).
     *   **APIGateway**: API Gateway.
     *   **FC**: Function Compute.
     *   **GA**: Global Accelerator (GA).
     *   **MSE**: Microservices Engine (MSE).
     *   **NLB**: Network Load Balancer (NLB).
     *   **OSS**: Object Storage Service (OSS).
     *   **SAE**: Serverless App Engine (SAE).
     *   **TencentCDN**: Tencent Cloud Content Delivery Network (CDN).
     *   **WAF**: Web Application Firewall (WAF).
     *
     * @example SLB
     *
     * @var string
     */
    public $cloudProduct;

    /**
     * @description The region ID of the cloud service provider to which the cloud resource belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $cloudRegion;

    /**
     * @description Indicates whether the cloud resource is the default resource. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * >  This parameter is returned only when the value of CloudProduct is SLB, NLB, ALB, or GA.
     * @example 0
     *
     * @var int
     */
    public $defaultResource;

    /**
     * @description The domain name bound to the cloud resource.
     *
     * @example aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Indicates whether HTTPS is enabled for the cloud resource. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $enableHttps;

    /**
     * @description The time when the cloud resource was created. The time is a timestamp in seconds.
     *
     * @example 1673423339000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the cloud resource was last modified. The time is in the timestamp format.
     *
     * @example 1681956830000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the cloud resource.
     *
     * @example 20979
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID of the cloud resource.
     *
     * >  This parameter is returned only when the value of CloudProduct is SLB, NLB, ALB, or GA.
     * @example cas-cn-m7r1qocw91at
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The listener ID of the cloud resource.
     *
     * >  This parameter is returned only when the value of CloudProduct is SLB, NLB, ALB, or GA.
     * @example lsn-vwdff0q20poq5xazb9@443
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The listening port of the cloud resource.
     *
     * >  This parameter is returned only when the value of CloudProduct is SLB, NLB, ALB, or GA.
     * @example 8047
     *
     * @var string
     */
    public $listenerPort;

    /**
     * @description The region ID of the cloud resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The other metadata related to the cloud resource.
     *
     * @example {\\"camera_model\\":\\"GIFSHOW [1267087617][OnePlus
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the cloud resource.
     *
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether an Alibaba Cloud SSL certificate is used. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * >  This parameter is required only when you deploy certificates to services of multiple clouds.
     * @example 1
     *
     * @var int
     */
    public $useSsl;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1666884372152785
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'certEndTime'     => 'CertEndTime',
        'certId'          => 'CertId',
        'certName'        => 'CertName',
        'certStartTime'   => 'CertStartTime',
        'cloudAccessId'   => 'CloudAccessId',
        'cloudName'       => 'CloudName',
        'cloudProduct'    => 'CloudProduct',
        'cloudRegion'     => 'CloudRegion',
        'defaultResource' => 'DefaultResource',
        'domain'          => 'Domain',
        'enableHttps'     => 'EnableHttps',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'instanceId'      => 'InstanceId',
        'listenerId'      => 'ListenerId',
        'listenerPort'    => 'ListenerPort',
        'regionId'        => 'RegionId',
        'remark'          => 'Remark',
        'status'          => 'Status',
        'useSsl'          => 'UseSsl',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certEndTime) {
            $res['CertEndTime'] = $this->certEndTime;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certStartTime) {
            $res['CertStartTime'] = $this->certStartTime;
        }
        if (null !== $this->cloudAccessId) {
            $res['CloudAccessId'] = $this->cloudAccessId;
        }
        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }
        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }
        if (null !== $this->cloudRegion) {
            $res['CloudRegion'] = $this->cloudRegion;
        }
        if (null !== $this->defaultResource) {
            $res['DefaultResource'] = $this->defaultResource;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enableHttps) {
            $res['EnableHttps'] = $this->enableHttps;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
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
        if (null !== $this->useSsl) {
            $res['UseSsl'] = $this->useSsl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertEndTime'])) {
            $model->certEndTime = $map['CertEndTime'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertStartTime'])) {
            $model->certStartTime = $map['CertStartTime'];
        }
        if (isset($map['CloudAccessId'])) {
            $model->cloudAccessId = $map['CloudAccessId'];
        }
        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }
        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }
        if (isset($map['CloudRegion'])) {
            $model->cloudRegion = $map['CloudRegion'];
        }
        if (isset($map['DefaultResource'])) {
            $model->defaultResource = $map['DefaultResource'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EnableHttps'])) {
            $model->enableHttps = $map['EnableHttps'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
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
        if (isset($map['UseSsl'])) {
            $model->useSsl = $map['UseSsl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
