<?php
include ("ANM_default_page.php");
class User extends ANM_default_page {
	public function __construct()
    {
			parent::__construct();
			$this->load->database();
    }
    
    public function _remap($method)
    {
        //echo 'method : '.$method;
        $this->user($method);
    }

    public function user($id)
    {
        $header['css']=array("styles.css",'user.css');
		$title['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title',$title);
		$this->load->view('controls/left_menu');
		
		$query=$this->db->query('select Posts.id, first_name, last_name, photo_50, text, author_id from Posts
		inner join Users on Posts.author_id = Users.id where user_id=?',$id);
		$feeddata['elements']=$query->result();
		$feeddata['class']='news_feed';
        $feeddata['view']='controls/post';
        $query=$this->db->query('select * from Users where id=?',$id);
		$innerdata['user']=$query->row();
		$innerdata['feeddata']=$feeddata;
		$view['view']='user';
		$view['data']=$innerdata;

		$this->load->view('controls/page_placer', $view);
		$this->load->view('footer');
    }
}
?>