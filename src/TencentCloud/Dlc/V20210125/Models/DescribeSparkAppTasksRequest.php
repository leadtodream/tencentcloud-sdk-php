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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkAppTasks请求参数结构体
 *
 * @method string getJobId() 获取spark作业Id
 * @method void setJobId(string $JobId) 设置spark作业Id
 * @method integer getOffset() 获取分页查询偏移量
 * @method void setOffset(integer $Offset) 设置分页查询偏移量
 * @method integer getLimit() 获取分页查询Limit
 * @method void setLimit(integer $Limit) 设置分页查询Limit
 */
class DescribeSparkAppTasksRequest extends AbstractModel
{
    /**
     * @var string spark作业Id
     */
    public $JobId;

    /**
     * @var integer 分页查询偏移量
     */
    public $Offset;

    /**
     * @var integer 分页查询Limit
     */
    public $Limit;

    /**
     * @param string $JobId spark作业Id
     * @param integer $Offset 分页查询偏移量
     * @param integer $Limit 分页查询Limit
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
