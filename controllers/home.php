<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
	
	$a['text']='hi';
	$this->load->helper('new_helper');
	$a['text']=test_method('hello world!');
	$this->load->view('home/home',$a);
	$this->load->view('home/home1');
	$this->load->model("new_model");
	$results=$this->new_model->get_all_thirdday();
	echo '<pre>';print_r($results);
  
	}
}
?>
