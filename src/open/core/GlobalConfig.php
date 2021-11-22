<?php

namespace ytk\open\core;

use think\App;
use think\facade\Config;

class GlobalConfig extends DoudianOpConfig
{
    protected $config;
    private static $instance;

    private function __construct(){
        $config        = require __DIR__.'/../config/config.php';
        if (strpos(App::VERSION, '6.0') !== false) {
            $this->config = array_merge($config, Config::get('dk') ?? []);
        } else {
            $this->config = array_merge($config, Config::get('dk.') ?? []);
        }
        $this->appKey=$this->config['appKey'];
        $this->appSecret=$this->config['appSecret'];
        $this->httpConnectTimeout=!empty($this->config['httpConnectTimeout'])?$this->config['httpConnectTimeout']:1000;
        $this->httpReadTimeout=!empty($this->config['httpReadTimeout'])?$this->config['httpReadTimeout']:5000;
        $this->openRequestUrl=!empty($this->config['openRequestUrl'])?$this->config['openRequestUrl']:"https://openapi-fxg.jinritemai.com";
    }

    public static function getGlobalConfig(){

        if(!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone(){}
}