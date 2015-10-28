<?php

namespace StarterKit\Cache;

class Redis {
	private static $instance = NULL;

	private static $host = NULL;
	private static $port = NULL;

	private function __construct()
	{
	}

	public static function getInstance($host_ = NULL, $port_ = NULL)
	{
		if (is_null(self::$instance) || (!is_null($host_) && $host_ != self::$host) || (!is_null($port_) && $port_ != self::$port)) {
			self::$host = $host_;
			self::$port = $port_;
			self::$instance = new \Redis();
			self::$instance->connect(self::$host, (int)self::$port);
		}
		return self::$instance;
	}
}
