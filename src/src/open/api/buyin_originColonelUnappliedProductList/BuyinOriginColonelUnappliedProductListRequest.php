<?php
	namespace ytk\open\api\buyin_originColonelUnappliedProductList;

	use ytk\open\cored\GlobalConfig;
	use ytk\open\cored\DoudianOpClient;
//auto generated code
class BuyinOriginColonelUnappliedProductListRequest
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
		return "/buyin/originColonelUnappliedProductList";
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
