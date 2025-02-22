<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostCertificates返回参数结构体
 *
 * @method integer getTotalCount() 获取总数，用于分页查询。
 * @method void setTotalCount(integer $TotalCount) 设置总数，用于分页查询。
 * @method array getHostCertificates() 获取域名证书配置列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCertificates(array $HostCertificates) 设置域名证书配置列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHostCertificatesResponse extends AbstractModel
{
    /**
     * @var integer 总数，用于分页查询。
     */
    public $TotalCount;

    /**
     * @var array 域名证书配置列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCertificates;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数，用于分页查询。
     * @param array $HostCertificates 域名证书配置列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("HostCertificates",$param) and $param["HostCertificates"] !== null) {
            $this->HostCertificates = [];
            foreach ($param["HostCertificates"] as $key => $value){
                $obj = new HostsCertificate();
                $obj->deserialize($value);
                array_push($this->HostCertificates, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
