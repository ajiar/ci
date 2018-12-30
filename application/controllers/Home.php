<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$data =
		[
			'title' => 'Dashboard',
			'sub_title' => 'home',
			'content' => 'dashboard/home'
			
		];
		$this->load->view('template/my_template',$data);
	}
	
}