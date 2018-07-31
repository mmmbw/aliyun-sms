<?php
/**
 * Contact: QQ:30990835, Email: iamwangfei@126.com
 * Created by Wang fei
 * Date: 2018/7/31
 * Time: 13:53
 */

namespace Cisco\Aliyunsms\Facades;

use Illuminate\Support\Facades\Facade;

class Aliyunsms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'aliyunsms';
    }
}