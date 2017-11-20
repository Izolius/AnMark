<?php
class ANM_default_page extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('url','html','user'));
            $this->load->library('session');
    }

    public function _remap($method, $params = array())
    {
        if (null === currentUser()){
            header('Location: '.site_url('welcome'),true,301);
        }
        else{
            $this->$method($params);
        }
    }
}
?>