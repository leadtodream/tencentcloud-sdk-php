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

namespace TencentCloud\Wedata\V20210820;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wedata\V20210820\Models as Models;

/**
 * @method Models\BatchDeleteTasksNewResponse BatchDeleteTasksNew(Models\BatchDeleteTasksNewRequest $req) 批量删除任务，仅对任务状态为”已停止“有效；（Beta版本）

 * @method Models\BatchModifyOwnersNewResponse BatchModifyOwnersNew(Models\BatchModifyOwnersNewRequest $req) 批量修改任务责任人（Beta版本）
 * @method Models\BatchStopTasksNewResponse BatchStopTasksNew(Models\BatchStopTasksNewRequest $req) 仅对任务状态为”调度中“和”已暂停“有效，对所选任务的任务实例进行终止，并停止调度（Beta版本）
 * @method Models\CreateFolderResponse CreateFolder(Models\CreateFolderRequest $req) 创建文件夹（Beta版本）
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) 创建任务（Beta版本）
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) 创建工作流（Beta版本）
 * @method Models\DeleteFolderResponse DeleteFolder(Models\DeleteFolderRequest $req) 删除文件夹（Beta版本）
 * @method Models\DeleteWorkflowNewResponse DeleteWorkflowNew(Models\DeleteWorkflowNewRequest $req) 删除工作流（Beta版本）
 * @method Models\DescribeDependTasksNewResponse DescribeDependTasksNew(Models\DescribeDependTasksNewRequest $req) 根据层级查找上/下游任务节点（Beta版本）
 * @method Models\DescribeFolderListResponse DescribeFolderList(Models\DescribeFolderListRequest $req) 拉取文件夹目录（Beta版本）
 * @method Models\DescribeFolderWorkflowListResponse DescribeFolderWorkflowList(Models\DescribeFolderWorkflowListRequest $req) 拉取文件夹下的工作流（Beta版本）
 * @method Models\DescribeInstanceLogsResponse DescribeInstanceLogs(Models\DescribeInstanceLogsRequest $req) 获取实例日志列表（Beta版本）
 * @method Models\DescribeProjectResponse DescribeProject(Models\DescribeProjectRequest $req) 获取项目信息
 * @method Models\DescribeRelatedInstancesResponse DescribeRelatedInstances(Models\DescribeRelatedInstancesRequest $req) 查询任务实例的关联实例列表
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 查询任务具体详情（Beta版本）
 * @method Models\DescribeTaskInstancesResponse DescribeTaskInstances(Models\DescribeTaskInstancesRequest $req) 查询任务实例列表
 * @method Models\DescribeTaskScriptResponse DescribeTaskScript(Models\DescribeTaskScriptRequest $req) 查询任务脚本（Beta版本）
 * @method Models\DescribeTasksByPageResponse DescribeTasksByPage(Models\DescribeTasksByPageRequest $req) 根据工作流分页查询任务（Beta版本）
 * @method Models\ForceSucInstancesResponse ForceSucInstances(Models\ForceSucInstancesRequest $req) 实例批量置成功（Beta版本）
 * @method Models\FreezeTasksResponse FreezeTasks(Models\FreezeTasksRequest $req) 批量冻结任务（Beta版本）
 * @method Models\FreezeTasksByMultiWorkflowResponse FreezeTasksByMultiWorkflow(Models\FreezeTasksByMultiWorkflowRequest $req) 基于多个工作流进行批量冻结任务操作（Beta版本）
 * @method Models\KillInstancesResponse KillInstances(Models\KillInstancesRequest $req) 实例批量终止操作（Beta版本）
 * @method Models\MakeUpTasksNewResponse MakeUpTasksNew(Models\MakeUpTasksNewRequest $req) 任务批量补录，调度状态任务才可以补录；（Beta版本）

 * @method Models\MakeUpWorkflowNewResponse MakeUpWorkflowNew(Models\MakeUpWorkflowNewRequest $req) 工作流下所有任务的补录（Beta版本）
 * @method Models\ModifyFolderResponse ModifyFolder(Models\ModifyFolderRequest $req) 文件夹更新（Beta版本）
 * @method Models\ModifyTaskInfoResponse ModifyTaskInfo(Models\ModifyTaskInfoRequest $req) 更新任务（Beta版本）
 * @method Models\ModifyTaskLinksResponse ModifyTaskLinks(Models\ModifyTaskLinksRequest $req) 添加父任务依赖（Beta版本）
 * @method Models\ModifyTaskScriptResponse ModifyTaskScript(Models\ModifyTaskScriptRequest $req) 修改任务脚本（Beta版本）
 * @method Models\ModifyWorkflowInfoResponse ModifyWorkflowInfo(Models\ModifyWorkflowInfoRequest $req) 更新工作流（Beta版本）
 * @method Models\ModifyWorkflowScheduleResponse ModifyWorkflowSchedule(Models\ModifyWorkflowScheduleRequest $req) 更新工作流调度（Beta版本）
 * @method Models\RegisterEventResponse RegisterEvent(Models\RegisterEventRequest $req) 注册事件（Beta版本）
 * @method Models\RegisterEventListenerResponse RegisterEventListener(Models\RegisterEventListenerRequest $req) 注册事件监听器（Beta版本）
 * @method Models\RerunInstancesResponse RerunInstances(Models\RerunInstancesRequest $req) 实例批量重跑（Beta版本）
 * @method Models\RunTaskResponse RunTask(Models\RunTaskRequest $req) 运行任务（Beta版本）
 * @method Models\SetTaskAlarmNewResponse SetTaskAlarmNew(Models\SetTaskAlarmNewRequest $req) 设置任务告警，新建/更新告警信息（最新）（Beta版本）
 * @method Models\SubmitTaskResponse SubmitTask(Models\SubmitTaskRequest $req) 提交任务（Beta版本）
 * @method Models\SubmitWorkflowResponse SubmitWorkflow(Models\SubmitWorkflowRequest $req) 提交工作流（Beta版本）
 * @method Models\TriggerEventResponse TriggerEvent(Models\TriggerEventRequest $req) 触发事件（Beta版本）
 */

class WedataClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "wedata.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "wedata";

    /**
     * @var string
     */
    protected $version = "2021-08-20";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("wedata")."\\"."V20210820\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
