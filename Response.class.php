<?php

namespace AWSPHP_APIGatewayLambdaWrapper;

class Response
{
	public $vars = [
		 'statusCode' => 200
		,'headers'    => [
		 	 'Content-Type' => 'application/json'
		]
		,'body'            => null
		,'isBase64Encoded' => false
	];

	public function toJSON()
	{
		return json_encode($this->vars);
	}

	public function __construct($body = null)
	{
		$this->vars['body'] = $body;
	}
}
