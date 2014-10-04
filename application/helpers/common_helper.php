<?php

	function pr($arr, $option="")
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
		if ($option != "") {
			exit();
		}
	}

	function public_path($type="www")
	{
		return base_url()."public/";
	}

	function admin_path($type="www")
	{
		return base_url()."admin/";
	}

    function profile_img_path($type="www")
    {
        return base_url()."uploads/profile_images/";
    }

	function is_login()
	{

		$CI =& get_instance();
		$session = $CI->session->userdata('user_session');

		if (!isset($session['id'])) {
			redirect(base_url());
		}
	}

    function is_front_login()
    {

        $CI =& get_instance();
        $session = $CI->session->userdata('front_session');

        if (!isset($session['id'])) {
            redirect(base_url());
        }
    }

	function error_msg_box($msg)
	{
		$html = '<div role="alert" class="alert alert-danger">
                    '.$msg.'
                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                </div>';
        return ($msg != '')?$html:'';
	}

	function get_active_tab($tab)
    {
    	$CI =& get_instance();
        if ($CI->router->fetch_method() == $tab) {
            return 'active';
        }
    }


    function sendEmail($to, $subject, $emailTpl, $from, $from_name, $cc='', $bcc=''){
        $CI =& get_instance();

        $CI->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $CI->email->initialize($config);

        $CI->email->from($from, $from_name);
        $CI->email->to($to);

        if($cc != ''){
            $CI->email->cc($cc);
        }

        if($bcc != ''){
            $CI->email->bcc($bcc);
        }

        $CI->email->subject($subject);
        $CI->email->message($emailTpl);

        $email_Sent = $CI->email->send();
        return $email_Sent;
    }




?>
