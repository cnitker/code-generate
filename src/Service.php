<?php
// +----------------------------------------------------------------------
// | 社群团购电商Saas系统 [ E-commerce Froup Purchase Saas System ]
// +----------------------------------------------------------------------
// | Copyright (c) 2022 https://www.bancou.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 李容 @希泛科技 <https://www.bancou.com>
// +----------------------------------------------------------------------

namespace cnitker\codeGenerate;


use cnitker\codeGenerate\command\Generate;

class Service extends \think\Service
{

    public function boot(): void
    {
        $this->commands([
            Generate::class
        ]);
    }
}