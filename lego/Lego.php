<?php

require_once dirname(__FILE__) . '/includes/widgets.php';
require_once dirname(__FILE__) . '/includes/functions.php';

class Lego
{
	private $themePath;
	
	public static function theme($path)
	{
		$this->themePath = $path;
	}
	
	private function processPage() {
		
	}
}