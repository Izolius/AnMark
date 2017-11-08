<?php
include ("ANM_default_page.php");
class Main extends ANM_default_page {
	public function __construct()
    {
			parent::__construct();
			$this->load->database();
	}

	public function index()
	{
		$header['css']=array("styles.css",'main.css');
		$title['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title',$title);
		$this->load->view('controls/left_menu');
		
		$query=$this->db->query('select Posts.id, first_name, last_name, photo_50, text from Posts
		inner join Users on Posts.user_id = Users.id where user_id=?',currentUser()->id);
		$feeddata['elements']=$query->result();
		$feeddata['class']='news_feed';
		$feeddata['view']='controls/post';
		$innerdata['user']=currentUser();
		$innerdata['feeddata']=$feeddata;
		$view['view']='main';
		$view['data']=$innerdata;

		$this->load->view('controls/page_placer', $view);
		$this->load->view('footer');
	}
}
?>