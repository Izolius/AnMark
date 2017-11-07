<?php
class ANM_default_page extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('url','html'));
            $this->load->library('session');
    }

    public function _remap($method)
    {
        if (null === $this->session->userdata('user_id') && $method!=='index'){
            header('Location: '.site_url('welcome'),true,301);
        }
        else{
            $this->$method();
        }
    }
}
?>