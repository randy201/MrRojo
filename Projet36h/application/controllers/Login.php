<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	public function log(){
        $this->load->model('verif_model');
		if(!$this->verif_model->verif($_POST['name'], $_POST['psd'])){redirect(site_url('Login'));}
        else {
            // echo 'Bonjour '.$_POST['name'];
			// $this->load->library('session');
			$this->session->set_userdata('name',$_POST['name'] );
			redirect(site_url('Test/getDonne'));
        }
	}	
			
}
