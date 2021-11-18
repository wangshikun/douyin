<?php
namespace ytk\open\command\open\api\alliance_materialsProductsSearch;

use ytk\open\core\GlobalConfig;
use ytk\open\core\DoudianOpClient;

//auto generated code
class AllianceMaterialsProductsSearchRequest
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
        return "/alliance/materialsProductsSearch";
    }

    public function execute($accessToken)
    {
        return DoudianOpClient::getInstance()->request($this, $accessToken);
    }
}
