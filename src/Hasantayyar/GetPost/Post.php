<?php
namespace Hasantayyar\GetPost;

class Post
{
	protected $attributes = array();
        public $timeout = 5;
        public $connecttimeout = 10;

	public function __construct($url, $data)
	{
		$this->attributes['url'] = $url;
		$this->attributes['data'] = $data;
	}

	public static function build($url, $data)
	{
		return new static($url, $data);
	}

	public function send()
	{
		$payload = http_build_query($this->attributes['data']);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->attributes['url']);
		curl_setopt($ch, CURLOPT_POST, count($this->attributes['data']));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connecttimeout);
                curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
}
