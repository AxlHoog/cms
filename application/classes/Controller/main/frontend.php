<?php

class Controller_Main_Frontend extends Controller_Template{

  public $template = 'template';
  public function before()
  {
    parent::before();
	
	$this->model_user_check = Model::factory('user')->check();
    $this->template->title = 'cms';
	$this->template->show_user_name =  $this->model_user_check;


  }
}
