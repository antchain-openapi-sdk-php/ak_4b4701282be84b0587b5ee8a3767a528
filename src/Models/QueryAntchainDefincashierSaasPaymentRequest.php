<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Ak_4b4701282be84b0587b5ee8a3767a528\Models;

use AlibabaCloud\Tea\Model;

class QueryAntchainDefincashierSaasPaymentRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // json请求参数
    /**
     * @var string
     */
    public $bizContent;

    // 编排版本
    /**
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'bizContent'        => 'biz_content',
        'serviceVersion'    => 'service_version',
    ];

    public function validate()
    {
        Model::validateRequired('bizContent', $this->bizContent, true);
        Model::validateRequired('serviceVersion', $this->serviceVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->bizContent) {
            $res['biz_content'] = $this->bizContent;
        }
        if (null !== $this->serviceVersion) {
            $res['service_version'] = $this->serviceVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAntchainDefincashierSaasPaymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['biz_content'])) {
            $model->bizContent = $map['biz_content'];
        }
        if (isset($map['service_version'])) {
            $model->serviceVersion = $map['service_version'];
        }

        return $model;
    }
}
