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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function logincheck()
	{
		if($this->input->post("submit"))
		{
			$email = $this->input->post("email");
			$password = $this->input->post("password");		
			$this->load->model("login_model");
			$res = $this->login_model->login($email, $password);
			if($res)
			{
				echo "Welcome ".$res->email;
			}
			else
			{
				redirect("welcome");
			}
		}
	}
}
