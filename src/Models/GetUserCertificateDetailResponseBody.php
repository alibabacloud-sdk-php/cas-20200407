<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class GetUserCertificateDetailResponseBody extends Model
{
    /**
     * @var bool
     */
    public $buyInAliyun;

    /**
     * @var string
     */
    public $cert;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $common;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sans;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'buyInAliyun' => 'BuyInAliyun',
        'cert'        => 'Cert',
        'city'        => 'City',
        'common'      => 'Common',
        'country'     => 'Country',
        'endDate'     => 'EndDate',
        'expired'     => 'Expired',
        'fingerprint' => 'Fingerprint',
        'id'          => 'Id',
        'issuer'      => 'Issuer',
        'key'         => 'Key',
        'name'        => 'Name',
        'orgName'     => 'OrgName',
        'province'    => 'Province',
        'requestId'   => 'RequestId',
        'sans'        => 'Sans',
        'startDate'   => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyInAliyun) {
            $res['BuyInAliyun'] = $this->buyInAliyun;
        }
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserCertificateDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyInAliyun'])) {
            $model->buyInAliyun = $map['BuyInAliyun'];
        }
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
