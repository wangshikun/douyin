<?php
namespace ytk\open\api\alliance_activityProductCategoryList;

//auto generated code
use ytk\open\cored\GlobalConfig;
use ytk\open\cored\DoudianOpClient;

class AllianceActivityProductCategoryListRequest
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
        return "/alliance/activityProductCategoryList";
    }

    public function execute($accessToken)
    {
        return DoudianOpClient::getInstance()->request($this, $accessToken);
    }
}
