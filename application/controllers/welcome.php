<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();

        $this->form_validation->set_error_delimiters('', '');
    }

	public function index()
	{
		$data['view'] = "index";
        $this->load->view('content', $data);
	}

	public function pricing()
	{
        $data['plans'] = $this->common_model->selectData(PLAN, '*', array('status' => 'active'));

		$data['view'] = "pricing";
        $this->load->view('content', $data);
	}


	public function signin()
	{
		if ($this->input->post()) {
			#validations
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');

			if ($this->form_validation->run() != FALSE){
				$post = $this->input->post();
				$user = $this->common_model->selectData(USER, '*', array('email' => $post['email'], 'password' => $post['password']));

				if (count($user) > 0 && $user[0]->account_status == 'active') {
					# create session
					$data = array('id' => $user[0]->id);
					$this->session->set_userdata('front_session',$data);
					redirect('home');

				}else{
					$data['error_msg'] = "Invalid username or password";
				}
			}

		}

		$data['view'] = "signin";
        $this->load->view('content', $data);
	}
}
