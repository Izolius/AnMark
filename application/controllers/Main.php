<?php
include ("ANM_default_page.php");
class Main extends ANM_default_page {

	public function index()
	{
		$header['css']=array("styles.css");
		$title['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title',$title);
		$this->load->view('controls/left_menu');
		$this->load->view('footer');
	}
}
?>