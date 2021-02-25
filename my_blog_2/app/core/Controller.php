<?php

class Controller
{
	public function model($model)
	{
		$file = 'app/models/' . $model . '.php';
		if (! file_exists($file)) {
			throw new Exception ($file . ' model not found!');
		}
		require_once $file;

		return new $model();
	}

	public function view($view, $data = null)
	{
		$view = 'app/views/' . $view . '.php';
		if (! file_exists($view)) {
			throw new Exception ($view . ' view not found!');
		}
		include_once $view;
	}
}