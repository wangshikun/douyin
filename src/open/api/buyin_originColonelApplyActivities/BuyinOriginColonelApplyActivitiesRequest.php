<?php
namespace ytk\open\api\buyin_originColonelApplyActivities;

use ytk\open\core\GlobalConfig;
use ytk\open\core\DoudianOpClient;
//团长报名二级团长活动
class BuyinOriginColonelApplyActivitiesRequest
{

	private $param;

	private $config;


	public function setParam($param)
	{
		$this->param = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function setConfig($config)
	{
		$this->config = $config;
	}

	public function getConfig()
	{
		return $this->config;
	}

	public function getUrlPath()
	{
		return "/buyin/originColonelApplyActivities";
	}

	public function execute($accessToken)
	{
		return DoudianOpClient::getInstance()->request($this, $accessToken);
	}

	public function __construct()
	{
		$this->config = GlobalConfig::getGlobalConfig();
	}
}
