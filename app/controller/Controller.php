<?php
namespace controller;
use \framework\Tpl;
class Controller extends Tpl
{
	function __construct()
	{
		$confing = $GLOBALS['confing'];
		parent::__construct($confing['TPL_VIEW'], $confing['TPL_CACHE']);
	}

	function display($viewName = null, $isInclude = true, $uri = null)
	{
		if (empty($viewName)) {
			$viewName = $_GET['m'].'/'.$_GET['a'].'.html';
		}

		parent::display($viewName, $isInclude, $uri);
	}
}
