<?php

class App
{
	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		// get params array url
		$url = $this->parseUrl();

		// set up controller
		if (isset($url[0])) {
			$this->controller = $url[0];
			unset($url[0]);
		}
		$controller = ucfirst($this->controller) . 'Controller';
		$file = 'app/controllers/' . $controller . '.php';
		if (! file_exists($file)) {
			include_once 'app/views/errors/404_error.php';
			exit;
		}
		require_once $file;
		$this->controller = new $controller();

		// set up method
		if (isset($url[1])) {
			if ( is_callable([$this->controller, $url[1]]) ) {
				$this->method = $url[1];
			}
			unset($url[1]);
		}

		// set up params
		$this->params = isset($url[2]) ? array_values($url) : [];

		// run app
		call_user_func_array( [$this->controller, $this->method], $this->params );
	}

	public function parseUrl()
	{
		$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

		if ($url != null) {
			$url_trim = rtrim($url, '/');
			return explode('/', $url_trim);
		}
		
		return false;
	}

	public static function getBasePath()
	{
		return filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
	}

	public static function getAppPath()
	{
		return self::getBasePath() . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR;
	}

	public static function getPublicPath()
	{
		return self::getBasePath() . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;
	}
}
