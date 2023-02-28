<?php
namespace ytk\open\api\buyin_instituteOrderAds;

use ytk\open\cored\GlobalConfig;
use ytk\open\cored\DoudianOpClient;

//auto generated code
class BuyinInstituteOrderAdsRequest
{

    private $param;

    private $config;

    public function __construct()
    {
        $this->config = GlobalConfig::getGlobalConfig();
    }

    public function getParam()
    {
        return $this->param;
    }

    public function setParam($param)
    {
        $this->param = $param;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function getUrlPath()
    {
        return "/buyin/instituteOrderAds";
    }

    public function execute($accessToken)
    {
        return DoudianOpClient::getInstance()->request($this, $accessToken);
    }
}
