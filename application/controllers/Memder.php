<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memder extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_user');
	}

	public function login()
	{
		$this->load->view('memder/login');
	}

	public function profile()
	{	
		$data = array('email'=>$_POST['email'], 'password'=>$_POST['pass']);
		$this->load->view('memder/profile',$data);
	}
}
