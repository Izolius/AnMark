<?php
include ("ANM_default_page.php");

class Friends extends ANM_default_page {
	public function __construct()
    {
            parent::__construct();
			$this->load->database();
    }
	public function index()
	{
		$header['css']=array("styles.css", "friends.css");
		$title['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title',$title);
		$this->load->view('controls/left_menu');
		$query=$this->db->get('Users');
		// $query=$this->db->query('select * from Friends
		// inner join Users on Friends.friend_id=Users.id
		// where user_id=?',$this->db->escape($this->session->userdata('user_id')));
		$innerdata['friends']=$query->result();
		$view['view']='controls/friend_list';
		$view['data']=$innerdata;
		$this->load->view('controls/page_placer', $view);
		$this->load->view('footer');
	}
}
?>