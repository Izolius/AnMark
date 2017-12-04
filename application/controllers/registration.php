<?php
include ("ANM_default_page.php");
class Registration extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('url','html','user','date'));
            $this->load->library('session');
    }
    public function index()
    {
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');

            if ($this->form_validation->run('signup') == FALSE)
            {
                $header['css']=array("styles.css");
                $this->load->view('header', $header);
                $this->load->view('registration');
                $this->load->view('footer');
            }
            else
            {
                $data = array(
                    'first_name' => set_value('first_name'),
                    'last_name' => set_value('last_name'),
                    'password' => set_value('password'),
                    'email'=> set_value('email'),
                    'registration'=>mdate('%Y-%m-%d %h:%i:%s',now())
                    );
                    $this->db->insert('Users',$data);
                    header('Location: '.site_url('welcome'),true,301);
            }
    }

    public function email_check($str)
    {
        $this->load->database();
        $this->db->select('email');
        $query = $this->db->get('Users');
        if (in_array(array('email'=>$str),$query->result_array(),true)){
            $this->form_validation->set_message('email_check', 'Пользователь с такой почтой уже зарегистрирован');
            return false;
        }else{
            return true;
        }
    }
}