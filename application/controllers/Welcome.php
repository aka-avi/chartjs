<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login(){
		$this->load->view('index');
	}

	public function logout(){
		
//logout.php

include(base_url().'application/config/google.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header(base_url('index.php/welcome/login'));
	}


	public function get_user(){
		$this->load->view('count');
	}

	public function get_user_ct(){
		$time = $_POST['time'];
		$role = $_POST['role'];
		echo get_count_user($role, $time);
	}
}
