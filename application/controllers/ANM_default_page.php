<?php
class ANM_default_page extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('html');
    }

	protected function index()
	{
		$header['css']=array("styles.css");
		$header['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title');
		$this->load->view('controls/left_menu');
		$this->load->view('footer');
	}
}
?>