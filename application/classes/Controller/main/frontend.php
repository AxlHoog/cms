<?php

class Controller_Main_Frontend extends Controller_Template{

  public $template = 'template';
  public function before()
  {
    parent::before();
	
	$this->model_user_check = Model::factory('user')->check(); //probally the worst way to do this
    $this->template->title = 'cms';
	$this->template->css = "./style.css";
	//TODO: making the meta in its whole dynamic and database driven
	$this->template->meta_keywords = array();
	$this->template->meta_descrition = 'test cms text';
	$this->template->meta_charset = 'UTF-8';
	$this->template->meta_author = 'Author';
	
	$this->template->show_user_name =  $this->model_user_check;
	


  }
}
