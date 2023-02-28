<?php
	
	namespace ytk\open\api\buyin_activityProductList;
	use ytk\open\cored\GlobalConfig;
	use ytk\open\cored\DoudianOpClient;
//接口用于一级团长查询自身提报了二级团长的商品及商品审核状态
class BuyinActivityProductListRequest
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
		return "/buyin/activityProductList";
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
