<?php
class ANM_default_page extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('html');
    }
}
?>