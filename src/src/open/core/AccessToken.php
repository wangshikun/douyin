<?php
namespace ytk\open\core;

class AccessToken
{
    private $errNo;

    private $message;

    private $logId;

    private $data;

    public static function wrap($resp) {
        $accessToken = new AccessToken();
        if(property_exists($resp, "err_no")) {
            $accessToken->setErrNo($resp->err_no);
        }
        if(property_exists($resp, "message")){
            $accessToken->setMessage($resp->message);
        }
        if(property_exists($resp, "log_id")) {
            $accessToken->setLogId($resp->log_id);
        }
		if(property_exists($resp, "code")) {
			$accessToken->setCode($resp->code);
		}
		if(property_exists($resp, "msg")){
			$accessToken->setMsg($resp->msg);
		}
		if(property_exists($resp, "sub_code")){
			$accessToken->setSubCode($resp->sub_code);
		}
		if(property_exists($resp, "sub_msg")){
			$accessToken->setSubMsg($resp->sub_msg);
		}
		if(property_exists($resp, "log_id")) {
			$accessToken->setLogId($resp->log_id);
		}
		if(property_exists($resp, "data")) {
			$accessToken->setData($resp->data);
		}
        return $accessToken;
    }

	public function isSuccess()
	{
		return $this->code == 10000;
	}

	public function getAccessToken()
	{
		if($this->data != null && property_exists($this->data, "access_token")) {
			return $this->data->access_token;
		}
		return null;
	}

	public function getExpireIn() {
		if($this->data != null && property_exists($this->data, "expires_in")) {
			return $this->data->expires_in;
		}
		return null;
	}

    public function getRefreshToken() {
        if($this->data != null && property_exists($this->data, "refresh_token")) {
            return $this->data->refresh_token;
        }
        return null;
    }

    public function getScope() {
        if($this->data != null && property_exists($this->data, "scope")) {
            return $this->data->scope;
        }
        return null;
    }

    public function getShopId() {
        if($this->data != null && property_exists($this->data, "shop_id")) {
            return $this->data->shop_id;
        }
        return null;
    }

    public function getShopName() {
        if($this->data != null && property_exists($this->data, "shop_name")) {
            return $this->data->shop_name;
        }
        return null;
    }


	public function getCode()
	{
		return $this->code;
	}

	public function getMsg()
	{
		return $this->msg;
	}

	public function setMsg($message)
	{
		$this->msg = $message;
	}

	public function setSubCode($sub_code)
	{
		$this->sub_code = $sub_code;
	}

	public function getSubCode()
	{
		return $this->sub_code;
	}

	public function setCode($errNo)
	{
		$this->code = $errNo;
	}

    public function getErrNo()
    {
        return $this->errNo;
    }

    public function setErrNo($errNo)
    {
        $this->errNo = $errNo;
    }
	public function setSubMsg($sub_msg)
	{
		$this->sub_msg = $sub_msg;
	}
    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getLogId()
    {
        return $this->logId;
    }

    public function setLogId($logId)
    {
        $this->logId = $logId;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
	public function getSubMsg()
	{
		return $this->sub_msg;
	}
	
}