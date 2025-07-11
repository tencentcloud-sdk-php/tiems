<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRuntime请求参数结构体
 *
 * @method string getRuntime() 获取要删除的Runtime名
 * @method void setRuntime(string $Runtime) 设置要删除的Runtime名
 */
class DeleteRuntimeRequest extends AbstractModel
{
    /**
     * @var string 要删除的Runtime名
     */
    public $Runtime;

    /**
     * @param string $Runtime 要删除的Runtime名
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
        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }
    }
}
