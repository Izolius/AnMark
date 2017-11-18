<?php
include ("ANM_default_page.php");

class Friends extends ANM_default_page {
	public function __construct()
    {
            parent::__construct();
			$this->load->database();
	}

	public function _remap($method)
    {
		if (null === currentUser()){
            header('Location: '.site_url('welcome'),true,301);
        }
        else{
            $this->index($method);
        }
    }
	
	public function index($user_id)
	{
		if ($user_id=='index')
			$user_id=currentUser()->id;
		$header['css']=array("styles.css", "friends.css");
		$title['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title',$title);
		$this->load->view('controls/left_menu');
		$query=$this->db->query('select * from Friends inner join Users on Friends.friend_id=Users.id where user_id=?',$user_id);
		$innerdata['elements']=$query->result();
		$innerdata['class']='friend_list';
		$innerdata['view']='controls/friend';
		$view['view']='controls/feed';
		$view['data']=$innerdata;
		$this->load->view('controls/page_placer', $view);
		$this->load->view('footer');
	}
}
?>