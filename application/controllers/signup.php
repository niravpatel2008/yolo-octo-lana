<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	function __construct(){
        parent::__construct();

        $this->form_validation->set_error_delimiters('', '');
    }

	public function index($plan_id)
	{
		$data['plans'] = $this->common_model->selectData(PLAN, '*', array('status' => 'active', 'id' => $plan_id));
		#only active plans can be purchased
		if (count($data['plans']) <= 0) {
			redirect('pricing');
		}


		if ($this->input->post()) {
			#validations
			$this->form_validation->set_rules('firstname', 'First name', 'trim|required');
			$this->form_validation->set_rules('lastname', 'Last name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique['.USER.'.email]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|md5');
			$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|matches[password]');

			if ($this->form_validation->run() != FALSE){
				$post = $this->input->post();
				$user = array('first_name' => $post['firstname'],
								'last_name' => $post['lastname'],
								'email' => $post['email'],
								'password' => $post['password'],
								'plan_id' => $plan_id,
								'account_status' => 'active',
								'account_type' => 'trial'
							);
				$id = $this->common_model->insertData(USER, $user);
				if ($id > 0) {
					# set session & take to home page
					$data = array('id' =>$id);
					$this->session->set_userdata('front_session',$data);
					redirect('home');
				}else{
					$data['error_msg'] = 'An error occurred while processing, please try again later.';
				}
			}

		}

		$data['view'] = "index";
        $this->load->view('content', $data);
	}


}
