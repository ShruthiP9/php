<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller 
{

	
	public function index()
	{
		$this->load->view('main');
		
		
	}
	public function test()
	{
		$this->load->view('form');
	}
	public function shru()
	{
		$this->load->view('login');
		
	}
	public function wel()
	{
		$this->load->view('log');
		
	}
}

?>