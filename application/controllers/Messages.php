<?php
include ("ANM_default_page.php");
class Messages extends ANM_default_page {

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
            $this->index($method, $params);
        }
	}
	
	public function index($user_id)
	{
		if ($user_id=='index')
		{
			$this.dialogs();
			return;
		}
		$header['css']=array("styles.css",'messages.css','friends.css');
		$header['script']=array('messages.js','api.js','script.js');
		$title['logo']="logo_100_60";
		$this->load->view('header', $header);
		$this->load->view('controls/Title',$title);
		$this->load->view('controls/left_menu');

		$query=$this->db->query('
		select users.id as userid, first_name, last_name, photo_50,text, created, messages.id as msgid from  messages 
		inner join users on users.id=idSender
		where idSender=? && idRecipient=? || idRecipient=? && idSender=?
		order by created desc'
			,array(currentUser()->id,$user_id,currentUser()->id,$user_id));
		$feeddata['elements']=$query->result();
		$feeddata['class']='dialog_list';
		$feeddata['id']='messages_id';
		$feeddata['view']='controls/dialog';

		$query=$this->db->query('select * from Users where id=?',$user_id);
		$innerdata['user']=$query->row();
		$innerdata['feeddata']=$feeddata;
		$view['view']='messages';
		$view['data']=$innerdata;
		$view['left_index']=2;
		$this->load->view('controls/page_placer', $view);


		$this->load->view('footer');
	}

	private function dialogs()
	{

	}
}
?>