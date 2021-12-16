<?php 

namespace application\core;

class View{

	protected $path;
	protected $route;
	protected $layout = 'default';

	function __construct($route){
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($title, $vars=[]){
		extract($vars);
		require 'application/views/'.$this->path.'.php';
	}

	public function redirect($url){
		header('location: '.$url);
		exit;
	}
}