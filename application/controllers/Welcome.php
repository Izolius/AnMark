<?php
include ("ANM_default_page.php");

class Welcome extends ANM_default_page {
	public function __construct()
    {
            parent::__construct();
			$this->load->helper('form');
			$this->load->library('form_validation');
    }
	public function index()
	{
		if ($this->form_validation->run('signin') == FALSE)
		{
			$header['css']=array("styles.css", "welcome.css");
			$header['script']=array("welcome.js");
			$this->load->view('header', $header);
			$this->load->view('welcome');
			$this->load->view('footer');
		}
		else
		{
			$header['css']=array("styles.css", "welcome.css");
			$header['script']=array("welcome.js");
			$this->load->view('header', $header);
			$this->load->view('signedin');
			$this->load->view('footer');
		}
	}

	public function email_check($str)
	{
		$this->load->database();
		$this->db->select('email');
		$query = $this->db->get('Users');
		if (in_array(array('email'=>$str),$query->result_array(),true)){
			return true;
		}else{
			$this->form_validation->set_message('email_check', 'Пользователя с данной почтой и паролем не существует');
			return false;
		}
	}

	public function password_check($str)
	{
		$this->load->database();
		$this->db->select('email, password');
		$query = $this->db->get('Users');
		if (in_array(array('email'=>set_value('email'), 'password'=>$str),$query->result_array(),true)){
			return true;
		}else{
			$this->form_validation->set_message('email_check', 'Пользователя с данной почтой и паролем не существует');
			return false;
		}
	}
}
