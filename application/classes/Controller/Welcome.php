<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Main_Frontend {

	public function action_index()
	{
		$this->template->content = View::factory('frontend/page/welcome');		
	}

} // End Welcome
