<?php
namespace ytk\open\command\open\api\token;

class RefreshTokenRequest
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
        return "/token/refresh";
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