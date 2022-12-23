<?php
namespace ytk\open\core;

use think\App;
use think\Request;
use think\facade\Config;

class DoudianOpConfig
{
    public $appKey;
    public $appSecret;
    public $httpConnectTimeout = 0;
    public $httpReadTimeout = 0;
    public $openRequestUrl ='';
}