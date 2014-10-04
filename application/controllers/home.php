<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
        parent::__construct();

        is_front_login();
    }

	public function index()
	{
		echo "HOME";
	}

	public function signout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
