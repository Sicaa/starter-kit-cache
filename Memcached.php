<?php

namespace StarterKit\Cache;

class Memcached {
	private $mc = NULL;
	private static $instance = NULL;

	private static $host = NULL;
	private static $port = NULL;

	private function __construct($host_, $port_)
	{
		self::$host   = $host_;
		self::$port   = $port_;

		$this->mc = new \Memcached();
		$this->mc->addServer(self::$host, self::$port);
	}

	public function __call($method_, $args_)
	{
		return call_user_func_array(array(self::getInstance()->mc, $method_), $args_);
	}

	public function __clone()
	{
		trigger_error('Cloning not allowed', E_USER_ERROR);
	}

	public static function getInstance($host_ = NULL, $port_ = NULL)
	{
		if (is_null(self::$instance) || (!is_null($host_) && $host_ != self::$host) || (!is_null($port_) && $port_ != self::$port)) {
			self::$instance = new Memcached($host_, (int) $port_);
		}
		return self::$instance;
	}
}
