<?php
include ("ANM_default_page.php");
class News extends ANM_default_page {

	public function __construct()
    {
            parent::__construct();
			$this->load->database();
    }
	public function index()
	{
		$header['css']=array("styles.css",'news_feed.css');
		$title['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title',$title);
		$this->load->view('controls/left_menu');
		$id=currentUser()->id;

		$query=$this->db->query('select Posts.id, first_name, last_name, photo_50, text, author_id from Posts
		inner join Users on Posts.author_id = Users.id 
		where user_id=? || user_id in 
			(select friend_id from Friends inner join Users on Friends.friend_id=Users.id where user_id=?)
		',array($id, $id));
		$innerdata['elements']=$query->result();
		$innerdata['class']='123';
        $innerdata['view']='controls/post';
        //$query=$this->db->query('select * from Users where id=?',$id);
		$view['view']='controls/feed';
		$view['data']=$innerdata;

		$this->load->view('controls/page_placer', $view);



		$this->load->view('footer');
	}
}
?>