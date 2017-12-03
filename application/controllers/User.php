<?php
include ("ANM_default_page.php");
class User extends ANM_default_page {
	public function __construct()
    {
			parent::__construct();
			$this->load->database();
    }
    
    public function _remap($method, $params = array())
    {
		if (null === currentUser()){
            header('Location: '.site_url('welcome'),true,301);
        }
        else{
            $this->user($method,$params);
        }
    }

    public function user($id)
    {
		if ($id=='index')
		{
			$id=currentUser()->id;
		}        
		$header['css']=array("styles.css",'user.css', 'news_feed.css');
		$header['script']=array('user.js','api.js');
		$title['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title',$title);
		$this->load->view('controls/left_menu');
		
		$query=$this->db->query('select Posts.id, first_name, last_name, photo_50, text, author_id from Posts
		inner join Users on Posts.author_id = Users.id where user_id=?
		order by Posts.id DESC',$id);
		$feeddata['elements']=$query->result();
		$feeddata['class']='news_feed';
		$feeddata['view']='controls/post';
		
        $query=$this->db->query('select * from Users where id=?',$id);
		$innerdata['user']=$query->row();

		$query=$this->db->query(
			'select friend_id from Users 
			inner join Friends on Users.id=Friends.user_id
			where user_id=? && friend_id=?',array(currentUser()->id, $id));
		$innerdata['canAdd']=$id!=currentUser()->id && !(count($query->result())>0);
		$innerdata['canRemove']=$id!=currentUser()->id && (count($query->result())>0);
		$innerdata['feeddata']=$feeddata;
		$view['view']='user';
		$view['data']=$innerdata;

		$this->load->view('controls/page_placer', $view);
		$this->load->view('footer');
	}
}
?>