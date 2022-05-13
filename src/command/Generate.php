<?php
// +----------------------------------------------------------------------
// | 社群团购电商Saas系统 [ E-commerce Froup Purchase Saas System ]
// +----------------------------------------------------------------------
// | Copyright (c) 2022 https://www.bancou.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 李容 @希泛科技 <https://www.bancou.com>
// +----------------------------------------------------------------------
namespace cnitker\codeGenerate\command;

use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\Output;

class Generate extends Command
{

    protected function configure()
    {
        $this->setName("xifan:make-controller")->addArgument("name",Argument::REQUIRED,'controller name');
    }


    protected function execute(Input $input, Output $output)
    {
       return $output->write("11111111");
    }

}