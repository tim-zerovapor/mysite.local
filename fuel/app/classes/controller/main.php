<?php

class Controller_Main extends Controller_Base
{

	public function action_index()
	{
		$this->template->title = 'Main &raquo; Index';
		$this->template->content = View::forge('main/index');
	}

}
