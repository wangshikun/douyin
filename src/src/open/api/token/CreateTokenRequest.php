<?php
namespace ytk\open\api\token;

use ytk\open\cored\GlobalConfig;
use ytk\open\cored\DoudianOpClient;
use ytk\open\api\token\param\CreateTokenParam;

class CreateTokenRequest
{

    //通用变量
    private $param;

    private $config;

    public function __construct()
    {
        $this->config = GlobalConfig::getGlobalConfig();
        $this->param = new CreateTokenParam();
    }

    public function getParam()
    {
        return $this->param;
    }

    //通用方法

    public function setParam($param)
    {
        $this->param = $param;
    }

    public function getUrlPath()
    {
        return "/token/create";
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function execute($accessToken)
    {
        return DoudianOpClient::getInstance()->request($this, $accessToken);
    }
}