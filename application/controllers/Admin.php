<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        // echo "<h1>Hello Admin</h1>";
		$data = array('name'=>'Pantakit@mail.com', 'password'=>'12345678');
		$this->load->view('welcome_admin',$data);
	}
}
