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
 * 域名证书配置
 *
 * @method string getHost() 获取域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HostCertInfo getHostCertInfo() 获取服务端证书配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCertInfo(HostCertInfo $HostCertInfo) 设置服务端证书配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class HostsCertificate extends AbstractModel
{
    /**
     * @var string 域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var HostCertInfo 服务端证书配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCertInfo;

    /**
     * @param string $Host 域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HostCertInfo $HostCertInfo 服务端证书配置。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("HostCertInfo",$param) and $param["HostCertInfo"] !== null) {
            $this->HostCertInfo = new HostCertInfo();
            $this->HostCertInfo->deserialize($param["HostCertInfo"]);
        }
    }
}
