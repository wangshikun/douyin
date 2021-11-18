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
    protected $config;
    public function __construct(Request $request)
    {
        $config        = require __DIR__.'/../../config/config.php';
        if (strpos(App::VERSION, '6.0') !== false) {
            $this->config = array_merge($config, Config::get('dk') ?? []);
        } else {
            $this->config = array_merge($config, Config::get('dk.') ?? []);
        }
        $this->appKey=$this->config['appkey'];
        $this->appSecret=$this->config['appSecret'];
        $this->httpConnectTimeout=!empty($this->config['httpConnectTimeout'])?$this->config['httpConnectTimeout']:1000;
        $this->httpReadTimeout=!empty($this->config['httpReadTimeout'])?$this->config['httpReadTimeout']:5000;
        $this->openRequestUrl=!empty($this->config['openRequestUrl'])?$this->config['openRequestUrl']:"https://openapi-fxg.jinritemai.com";
    }
}