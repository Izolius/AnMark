<?php
include ("ANM_default_page.php");
class Api extends ANM_default_page {

    public function __construct()
    {
			parent::__construct();
            $this->load->database();
            $this->load->helper('date');
    }

    public function addFriend($params){
        $id=$params[0];
        $redirectto=$params[1];
		$query=$this->db->query(
			'select friend_id from Users 
			inner join Friends on Users.id=Friends.user_id
			where user_id=? && friend_id=?',array(currentUser()->id, $id));
		$canAdd=$id!=currentUser()->id && !(count($query->result())>0);
		if ($canAdd)
		{
			$this->db->query('insert into Friends values(?,?)',array(currentUser()->id,$id));
        }
        header('Location: '.site_url($redirectto),true,301);
    }
    
    public function RemoveFriend($params){
        $id=$params[0];
        $redirectto=$params[1];
        $query=$this->db->query(
			'select friend_id from Users 
			inner join Friends on Users.id=Friends.user_id
            where user_id=? && friend_id=?',array(currentUser()->id, $id));
        $canRemove=$id!=currentUser()->id && (count($query->result())>0);
        if ($canRemove)
        {
            $this->db->query('delete from Friends where user_id=? && friend_id=?',array(currentUser()->id,$id));
        }
        header('Location: '.site_url($redirectto),true,301);
    }

    public function AddPost($params){
        $id=$params[0];
        $text=$params[1];
        $redirectto=$params[2];
        $this->db->query('insert into Posts(user_id, author_id, text, created) 
                            values(?,?,?,?)',array($id,currentUser()->id,urldecode($text),mdate('%Y-%m-%d %h:%i:%s',now())));
        header('Location: '.site_url($redirectto),true,301);
    }

    public function sendMessage($params){
        $id=$params[0];
        $text=$params[1];
        $this->db->query('insert into Messages(idSender, idRecipient, text, created) values(?,?,?,?)',
        array(currentUser()->id, $id, urldecode($text), mdate('%Y-%m-%d %h:%i:%s',now())));
    }

    public function ShortPollingGetMessage($params){
        $id=$params[0];
        $last_id=$params[1];
        $query=$this->db->query('
        select users.id as userid, first_name, last_name, photo_50,text, created, messages.id as msgid from messages 
        inner join Users on users.id=idSender
        where (idSender=? && idRecipient=? || idRecipient=? && idSender=?) && messages.id>?
        order by created desc'
        ,array(currentUser()->id,$id,currentUser()->id,$id, $last_id));
        if ($query->row()!==null)
            $cur_id=$query->row()->msgid;
        foreach($query->result() as $row)
        {
            echo $this->load->view('controls/dialog',$row, TRUE);
        }
        flush();
        exit();
    }
}
?>