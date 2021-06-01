<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
                parent::__construct();
                $this->load->model('Register_model');
    }

	public function index()
	{
        $data['query'] = $this->Register_model->showmember();
        // var_dump($data['query']);

		$this->load->view('register');
		$this->load->view('register_view',$data);
	}

    public function add()
	{
        $this->Register_model->addmember();
	}
}
