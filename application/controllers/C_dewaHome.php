<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dewaHome extends CI_Controller {

	public function index()
	{
		$this->load->view('V_dewaHome');
	}
}
